<?php

namespace PushAd\Model;

/**
 * Config for API
 */
class Config {
    
    protected $apiKey;
        
    protected $apiVersion;
    
    protected $apiUrl;
    
    /**
     * 
     * @param string $apiKey Authorization key
     * @param string $apiVersion used version of API
     * @param string $apiUrl Target API url
     */
    public function __construct(
            $apiKey, 
            $apiVersion, 
            $apiUrl
        ) {
        $this->apiKey = $apiKey;
        $this->apiVersion = $apiVersion;
        $this->apiUrl = $apiUrl;
    }
    
    public function getApiKey() {
        return $this->apiKey;
    }


    public function getApiVersion() {
        return $this->apiVersion;
    }

    public function getApiUrl() {
        return $this->apiUrl;
    }
    
    public function getApiFullUrl(){
        return $this->apiUrl.'/v'.$this->getApiVersion().'/';
    }



}
