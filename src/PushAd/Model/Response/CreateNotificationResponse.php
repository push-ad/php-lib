<?php

namespace PushAd\Model\Response;

/**
 * Response after notification creation
 */
class CreateNotificationResponse extends Response{
    
    protected $notificationId;
    
    
    public function parseBody() {
        $body = $this->getBody();
        if(array_key_exists('notification_id', $body)){
            $this->setNotificationId($body['notification_id']);
        }
    }
    
    public function getNotificationId() {
        return $this->notificationId;
    }

    public function setNotificationId($notificationId) {
        $this->notificationId = $notificationId;
        return $this;
    }



}
