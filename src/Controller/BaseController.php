<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class BaseController extends AbstractController
{
    protected $errorMsgs = array();
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function responseFormatterPrivate($response, $methodName)
    {
        $data = null;

        if ($response['code'] != 200){
            $this->errorMsgs[] = $methodName . "--> " . $response['message'];
            $this->logger->error($methodName . "--> " . $response['message']);
        }
        else
            $data = $response['data'];


        return $data;
    }

    public function responseFormatterPublic($response)
    {
        $data = null;

        if ($response != null && (array_key_exists('code', $response))) {
            $this->errorMsgs[] = $response['message'];
            foreach ($this->errorMsgs as $errorMsg) {
                $this->logger->error($errorMsg);
            }
        } else
            $data = $response;

        return $data;
    }

    public function formatSearchJson($field, $operator, $value, $glue = null): array
    {
        return [
            "field" => $field,
            "operator" => $operator,
            "glue" => $glue,
            "value" => $value
        ];

    }

    protected function renderView(string $view, array $parameters = array()): string
    {
        if ($this->errorMsgs != null)
            $parameters['errorMsgs'] = $this->errorMsgs;

        return parent::renderView($view, $parameters);
    }

    protected function render(string $view, array $parameters = array(), Response $response = null): Response
    {
        if ($this->errorMsgs != null)
            $parameters['errorMsgs'] = $this->errorMsgs;

        return parent::render($view, $parameters, $response);
    }

    public function slug($string)
    {
        return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'))), ' '));
    }

    public function stripAccents($string)
    {
        return strtr($string, 'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ', 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }

    protected function getJsonResponse($data)//,$cors=true)
	{
		if ($data===null)
			$response = new JsonResponse(array('code'=>500,"message"=>"data is null"));
		else if (is_array($data) && count($data)==0)
			$response = new JsonResponse(array("code"=>200,"data"=>$data));
		else if (is_array($data) && array_key_exists('code', $data))
        	$response = new JsonResponse($data);
      	else
        	$response = new JsonResponse(array("code"=>200,"data"=>$data));

        //if ($cors==true)
        $this->logger->debug("BaseController::getJsonResponse --> STUDIZZ_CORS_ENABLED = ".json_encode(getEnv('STUDIZZ_CORS_ENABLED')));
        if (getEnv('STUDIZZ_CORS_ENABLED')=="true" || getEnv('STUDIZZ_CORS_ENABLED')==true)
        {
        	$this->logger->debug("BaseController::getJsonResponse --> Add Access-Controle-Allow-Origin");
		    $response->headers->set('Content-Type','application/json');
		    $response->headers->set('Access-Control-Allow-Origin','*');
			//$response->headers->set('Access-Control-Allow-Methods','POST, GET, OPTIONS, DELETE, PUT');
		    //$response->headers->set('Access-Control-Allow-Headers',"append,delete,entries,foreach,get,has,keys,set,values,Authorization,x-api-key,Content-Type");
	    }
	      
	    return $response;
	}
}
