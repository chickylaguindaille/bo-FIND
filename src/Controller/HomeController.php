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

use App\Service\FindApiService;

use JMS\Serializer\SerializerBuilder;

class HomeController extends AbstractController
{

    private $findApi;


    public function __construct(LoggerInterface $logger, FindApiService $findApi)
    {
        // parent::__construct($logger);
        $this->findApi = $findApi;

    }



    /**
     * @Route("/home", name="home")
     * @Template()
     */
    public function home(FindApiService $findApi)
    {
        // $town = $this->findApi->getTowns();
        // exit(var_dump($town));

        $town = $this->findApi->getTown('6418e55fa9b5b157c1b54ab0');
        // exit(var_dump($town));

        $association = $findApi->getAssociations();
        // exit(var_dump($association));

        $association = $findApi->getAssociation('6420590d0671180012100593');
        // exit(var_dump($association));

        return $this->render('home.html.twig');
    }


}