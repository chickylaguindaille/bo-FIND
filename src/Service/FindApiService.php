<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Psr\Log\LoggerInterface;



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
	public function getTowns()
	{
		return $this->request(null, 'GET', 'api/villes');
	}

	public function getTown($id)
	{
		return $this->request(null, 'GET', 'api/villes/' .$id);
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
