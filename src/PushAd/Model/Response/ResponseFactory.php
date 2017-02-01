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
    
    public function getResponse(array $data){
        
        
    }
    
}
