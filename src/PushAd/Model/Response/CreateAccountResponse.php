<?php

namespace PushAd\Model\Response;

/**
 * Response received from API after account creation
 */
class CreateAccountResponse extends Response{
    
    protected $userId;
    
    protected $companyId;
    
    public function parseBody() {
        $body = $this->getBody();
        if(array_key_exists('user', $body)){
            $this->setUserId($body['user']);
        }
        
        if(array_key_exists('company_id', $body)){
            $this->setCompanyId($body['company_id']);
        }
    }
    
    public function getUserId() {
        return $this->userId;
    }

    public function getCompanyId() {
        return $this->companyId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    public function setCompanyId($companyId) {
        $this->companyId = $companyId;
        return $this;
    }

}
