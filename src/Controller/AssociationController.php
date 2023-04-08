<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\HttpClient;

use App\Service\FindApiService;

use JMS\Serializer\SerializerBuilder;

class AssociationController extends AbstractController
{

    private $findApi;


    public function __construct(LoggerInterface $logger, FindApiService $findApi)
    {
        // parent::__construct($logger);
        $this->findApi = $findApi;

    }





    function saveFile($file, $filesrcsave, $filenameext) {
        // Créer le dossier si celui-ci n'existe pas
        if (!file_exists($filesrcsave)) {
            mkdir($filesrcsave, 0777, true);
        }
        // $filenameext = $file->getClientOriginalName();
        $save = $file->move($filesrcsave, $filenameext);
    
        if ($save) {
            return $filesrcsave;
        } else {
            return false;
        }
    }

    

    
    /**
     * @Route("/association/add", name="association_add")
     * @Template()
     */
    public function associationAdd(Request $request, FindApiService $findApi)
    {
        $inputData = $request->request->all();



        $inputData['creation'] = strtotime($inputData['creation']);


        //GESTION DE LA SAUVEGARDE FICHIER
        
        $file = $request->files->get('logo');
        $id = uniqid();

    if($file != null){
        $filenameext = $file->getClientOriginalName();
        $filesrcsave = 'associations/' . $id;

        $savelogoasso = $filesrcsave .'/'. $filenameext; 
        $save = $this->saveFile($file, $filesrcsave, $filenameext);
    }



    // PARTICULARITY
        if (!isset($inputData['particularity'])){
        $inputData['particularity'] = array();
    }

    // ANECDOTE
        if (!isset($inputData['anecdote'])){
        $inputData['anecdote'] = array();
    }else{ 
        $counter = -1;
        foreach ($inputData['anecdote'] as &$anecdote) {

            // ENREGISTREMENT FICHIER
            $anecdoteuniqid = uniqid();
            $counter = $counter +1;
            // $anecdote['file'][0]['folderanecdoteid'] = $anecdoteuniqid;
            $fileanecdote = $request->files->get('anecdote')[$counter]['file'][0]['path'];
            if($fileanecdote != null){
                $filenameext = $fileanecdote->getClientOriginalName();
                $filesrcsave = 'associations/' . $id . '/anecdotes/'. $anecdoteuniqid;
        
                $saveanecdoteasso = $filesrcsave .'/'. $filenameext; 
                $save = $this->saveFile($fileanecdote, $filesrcsave, $filenameext);

                $anecdote['file'][0]['path'] = $saveanecdoteasso;
            }else{
                unset($inputData['anecdote'][$counter]['file']);
            }


            $anecdote["year"] = strtotime($anecdote["year"]);
        }
    }

    // DOCUMENT
        if (!isset($inputData['document'])){
        $inputData['document'] = array();
    }else{
        $counter = -1;
        foreach ($inputData['document'] as &$document) {

            // ENREGISTREMENT FICHIER
            $documentuniqid = uniqid();
            $counter = $counter +1;
            // $document['folderdocumentid'] = $documentuniqid;
            $filedocument = $request->files->get('document')[$counter]['file']['path'];
            if($filedocument != null){
                $filenameext = $filedocument->getClientOriginalName();
                $filesrcsave = 'associations/' . $id . '/documents/'. $documentuniqid;
        
                $savedocumentasso = $filesrcsave .'/'. $filenameext; 
                $save = $this->saveFile($filedocument, $filesrcsave, $filenameext);

                $document['file']['path'] = $savedocumentasso;
            }else{
                unset($inputData['document'][$counter]['file']);
            }
            $document["year"] = strtotime($document["year"]);
        }
    }

    // DECORUM
    if (!isset($inputData['decorum'])){
        $inputData['decorum'] = array();
    }else{
        $counter= -1;
        foreach ($inputData['decorum'] as &$decorum) {

            // ENREGISTREMENT FICHIER
            $decorumuniqid = uniqid();
            $counter = $counter +1;
            $filedecorum = $request->files->get('decorum')[$counter]['file'][0]['path'];
            if($filedecorum != null){
            $filenameext = $filedecorum->getClientOriginalName();
            $filesrcsave = 'associations/' . $id . '/decorums/'. $decorumuniqid;
    
            $savedecorumasso = $filesrcsave .'/'. $filenameext; 
            $save = $this->saveFile($filedecorum, $filesrcsave, $filenameext);

            $decorum['file'][0]['path'] = $savedecorumasso;
            }else{
                unset($inputData['decorum'][$counter]['file']);
            }

            $decorum["year"] = strtotime($decorum["year"]);
        }
    }

    // GOODIES
    if (!isset($inputData['goodies'])){
        $inputData['goodies'] = array();
    }else{
        $counter= -1;
        foreach ($inputData['goodies'] as &$goodies) {

            // ENREGISTREMENT FICHIER
            $goodiesuniqid = uniqid();
            $counter = $counter +1;
            $filegoodies = $request->files->get('goodies')[$counter]['file'][0]['path'];
            if($filegoodies != null){
            $filenameext = $filegoodies->getClientOriginalName();
            $filesrcsave = 'associations/' . $id . '/goodies/'. $goodiesuniqid;
    
            $savegoodiesasso = $filesrcsave .'/'. $filenameext; 
            $save = $this->saveFile($filegoodies, $filesrcsave, $filenameext);

            $goodies['file'][0]['path'] = $savegoodiesasso;
            }else{
                unset($inputData['goodies'][$counter]['file']);
            }

            $goodies["year"] = strtotime($goodies["year"]);
        }
    }

    // SING
    if (!isset($inputData['sing'])){
        $inputData['sing'] = array();
    }else{
        $inputData['sing']['year'] = strtotime($inputData['sing']['year']);
    }

    // COMMITTEE
    if (!isset($inputData['committee'])){
        $inputData['committee'] = array();
    }else{
        $bddcommittee = array();
        foreach ($inputData['committee'] as &$committee) {
            $year = $committee["year"];
            $type = $committee["type"];
            $name = $committee["name"];
            $firstname = $committee["firstname"];
            $nickname = $committee["nickname"];
        
            // Vérifier si l'année existe déjà dans $bddcommittee
            if (isset($bddcommittee[$year])) {
                // Vérifier si le type de comité existe déjà pour cette année
                if (isset($bddcommittee[$year][$type])) {
                    // Si oui, générer un identifiant unique à partir du compteur et ajouter une nouvelle entrée
                    $id = count($bddcommittee[$year][$type]);
                    $bddcommittee[$year][$type][$id] = array(
                        "name" => $name,
                        "firstname" => $firstname,
                        "nickname" => $nickname
                    );
                } else {
                    // Sinon, créer une nouvelle entrée pour le type de comité correspondant
                    $bddcommittee[$year][$type] = array(
                        "0" => array(
                            "name" => $name,
                            "firstname" => $firstname,
                            "nickname" => $nickname
                        )
                    );
                }
            } else {
                // Sinon, créer une nouvelle entrée pour l'année et le type de comité correspondant
                $bddcommittee[$year] = array(
                    $type => array(
                        "0" => array(
                            "name" => $name,
                            "firstname" => $firstname,
                            "nickname" => $nickname
                        )
                    )
                );
            }
        }
        $inputData['committee'] = $bddcommittee;

    }


    //SUPPRESSION DES CHAINES VIDES CHANT ET DES DATES NON REMPLIES    
        if($inputData['creation'] == false){
            ($inputData['creation'] = 0);
        }
        if($inputData['sing']['title'] == ""){
            unset($inputData['sing']['title']);
        }
        if($inputData['sing']['author'] == ""){
            unset($inputData['sing']['author']);
        }
        if($inputData['sing']['year'] == false){
            unset($inputData['sing']['year']);
        }
        if($inputData['sing']['text'] == ""){
            unset($inputData['sing']['text']);
        }

        $data = $inputData;
        $data['folderid'] = 'associations/' . $id;
        if(isset($savelogoasso)){
        $data['logo'] = $savelogoasso;
    }

        // exit(var_dump($data));

        $createassociation = $this->findApi->createAssociation(json_encode($data));
        
        return $this->redirectToRoute('association_list');

    }



