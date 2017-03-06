<?php


namespace PushAd\Model\Request;

/**
 * Request for creating project in push-ad system
 */
class CreateProjectRequest extends Request{
    
    protected $projectName;
    
    public function getProjectName() {
        return $this->projectName;
    }

    public function setProjectName($projectName) {
        $this->projectName = $projectName;
        return $this;
    }

        
    public function isValid() {
        if(empty($this->getProjectName())){
            return false;
        }
        
        return true;
    }

    protected function prepareRequestContent(array $data) {
        $data['project_name'] = $this->getProjectName();
        
        return $data;
    }

    public function getResponseClassName() {
        return 'CreateProjectResponse';
    }

    public function getApiAction() {
        return 'createParent';
    }

    public function getRequestNamespace() {
        return 'project';
    }

}
