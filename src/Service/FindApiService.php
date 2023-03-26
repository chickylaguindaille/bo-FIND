<?php

namespace App\Service;
// use Psr\Log\LoggerInterface;;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;
use App\Service\StudizzTestUrlService;

// use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class FindApiService extends StudizzService
{

	public function __construct(
		LoggerInterface $logger,
		string $studizz_url = "",
		StudizzTestUrlService $testUrlService
		)
	{
		parent::__construct($logger, $studizz_url);
		
	}


	//------------------------------------------------------------------------------------------------------------------
	// Town
	//------------------------------------------------------------------------------------------------------------------
	public function getTown()

	{

		return $this->request(null, 'GET', 'api/villes/');

		// $client = HttpClient::create();
		// $response = $client->request('GET', 'http://localhost:88/api-FIND/public/index.php/api/villes');
	
		// $statusCode = $response->getStatusCode();
		// $content = $response->getContent();
	
		// return $content;
	}

	//------------------------------------------------------------------------------------------------------------------
	// Association
	//------------------------------------------------------------------------------------------------------------------
	public function getAssociation()
	{
		$client = HttpClient::create();
		$response = $client->request('GET', 'http://localhost:88/api-FIND/public/index.php/api/associations');
	
		$statusCode = $response->getStatusCode();
		$content = $response->getContent();
	
		return $content;
	}

}
