<?php


namespace PushAd\Model\Request;

/**
 * Request for creating project in push-ad system
 */
class CreateSubProjectRequest extends Request{
    
    protected $parentId;
    
    protected $subProjectName;
    
    protected $subProjectUrl;
    
    protected $subProjectProjectUrl;
    
    protected $subProjectImageUrl;
    
    protected $welcomeTitle;
    
    protected $welcomeBody;
    
    protected $welcomeImageUrl;
            
    
    public function getParentId() {
        return $this->parentId;
    }

    public function getSubProjectName() {
        return $this->subProjectName;
    }

    public function getSubProjectUrl() {
        return $this->subProjectUrl;
    }

    public function getSubProjectProjectUrl() {
        return $this->subProjectProjectUrl;
    }

    public function getSubProjectImageUrl() {
        return $this->subProjectImageUrl;
    }

    public function getWelcomeTitle() {
        return $this->welcomeTitle;
    }

    public function getWelcomeBody() {
        return $this->welcomeBody;
    }

    public function getWelcomeImageUrl() {
        return $this->welcomeImageUrl;
    }

    public function setParentId($parentId) {
        $this->parentId = $parentId;
        return $this;
    }

    public function setSubProjectName($subProjectName) {
        $this->subProjectName = $subProjectName;
        return $this;
    }

    public function setSubProjectUrl($subProjectUrl) {
        $this->subProjectUrl = $subProjectUrl;
        return $this;
    }

    public function setSubProjectProjectUrl($subProjectProjectUrl) {
        $this->subProjectProjectUrl = $subProjectProjectUrl;
        return $this;
    }

    public function setSubProjectImageUrl($subProjectImageUrl) {
        $this->subProjectImageUrl = $subProjectImageUrl;
        return $this;
    }

    public function setWelcomeTitle($welcomeTitle) {
        $this->welcomeTitle = $welcomeTitle;
        return $this;
    }

    public function setWelcomeBody($welcomeBody) {
        $this->welcomeBody = $welcomeBody;
        return $this;
    }

    public function setWelcomeImageUrl($welcomeImageUrl) {
        $this->welcomeImageUrl = $welcomeImageUrl;
        return $this;
    }

            
    public function isValid() {
        
        // @todo validate
        return true;
    }

    protected function prepareRequestContent(array $data) {
        $data['subproject_name'] = $this->getSubProjectName();
        $data['subproject_url'] = $this->getSubProjectUrl();
        $data['subproject_project_url'] = $this->getSubProjectProjectUrl();
        $data['subproject_image_url'] = $this->getSubProjectImageUrl();
        $data['welcome_title'] = $this->getWelcomeTitle();
        $data['welcome_body'] = $this->getWelcomeBody();
        $data['parent_id'] = $this->getParentId();
        $data['welcome_image_url'] = $this->getWelcomeImageUrl();
        return $data;
    }

    public function getResponseClassName() {
        return 'CreateSubProjectResponse';
    }

    public function getApiAction() {
        return 'create';
    }

    public function getRequestNamespace() {
        return 'project';
    }

}
