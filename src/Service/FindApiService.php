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
		string $find_url = "test",
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

	public function createTown($data)
	{;
		$findApiUrl = $_ENV['FIND_API_URL'];
		$client = HttpClient::create();
		$response = $client->request('POST', $findApiUrl . 'api/villes', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => $data,
        ]);

		return $response;
	}

	public function patchTown($data, $id)
	{;
		$findApiUrl = $_ENV['FIND_API_URL'];
		$client = HttpClient::create();
		$response = $client->request('PATCH', $findApiUrl . 'api/villes/' . $id , [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => $data,
        ]);

		return $response;
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

	public function createAssociation($data)
	{
		$findApiUrl = $_ENV['FIND_API_URL'];
		$client = HttpClient::create();
		$response = $client->request('POST', $findApiUrl . 'api/associations', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => $data,
        ]);

		return $response;
	}


	public function patchAssociation($data, $id)
	{;
		$findApiUrl = $_ENV['FIND_API_URL'];
		$client = HttpClient::create();
		$response = $client->request('PATCH', $findApiUrl . 'api/associations/' . $id , [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => $data,
        ]);

		return $response;
	}


	public function deleteAssociation($id)
	{
		return $this->request(null, 'DELETE', 'api/associations/' .$id);
	}

}
