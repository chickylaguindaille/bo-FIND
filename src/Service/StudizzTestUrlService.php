<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use GuzzleHttp\Client as Client;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class StudizzTestUrlService 
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    protected function testUrl($url)
    {
        $data = parse_url($url);

        $baseUrl = $data['scheme']."://".$data['host'];
        $path = $data['path'];
        
        $client = new Client([
            'base_uri' => $baseUrl,
            'timeout'  => 10
        ]);

        $onRedirect = function (RequestInterface $request, ResponseInterface $response, UriInterface $uri) {
            $this->logger->debug('Redirecting! ' . $request->getUri() . ' to ' . $uri . "\n");
        };

        $params = array();
        $params['strict'] = true;
        $params['max'] = 3;
        $params['allow_redirects'] = [
            'max' => 10,        // allow at most 10 redirects.
            'strict' => true,      // use "strict" RFC compliant redirects.
            'referer' => true,      // add a Referer header
            //'protocols'       => ['https'], // only allow https URLs
            'on_redirect' => $onRedirect,
            'track_redirects' => true
        ];

        $data = array();

        try {
            $this->logger->debug("StudizzTestImgUrlService::testUrl url = [" . $baseUrl.$path."]");

            $response = $client->request("GET", $path);

            $content = $response->getBody()->getContents();

            //$this->logger->debug("StudizzTestImgUrlService::getUrl --> content : " . $content);

            $data = array('code'=>200,"data"=>$content);

        } catch (\ErrorException $ee) {
            $data = array('code' => $ee->getCode(), "message" => $ee->getMessage());
            $this->logger->debug("StudizzTestImgUrlService::testUrl " . $url . " --> catch ErrorException : " . json_encode($data));
        } catch (\Exception $e) {
            //exit(var_dump($e));
           /* if ($e->getResponse() == null)
                $data = array('code' => 500, "message" => "response from api is null");
            else
                $data = array('code' => $e->getResponse()->getStatusCode(), "message" => $e->getResponse()->getReasonPhrase());*/
            $data = array('code' => $e->getCode(), "message" => $e->getMessage());
            $this->logger->debug("StudizzTestImgUrlService::testUrl " . $url . "  --> catch Exception : " . json_encode($data));
        }

        return $data;
    }

    public function isUrlValid($url)
    {
        $data = $this->testUrl($url);

        return ($data['code']==200)??false;
    }
    
}