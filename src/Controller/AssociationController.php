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
     * @Route("/association/add", name="association_add")
     * @Template()
     */
    public function associationAdd(Request $request, FindApiService $findApi)
    {
        $inputData = $request->request->all();

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



        $inputData['committee'] = array();

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

