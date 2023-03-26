<?php

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Component\HttpClient\HttpClient;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;

class FindApiService extends FindService
{

	public function __construct(
		LoggerInterface $logger,
		string $find_url = "",
		)
	{
		parent::__construct($logger, $find_url);
		
	}


	//------------------------------------------------------------------------------------------------------------------
	// Town
	//------------------------------------------------------------------------------------------------------------------
	public function getTowns($country)
	{
		return $this->request(null, 'GET', 'api/villes?country=' . $country);
	}

	public function getTown($id)
	{
		return $this->request(null, 'GET', 'api/villes/' .$id);
	}

	public function createTown($json)
	{
		// $json = json_encode($data);
		$client = HttpClient::create();

		$response = $client->request('POST', 'http://localhost:88/api-FIND/public/index.php/api/villes', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => $json,
        ]);

		// $response = $this->request('POST', 'api/villes', [
        //     'headers' => [
        //         'Content-Type' => 'application/json',
        //     ],
        //     'body' => $json,
        // ]);

		// exit(var_dump($response));
		return $response;

		// return $this->request(null, 'POST', 'api/villes',$headers, $body);
	}

	public function deleteTown($id)
	{
		return $this->request(null, 'DELETE', 'api/villes/' .$id);
	}


	//------------------------------------------------------------------------------------------------------------------
	// Association
	//------------------------------------------------------------------------------------------------------------------
	public function getAssociations()
	{
		return $this->request(null, 'GET', 'api/associations');
	}

	public function getAssociation($id)
	{
		return $this->request(null, 'GET', 'api/associations/' .$id);
	}

}
