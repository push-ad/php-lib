<?php


namespace PushAd\Model\Response;


abstract class Response {
    
    protected $success;
    
    protected $info;
    
    protected $status;
    
    protected $body;
    
    public function getSuccess() {
        return $this->success;
    }

    public function getInfo() {
        return $this->info;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getBody() {
        return $this->body;
    }

    public function setSuccess($success) {
        $this->success = $success;
        return $this;
    }

    public function setInfo($info) {
        $this->info = $info;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setBody($body) {
        $this->body = $body;
        return $this;
    }


    
}