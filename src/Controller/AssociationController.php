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

        if (!isset($inputData['particularity'])){
        $inputData['particularity'] = array();
    }
        if (!isset($inputData['anecdote'])){
        $inputData['anecdote'] = array();
    }
        if (!isset($inputData['document'])){
        $inputData['document'] = array();
    }else{
        foreach ($inputData['document'] as &$document) {
            $document["'year'"] = strtotime($document["'year'"]);
        }
    }
    if (!isset($inputData['decorum'])){
        $inputData['decorum'] = array();
    }else{
        foreach ($inputData['decorum'] as &$decorum) {
            $decorum["'year'"] = strtotime($decorum["'year'"]);
        }
    }
    if (!isset($inputData['goodies'])){
        $inputData['goodies'] = array();
    }else{
        foreach ($inputData['goodies'] as &$goodies) {
            $goodies["'year'"] = strtotime($goodies["'year'"]);
        }
    }
    if (!isset($inputData['sing'])){
        $inputData['sing'] = array();
    }else{
        $inputData['sing']['year'] = strtotime($inputData['sing']['year']);
    }

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
        // exit(var_dump($bddcommittee));
        $data = $inputData;

        // exit(var_dump($inputData));
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



        $createtown = $this->findApi->createAssociation(json_encode($data));
        
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
        $data['towns'] = array_column($town['data'], 'name');
        // exit(var_dump($data['towns']));

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
        $association = $this->findApi->getAssociation($id);

        // exit(var_dump($association['anecdote']));

        $data['association'] = $association;

        return $this->render('Associations/association.html.twig', $data);
    }



    /**
     * @Route("/ville/patch/{id}", name="ville_patch")
     * @Template()
     */
    public function villePatch(Request $request, FindApiService $findApi)
    {
        $id = $request->get('id');

        $town = $this->findApi->getTown($id);

        $data['name'] = $request->get('name');
        $data['region'] = $request->get('region');
        $data['country'] = $request->get('country');
        $blason = $request->files->get('blason');

        if ($blason !== null){


        if (file_exists($town['blason'])){
            unlink($town['blason']);
        }

            $filenameext = $_FILES['blason']['name'];
            $filenameonly = pathinfo($_FILES['blason']['name'], PATHINFO_FILENAME);
            $filesrcsave = 'towns/' . $data['name'];
    
            $save = 'towns/' . $filenameonly .'/'. $filenameext; 
            $data['blason'] = $save;
            $save = $this->saveFile($blason, $filesrcsave, $filenameonly);

        }
        // exit(var_dump($inputData));

        $createtown = $this->findApi->patchTown(json_encode($data), $id);
        
        return $this->redirectToRoute('ville_list');
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

