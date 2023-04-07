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





    function saveFile($file, $filesrcsave) {
        // Créer le dossier si celui-ci n'existe pas
        if (!file_exists($filesrcsave)) {
            mkdir($filesrcsave, 0777, true);
        }
        $filenameext = $file->getClientOriginalName();
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
        // exit(var_dump("test"));

        $inputData = $request->request->all();
// exit(var_dump($inputData));
        $data['nickname'] = $request->request->get('nickname');
        $inputData['creation'] = strtotime($inputData['creation']);
        $inputData['logo'] = $_FILES['logo']['name'];


    // PARTICULARITY
        if (!isset($inputData['particularity'])){
        $inputData['particularity'] = array();
    }

    // ANECDOTE
        if (!isset($inputData['anecdote'])){
        $inputData['anecdote'] = array();
    }else{
        foreach ($inputData['anecdote'] as &$anecdote) {
            $anecdote["year"] = strtotime($anecdote["year"]);
        }
    }

    // DOCUMENT
        if (!isset($inputData['document'])){
        $inputData['document'] = array();
    }else{
        foreach ($inputData['document'] as &$document) {
            $document["year"] = strtotime($document["year"]);
        }
    }

    // DECORUM
    if (!isset($inputData['decorum'])){
        $inputData['decorum'] = array();
    }else{
        foreach ($inputData['decorum'] as &$decorum) {
            $decorum["year"] = strtotime($decorum["year"]);
        }
    }

    // GOODIES
    if (!isset($inputData['goodies'])){
        $inputData['goodies'] = array();
    }else{
        foreach ($inputData['goodies'] as &$goodies) {
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
            unset($inputData['creation']);
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
;
        // exit(var_dump(json_encode($data)));

        // $data['name'] = $request->request->get('name');
        // $data['region'] = $request->request->get('region');
        // $data['country'] = $request->request->get('country');
        // $blason = $request->files->get('blason');

        // $filenameext = $_FILES['blason']['name'];
        // $filenameonly = pathinfo($_FILES['blason']['name'], PATHINFO_FILENAME);
        // $filesrcsave = 'towns/' . $filenameonly;

        // $save = 'towns/' . $filenameonly .'/'. $filenameext; 
        // $data['blason'] = $save;
        // $save = $this->saveFile($blason, $filesrcsave, $filenameonly);



        $createassociation = $this->findApi->createAssociation(json_encode($data));
        
        return $this->redirectToRoute('association_list');

    }



    /**
     * @Route("/association/list", name="association_list")
     * @Template()
     */
    public function associationList(FindApiService $findApi)
    {
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

        $data['numberparticularity'] = count($association['particularity']);
        $data['numberanecdote'] = count($association['anecdote']);
        $data['numberdocument'] = count($association['document']);
        $data['numberdecorum'] = count($association['decorum']);
        $data['numbergoodies'] = count($association['goodies']);

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


    // INFORMATIONS
    if (isset($inputData['creation'])){
        if($inputData['creation'] == false){
            $inputData['creation'] == null;
        }else{
        $inputData['creation'] = strtotime($inputData['creation']);
        }
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
            $inputData['anecdote'][$keynumber[0]]['year'] = strtotime($inputData['anecdote'][$keynumber[0]]['year']);
            $data['anecdote'] = array_replace_recursive($association['anecdote'], $inputData['anecdote']);
            $redirect = "anecdotes";
        }else{
            unset($association['anecdote'][$keynumber[0]]);
            $data['anecdote'] = array_values($association['anecdote']);
            $redirect = "anecdotes";
        }
    }

    // DOCUMENTS
    if (isset($inputData['document'])){
        $keynumber = array_keys($inputData['document']);
        if ($inputData['action'] != "deleteassociation" ){
            $inputData['document'][$keynumber[0]]['year'] = strtotime($inputData['document'][$keynumber[0]]['year']);
            $data['document'] = array_replace_recursive($association['document'], $inputData['document']);
            $redirect = "documents";
        }else{
            unset($association['document'][$keynumber[0]]);
            $data['document'] = array_values($association['document']);
            $redirect = "documents";
        }
    }

    // DECORUM
    if (isset($inputData['decorum'])){
        $keynumber = array_keys($inputData['decorum']);
        if ($inputData['action'] != "deleteassociation" ){
            $inputData['decorum'][$keynumber[0]]['year'] = strtotime($inputData['decorum'][$keynumber[0]]['year']);
            $data['decorum'] = array_replace_recursive($association['decorum'], $inputData['decorum']);
            $redirect = "decorums";
        }else{
            unset($association['decorum'][$keynumber[0]]);
            $data['decorum'] = array_values($association['decorum']);
            $redirect = "decorums";
        }
    }

    // GOODIES
    if (isset($inputData['goodies'])){
        $keynumber = array_keys($inputData['goodies']);
        if ($inputData['action'] != "deleteassociation" ){
            $inputData['goodies'][$keynumber[0]]['year'] = strtotime($inputData['goodies'][$keynumber[0]]['year']);
            $data['goodies'] = array_replace_recursive($association['goodies'], $inputData['goodies']);
            $redirect = "goodies";
        }else{
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

    // exit(var_dump($data));

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
        // $town = $this->findApi->getTown($id);
        // $dir = $town['blason'];
        // $posdoss = strrpos($dir, '/');
        // $dirdoss = substr($dir, 0, $posdoss);

        // unlink($town['blason']);
        // rmdir($dirdoss);

        $association = $this->findApi->deleteAssociation($id);
        return $this->redirectToRoute('association_list');
    }


}

