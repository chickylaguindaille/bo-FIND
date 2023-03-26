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




        $json = json_encode($data);
        // $client = HttpClient::create();
        // $response = $client->request('POST', 'http://localhost:88/api-FIND/public/index.php/api/villes', [
        //     'headers' => [
        //         'Content-Type' => 'application/json',
        //     ],
        //     'body' => $json,
        // ]);
    
        // $statusCode = $response->getStatusCode();
        // $content = $response->getContent();


        $createtown = $this->findApi->createTown($json);

        // exit(var_dump($content));
        
        return $this->redirectToRoute('ville_list');
    }



    /**
     * @Route("/ville/delete/{id}", name="ville_delete")
     * @Template()
     */
    public function villeDelete(Request $request, FindApiService $findApi)
    {
        $id = $request->get('id');

        $town = $this->findApi->deleteTown($id);
        return $this->redirectToRoute('ville_list');
    }


}

