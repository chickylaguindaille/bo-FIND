<?php


namespace App\Service;
use Psr\Log\LoggerInterface;
use GuzzleHttp\Client as Client;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

// Doc pour Guzzle
// http://docs.guzzlephp.org/en/stable/request-options.html#allow-redirects

class FindService
{
    protected $logger;
    protected $baseUrl;
    protected $client = null;
    protected $timeout;
    public function __construct(LoggerInterface $logger, string $find_url = "")
    {
        $this->logger = $logger;
        $this->baseUrl = $find_url;
    }

    protected function getClient()
    {
        if ($this->client == null) {
            {
                $this->client = new Client([
                    // Base URI is used with relative requests
                    'base_uri' => $this->baseUrl,
                ]);
            }
        }

        return $this->client;
    }

    protected function request($userToken, $method, $url, $inputData = null, $type = 'json')
    {
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

        
        if ($type == 'json')
            $params['headers']['Accept'] = 'application/json';

        if ($inputData != null)
            $params[$type] = $inputData;

        $data = array();

        try {

            $response = $this->getClient()->request($method, $url, $params);

            $content = $response->getBody()->getContents();

            $data = json_decode($content, true);

            if (is_string($data) && ($data == "[]"))
                $data = array();

        } catch (\ErrorException $ee) {
            $data = array('code' => $ee->getCode(), "message" => $ee->getMessage());
        } catch (\Exception $e) {
            $data = array('code' => $e->getCode(), "message" => $e->getMessage());
        }

        return $data;
    }

}