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

use App\Service\MailService;
use App\Service\FindApiService;

use JMS\Serializer\SerializerBuilder;

class UserController extends AbstractController
{

    private $findApi;


    public function __construct(LoggerInterface $logger, FindApiService $findApi, MailService $mailService)
    {
        // parent::__construct($logger);
        $this->findApi = $findApi;
        $this->mailService = $mailService;
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
     * @Route("/user/list", name="user_list")
     * @Template()
     */
    public function userList(FindApiService $findApi)
    {
        // $data['required'] = $_ENV['REQUIRED_INPUT'];
        $data = array();

        $data['page'] = 'user';
        // $data['users'] = array();
        $users = $this->findApi->getUsers();
        $data['users'] = $users['data'];

        return $this->render('Users/userlist.html.twig', $data);
    }

    /**
     * @Route("/ville/list/change", name="ville_list_change")
     * @Template()
     */
    public function villeListChange(FindApiService $findApi)
    {
        $data['page'] = 'ville';



        if(isset($_GET['region'])){
            $texte = $_GET['texte'];
            $countrylist = $_GET['countrylist'];
            $region = $_GET['region'];

            if($countrylist == "frenchtowns"){
                $town = $this->findApi->getTowns('France', $region);
                $towns = $town['data'];
            }else if($countrylist == "belgiumtowns"){
                $town = $this->findApi->getTowns('Belgique', $region);
                $towns = $town['data'];
            }

            // $tri = $_GET['tri'];
    
            $numbervilles = count($towns) - 1;
            $filterarray = array();

            for ($i = 0; $i <= $numbervilles; $i++) {
                // if($tri == 'debut')
                //     if (str_starts_with($ville[$i]['nom'], ucfirst($texte))) {
                //         array_push($filterarray, $ville[$i]);
                //     }
                // if($tri == 'contenu')
                
                    if (str_contains(strtolower($towns[$i]['name']), strtolower($texte))) {
                        array_push($filterarray, $towns[$i]);
                    }
            }

            $data['townsfiltered'] = $filterarray;
            if(empty($data['townsfiltered'])){
                $data['emptyarray'] = true;
            }
            if($countrylist == "frenchtowns"){
                $data['countrychosenid'] = "result-search-france";
                $data['countrychosen'] = "frenchtowns";           
            }else if($countrylist == "belgiumtowns"){
                $data['countrychosenid'] = "result-search-belgium";
                $data['countrychosen'] = "belgiumtowns";
            }
        }

        return $this->render('Villes/search.villelist.html.twig', $data);
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
        $file = $request->files->get('blason');
        $id = uniqid();

        $filenameext = $_FILES['blason']['name'];
        $filesrcsave = 'towns/' . $id;

        $save = $filesrcsave .'/'. $filenameext; 
        $data['blason'] = $save;
        $save = $this->saveFile($file, $filesrcsave, $filenameext);

        $createtown = $this->findApi->createTown(json_encode($data));
        
        return $this->redirectToRoute('ville_list');
    }

    /**
     * @Route("/user/patch/{id}", name="user_patch")
     * @Template()
     */
    public function villePatch(Request $request, FindApiService $findApi)
    {
        $id = $request->get('id');
        $email = $request->get('email');
        $inputData = $request->request->all();

        $user = $this->findApi->getUser($id);
        if($inputData['isActive'] == "false"){
            $inputData['isActive'] = false;
        }else{
            $inputData['isActive'] = true;
        }

        // $file = $request->files->get('blason');

        // if ($file !== null){

        // $folder = dirname($town['blason']);
        // if (file_exists($town['blason'])){
        //     unlink($town['blason']);
        // }
        // $filenameext = $_FILES['blason']['name'];
        // $filesrcsave = dirname($town['blason']);
        // $save = $filesrcsave .'/'. $filenameext; 
        // $data['blason'] = $save;
        // $save = $this->saveFile($file, $filesrcsave, $filenameext);
        // }
        // exit(var_dump($inputData['isActive']));
        // exit(var_dump($user['isActive']));

        $createuser = $this->findApi->patchUser(json_encode($inputData), $id);

        if($inputData['isActive'] !== $user['isActive']){

            if($inputData['isActive'] == true){
                $subject = "Activation de votre compte FIND";
                $recipient = $email;
                // $content = "Votre compte a été activé";
                $name = $inputData['firstname'];
                $action = "activé";
            }else if($inputData['isActive'] == false){
                $subject = "Désactivation de votre compte FIND";
                $recipient = $email;
                // $content = "Votre compte a été désactivé";
                $name = $inputData['firstname'];
                $action = "désactivé";
            }
            
         $sendmail = $this->mailService->sendEmail($subject, $recipient, $name, $action);

        }

        // exit(var_dump("pas de changement"));


        return $this->redirectToRoute('user_list');
    }



    /**
     * @Route("/user/delete/{id}", name="user_delete")
     * @Template()
     */
    public function userDelete(Request $request, FindApiService $findApi)
    {
        $id = $request->get('id');
        $user = $this->findApi->getUser($id);
        // $dir = $town['blason'];
        // $posdoss = strrpos($dir, '/');
        // $dirdoss = substr($dir, 0, $posdoss);

        // unlink($town['blason']);
        // rmdir($dirdoss);

        $user = $this->findApi->deleteUser($id);
        return $this->redirectToRoute('user_list');
    }


}

