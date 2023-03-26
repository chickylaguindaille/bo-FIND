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

        $town = $this->findApi->getTown();
        exit(var_dump($town));

        $association = $findApi->getAssociation();
        exit(var_dump($association));

        return $this->render('home.html.twig');
    }


}