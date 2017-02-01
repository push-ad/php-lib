<?php

namespace PushAd\Model;


class Api {
    
    /**
     * @var Config 
     */
    protected $config;

    public function __construct(Config $config) {
        $this->config = $config;
    }
    
    /**
     * Method for communication with API
     * @param \PushAd\Model\Request\Request $request
     * @return \PushAd\Model\Response\Response
     */
    public function query(Request\Request $request){
        $curl = new \PushAd\Http\Curl($this->config->getApiFullUrl(), $this->getPostAdditionalParams($request));
        
        $responseContent = $curl->getResponse();
        
        $responseData = json_decode($responseContent);
        
        if(!is_array($responseData)){
            throw new \PushAd\Exception\ApiException("Error decoding response from API");
        }
        
        $responseFactory = Response\ResponseFactory::getInstance();
        $response = $responseFactory->getResponse($responseData);
        return $response;
    }
    
    
    /**
     * Returns additional parameters to be set in cURL
     * @param \PushAd\Model\Request\Request $request
     * @return array
     */
    protected function getPostAdditionalParams(Request\Request $request){
        return [
            'CURLOPT_HTTPHEADER' => [
                'Authorization' => $this->config->getApiKey(),
                'Content-Type' => 'application/json'
            ]
        ];
    }

    
}