    /**
     * @Route("/association/list", name="association_list")
     * @Template()
     */
    public function associationList(FindApiService $findApi)
    {

		$data['required'] = $_ENV['REQUIRED_INPUT'];

        $data['page'] = 'association';
        $associations = $this->findApi->getAssociations();

        $town = $this->findApi->getTowns(null);
        // exit(var_dump($town));
        $data['towns'] = array_column($town['data'], 'name');


        $data['associations'] = $associations['data'];

        return $this->render('Associations/associationlist.html.twig', $data);
    }



    /**
     * @Route("/association/{id}", name="association_details")
     * @Template()
     */
    public function associationDetails(Request $request, FindApiService $findApi)
    {
        $data['page'] = 'association';

        $town = $this->findApi->getTowns(null);
        $data['towns'] = array_column($town['data'], 'name');

        $id = $request->get('id');
        $data['redirect'] = $request->get('redirect');
        $association = $this->findApi->getAssociation($id);

        // if (isset($data['particularity'])){
            $data['numberparticularity'] = count($association['particularity']);
        // }
        // if (isset($data['anecdote'])){
        $data['numberanecdote'] = count($association['anecdote']);
        // }
        // if (isset($data['document'])){
        $data['numberdocument'] = count($association['document']);
        // }
        // if (isset($data['decorum'])){
        $data['numberdecorum'] = count($association['decorum']);
        // }
        // if (isset($data['goodies'])){
        $data['numbergoodies'] = count($association['goodies']);
        // }
        // if (isset($data['committee'])){
        $data['numbercommittee'] = count($association['committee']);
        // }
        $data['association'] = $association;

        return $this->render('Associations/association.html.twig', $data);
    }



