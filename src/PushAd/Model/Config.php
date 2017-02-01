<?php

namespace PushAd\Model;

/**
 * Config for API
 */
class Config {
    
    protected $apiKey;
    
    protected $notificationKey;
    
    protected $apiVersion;
    
    protected $apiUrl;
    
    /**
     * 
     * @param string $apiKey Authorization key
     * @param string $notificationKey Key for sending notifications
     * @param string $apiVersion used version of API
     * @param string $apiUrl Target API url
     */
    public function __construct(
            $apiKey, 
            $notificationKey, 
            $apiVersion, 
            $apiUrl
        ) {
        $this->apiKey = $apiKey;
        $this->notificationKey = $notificationKey;
        $this->apiVersion = $apiVersion;
        $this->apiUrl = $apiUrl;
    }
    
    public function getApiKey() {
        return $this->apiKey;
    }

    public function getNotificationKey() {
        return $this->notificationKey;
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
