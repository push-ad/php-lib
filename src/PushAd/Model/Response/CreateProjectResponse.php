<?php

namespace PushAd\Model\Response;

/**
 * Response received from API after project creation
 */
class CreateProjectResponse extends Response{
    
    protected $pushadId;
    
    public function parseBody() {
        $body = $this->getBody();
        if(array_key_exists('company_id', $body)){
            $this->setPushadId($body['company_id']);
        }
        
    }
    public function getPushadId() {
        return $this->pushadId;
    }

    public function setPushadId($pushadId) {
        $this->pushadId = $pushadId;
        return $this;
    }


}
