<?php


namespace PushAd\Model\Response;


class ResponseFactory {
    
    protected static $instance;
    
    // to make sure this is a singleton:
    private function __construct() {}
    private function __clone() {}
    
    /**
     * @return ResponseFactory
     */
    public static function getInstance(){
        if(!self::$instance instanceof ResponseFactory){
            self::$instance = new ResponseFactory();
        }
        
        return self::$instance;
    }
    
    public function getResponse($data, \PushAd\Model\Request\Request $request){
        $responseClass = '\PushAd\Model\Response\\'.$request->getResponseClassName();
        /* @var $response Response */
        $response = new $responseClass();
        $response->setStatus($data['status_code']);
        $response->setSuccess($data['success']);
        $response->setBody($data['body']);
        if(array_key_exists('info', $data)){
            $response->setInfo($data['info']);
        }
        $response->parseBody();
        
        return $response;
    }
    
}
