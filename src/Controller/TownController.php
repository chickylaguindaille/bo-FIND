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

class TownController extends AbstractController
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
     * @Route("/ville/list", name="ville_list")
     * @Template()
     */
    public function villeList(FindApiService $findApi)
    {
        $town = $this->findApi->getTowns('France');
        $data['frenchtowns'] = $town['data'];

        $town = $this->findApi->getTowns('Belgique');
        $data['belgiumtowns'] = $town['data'];

        // $data=array();

        return $this->render('Villes/villelist.html.twig', $data);
    }

    /**
     * @Route("/ville/add", name="ville_add")
     * @Template()
     */
    public function villeAdd(Request $request, FindApiService $findApi)
    {
        $data['name'] = $request->request->get('name');
        $data['region'] = $request->request->get('region');
        $data['country'] = $request->request->get('country');
        $blason = $request->files->get('blason');

        $filenameext = $_FILES['blason']['name'];
        $filenameonly = pathinfo($_FILES['blason']['name'], PATHINFO_FILENAME);
        $filesrcsave = 'towns/' . $filenameonly;

        $save = 'towns/' . $filenameonly .'/'. $filenameext; 
        $data['blason'] = $save;
        $save = $this->saveFile($blason, $filesrcsave, $filenameonly);


        $createtown = $this->findApi->createTown(json_encode($data));
        
        return $this->redirectToRoute('ville_list');
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
     * @Route("/ville/delete/{id}", name="ville_delete")
     * @Template()
     */
    public function villeDelete(Request $request, FindApiService $findApi)
    {
        $id = $request->get('id');
        $town = $this->findApi->getTown($id);
        $dir = $town['blason'];
        $posdoss = strrpos($dir, '/');
        $dirdoss = substr($dir, 0, $posdoss);

        unlink($town['blason']);
        rmdir($dirdoss);

        $town = $this->findApi->deleteTown($id);
        return $this->redirectToRoute('ville_list');
    }


}

