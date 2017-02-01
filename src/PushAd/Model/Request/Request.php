<?php

namespace PushAd\Model\Request;


abstract class Request {

    abstract public function getApiAction();
    
    abstract public function getRequestNamespace();
    
    abstract public function isValid();
    
    abstract protected function prepareRequestContent(array $data);
    
    protected function prepareRequestMeta(){
        return [
            'namespace' => $this->getRequestNamespace(),
            'method' => $this->getApiAction(),
        ];
    }
    
    /**
     * Request encoded into JSON format ready to be sent via API
     * @return \string JSON
     */
    public function getRequestJson(){
        $requestArray = $this->prepareRequestContent($this->prepareRequestMeta());
        
        return json_encode($requestArray);
    }
    
}