    /**
     * @Route("/association/patch/{id}", name="association_patch")
     * @Template()
     */
    public function associationPatch(Request $request, FindApiService $findApi)
    {
        $id = $request->get('id');

        $association = $this->findApi->getAssociation($id);
        $inputData = $request->request->all();
        $filelogo = $request->files->get('logo');


    // INFORMATIONS
    if (isset($inputData['creation'])){
        if($inputData['creation'] == false){
            $inputData['creation'] == null;
        }else{
        $inputData['creation'] = strtotime($inputData['creation']);
        }
    }

    ////////////// MODIFICATION DU LOGO
    if ($filelogo !== null){

        if (file_exists($association['logo'])){
            unlink($association['logo']);
        }
        $filenameext = $_FILES['logo']['name'];
        $filesrcsave = dirname($association['logo']);
        $savebdd = $filesrcsave .'/'. $filenameext; 
        $save = $this->saveFile($filelogo, $filesrcsave, $filenameext);
    }

    //SUPPRESSION DES CHAINES VIDES CHANT ET DES DATES NON REMPLIES    
    if (isset($inputData['sing'])){
        if($inputData['sing']['title'] == ""){
            unset($inputData['sing']['title']);
        }
        if($inputData['sing']['author'] == ""){
            unset($inputData['sing']['author']);
        }
        if($inputData['sing']['year'] == false){
            unset($inputData['sing']['year']);
        }else{
        $inputData['sing']['year'] = strtotime($inputData['sing']['year']);
        }
        if($inputData['sing']['text'] == ""){
            unset($inputData['sing']['text']);
        }
    }

    $data = $inputData;
    if (isset($savebdd)){
    $data['logo'] = $savebdd;
}
    $redirect = "informations";

    // exit(var_dump($data));


    // PARTICULARITY
    if (isset($inputData['particularity'])){
        if ($inputData['action'] != "deleteassociation" ){
        $data['particularity'] = array_replace_recursive($association['particularity'], $inputData['particularity']);
        $redirect = "particularity";
        }else{
            $data['particularity'] = array_diff($association['particularity'], $inputData['particularity']);
            $data['particularity'] = array_values($data['particularity']);
        $redirect = "particularity";
        }
    }

    // ANECDOTES
    if (isset($inputData['anecdote'])){
        $keynumber = array_keys($inputData['anecdote']);
        if ($inputData['action'] != "deleteassociation" ){

            // SAUVEGARDE FICHIER
            $fileanecdote = $request->files->get('anecdote')[$keynumber[0]]['file'][0]['path'];
            if($fileanecdote != null){
                $uniqid = uniqid();
                if($inputData['action'] == "modifyassociation" ){
                    if(isset($association['anecdote'][$keynumber[0]]['file'])){
                        if (file_exists($association['anecdote'][$keynumber[0]]['file'][0]['path'])) {
                        unlink($association['anecdote'][$keynumber[0]]['file'][0]['path']);
                        rmdir(dirname($association['anecdote'][$keynumber[0]]['file'][0]['path']));
                        }
                    }
                }
                $filenameext = $fileanecdote->getClientOriginalName();
                $filesrcsave = $association['folderid'] . '/anecdotes/'. $uniqid;
                $saveanecdoteasso = $filesrcsave .'/'. $filenameext; 
                $save = $this->saveFile($fileanecdote, $filesrcsave, $filenameext);
                $inputData['anecdote'][$keynumber[0]]['file'][0]['path'] = $saveanecdoteasso;
            }else{
                unset($inputData['anecdote'][$keynumber[0]]['file']);
            }
            /////// SAUVEGARDE FICHIER
            $inputData['anecdote'][$keynumber[0]]['year'] = strtotime($inputData['anecdote'][$keynumber[0]]['year']);
            $data['anecdote'] = array_replace_recursive($association['anecdote'], $inputData['anecdote']);
            $redirect = "anecdotes";
        }else{
            if(isset($association['anecdote'][$keynumber[0]]['file'][0]['path'])){
                unlink($association['anecdote'][$keynumber[0]]['file'][0]['path']);
                rmdir(dirname($association['anecdote'][$keynumber[0]]['file'][0]['path']));
                }

            
            unset($association['anecdote'][$keynumber[0]]);
            $data['anecdote'] = array_values($association['anecdote']);
            $redirect = "anecdotes";
        }
    }

    // DOCUMENTS
    if (isset($inputData['document'])){
        $keynumber = array_keys($inputData['document']);
        if ($inputData['action'] != "deleteassociation" ){
            // SAUVEGARDE FICHIER
            $filedocument = $request->files->get('document')[$keynumber[0]]['file']['path'];
            if($filedocument != null){
                $uniqid = uniqid();
                if($inputData['action'] == "modifyassociation" ){
                unlink($association['document'][$keynumber[0]]['file']['path']);
                rmdir(dirname($association['document'][$keynumber[0]]['file']['path']));
                }
                $filenameext = $filedocument->getClientOriginalName();
                $filesrcsave = $association['folderid'] . '/documents/'. $uniqid;
                $savedocumentasso = $filesrcsave .'/'. $filenameext; 
                $save = $this->saveFile($filedocument, $filesrcsave, $filenameext);
                $inputData['document'][$keynumber[0]]['file']['path'] = $savedocumentasso;
            }
            /////// SAUVEGARDE FICHIER

            $inputData['document'][$keynumber[0]]['year'] = strtotime($inputData['document'][$keynumber[0]]['year']);
            $data['document'] = array_replace_recursive($association['document'], $inputData['document']);
            $redirect = "documents";
        }else{
            if(isset($association['document'][$keynumber[0]]['file']['path'])){
            unlink($association['document'][$keynumber[0]]['file']['path']);
            rmdir(dirname($association['document'][$keynumber[0]]['file']['path']));
            }

            unset($association['document'][$keynumber[0]]);
            $data['document'] = array_values($association['document']);
            $redirect = "documents";
        }
    }

    // DECORUM
    if (isset($inputData['decorum'])){
        $keynumber = array_keys($inputData['decorum']);
        if ($inputData['action'] != "deleteassociation" ){

            // SAUVEGARDE FICHIER
            $filedecorum = $request->files->get('decorum')[$keynumber[0]]['file'][0]['path'];
            if($filedecorum != null){
                $uniqid = uniqid();
                if($inputData['action'] == "modifyassociation" ){
                    if(isset($association['decorum'][$keynumber[0]]['file'])){
                        if (file_exists($association['decorum'][$keynumber[0]]['file'][0]['path'])) {
                        unlink($association['decorum'][$keynumber[0]]['file'][0]['path']);
                        rmdir(dirname($association['decorum'][$keynumber[0]]['file'][0]['path']));
                        }
                    }
                }
                $filenameext = $filedecorum->getClientOriginalName();
                $filesrcsave = $association['folderid'] . '/decorums/'. $uniqid;
                $savedecorumasso = $filesrcsave .'/'. $filenameext; 
                $save = $this->saveFile($filedecorum, $filesrcsave, $filenameext);
                $inputData['decorum'][$keynumber[0]]['file'][0]['path'] = $savedecorumasso;
            }
            /////// SAUVEGARDE FICHIER

            $inputData['decorum'][$keynumber[0]]['year'] = strtotime($inputData['decorum'][$keynumber[0]]['year']);
            $data['decorum'] = array_replace_recursive($association['decorum'], $inputData['decorum']);
            $redirect = "decorums";
        }else{
            if(isset($association['decorum'][$keynumber[0]]['file'][0]['path'])){
                unlink($association['decorum'][$keynumber[0]]['file'][0]['path']);
                rmdir(dirname($association['decorum'][$keynumber[0]]['file'][0]['path']));
                }

            unset($association['decorum'][$keynumber[0]]);
            $data['decorum'] = array_values($association['decorum']);
            $redirect = "decorums";
        }
    }

    // GOODIES
    if (isset($inputData['goodies'])){
        $keynumber = array_keys($inputData['goodies']);
        if ($inputData['action'] != "deleteassociation" ){

            // SAUVEGARDE FICHIER
            $filegoodies = $request->files->get('goodies')[$keynumber[0]]['file'][0]['path'];
            if($filegoodies != null){
                $uniqid = uniqid();
                if($inputData['action'] == "modifyassociation" ){
                    if(isset($association['goodies'][$keynumber[0]]['file'])){
                        if (file_exists($association['goodies'][$keynumber[0]]['file'][0]['path'])) {
                        unlink($association['goodies'][$keynumber[0]]['file'][0]['path']);
                        rmdir(dirname($association['goodies'][$keynumber[0]]['file'][0]['path']));
                        }
                    }
                }
                $filenameext = $filegoodies->getClientOriginalName();
                $filesrcsave = $association['folderid'] . '/goodies/'. $uniqid;
                $savegoodiesasso = $filesrcsave .'/'. $filenameext; 
                $save = $this->saveFile($filegoodies, $filesrcsave, $filenameext);
                $inputData['goodies'][$keynumber[0]]['file'][0]['path'] = $savegoodiesasso;
            }
            /////// SAUVEGARDE FICHIER

            $inputData['goodies'][$keynumber[0]]['year'] = strtotime($inputData['goodies'][$keynumber[0]]['year']);
            $data['goodies'] = array_replace_recursive($association['goodies'], $inputData['goodies']);
            $redirect = "goodies";
        }else{
            if(isset($association['goodies'][$keynumber[0]]['file'][0]['path'])){
                unlink($association['goodies'][$keynumber[0]]['file'][0]['path']);
                rmdir(dirname($association['goodies'][$keynumber[0]]['file'][0]['path']));
                }


            unset($association['goodies'][$keynumber[0]]);
            $data['goodies'] = array_values($association['goodies']);
            $redirect = "goodies";
        }
    }

    // CHANT
    if (isset($inputData['sing'])){
        $data = $inputData;
        $redirect = "chant";
    }

    // COMMITTEE
    if (isset($inputData['committee'])){
        if ($inputData['action'] != "deleteassociation" ){
            if($inputData['action'] == "addassociation"){
                $year = $inputData['committee']['year'];
                $function = $inputData['committee']['function'];
                // exit(var_dump($association));
                if (!isset($association['committee'][$year])){
                    exit(var_dump($inputData));
                    $association['committee'][$year] = array();
                    exit(var_dump("annee"));
                }
                if (!isset($association['committee'][$year][$function])){
                    $association['committee'][$year][$function] = array();
                    // exit(var_dump("fonction"));
                }
                // exit(var_dump("ici"));
                $key = count($association['committee'][$year][$function]);
                    if(isset($inputData['committee']['name'])){
                        $association['committee'][$year][$function][$key]['name'] = $inputData['committee']['name'];
                    }
                    if(isset($inputData['committee']['firstname'])){
                        $association['committee'][$year][$function][$key]['firstname'] = $inputData['committee']['firstname'];
                    }
                    if(isset($inputData['committee']['nickname'])){
                        $association['committee'][$year][$function][$key]['nickname'] = $inputData['committee']['nickname'];
                    }
                    $data['committee'] = $association['committee'];
                    $redirect = "committee";

                    // exit(var_dump($association));
            }else{
            $data['committee'] = array_replace_recursive($association['committee'], $inputData['committee']);
            $redirect = "committee";
            }
        }else{
            $year = $inputData['suppr']['year'];
            $function = $inputData['suppr']['function'];
            $keysuppr = $inputData['suppr']['key'];
            unset($association['committee'][$year][$function][$keysuppr]);
            $association['committee'][$year][$function] =  array_values($association['committee'][$year][$function]);

            if(count($association['committee'][$year][$function]) == 0){
                unset($association['committee'][$year][$function]);
                if(count($association['committee'][$year]) == 0){
                    unset($association['committee'][$year]);
                }
            }


            $data['committee'] = $association['committee'];
            $redirect = "committee";
        }
    }


    // exit(var_dump("stop"));

    // exit(var_dump(json_encode($data)));

        $patchassociation = $this->findApi->patchAssociation(json_encode($data), $id);
        
        return $this->redirectToRoute('association_details' , ['id' => $id, 'redirect' => $redirect]);
    }



    /**
     * @Route("/association/delete/{id}", name="association_delete")
     * @Template()
     */
    public function villeDelete(Request $request, FindApiService $findApi)
    {
        $id = $request->get('id');
        $association = $this->findApi->getAssociation($id);

        $dir = $association['folderid'];
        $posdoss = strrpos($dir, '/');
        $dirdoss = substr($dir, 0, $posdoss);
        // if (isset($association['logo'])){
        // unlink($association['logo']);
        // rmdir($dirdoss);
        // }
        
        function deleteDirectory($dir) {
            if (!file_exists($dir)) {
                return true;
            }
        
            if (!is_dir($dir)) {
                return unlink($dir);
            }
        
            foreach (scandir($dir) as $item) {
                if ($item == '.' || $item == '..') {
                    continue;
                }
        
                if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                    return false;
                }
        
            }
        
            return rmdir($dir);
        }
        
        deleteDirectory($dir);
        
        

        $association = $this->findApi->deleteAssociation($id);
        return $this->redirectToRoute('association_list');
    }


}

