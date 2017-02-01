<?php


namespace PushAd\Model\Request;

/**
 * Request for creating account in push-ad system
 */
class CreateAccountRequest extends Request{
    
    /**
     * @var \string
     */
    protected $email;
    
    /**
     * @var \string
     */
    protected $password;
    
    /**
     * @var \string 
     */
    protected $companyName;
    
    /**
     * If the site is supporting https
     * @var \boolean 
     */
    protected $https;
    
    /**
     * URL to website homepage
     * @var \string
     */
    protected $siteUrl;
    
    /**
     * URL to pop-up for notifications sign up
     * @var \string
     */
    protected $registrationUrl;
    
    /**
     * Company phone
     * @var \string
     */
    protected $phone;
    
    public function getApiAction() {
        return 'createaccount';
    }

    public function getRequestNamespace() {
        return 'account';
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getCompanyName() {
        return $this->companyName;
    }

    public function getHttps() {
        return $this->https;
    }

    public function getSiteUrl() {
        return $this->siteUrl;
    }

    public function getRegistrationUrl() {
        return $this->registrationUrl;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
        return $this;
    }

    public function setHttps($https) {
        $this->https = $https;
        return $this;
    }

    public function setSiteUrl($siteUrl) {
        $this->siteUrl = $siteUrl;
        return $this;
    }

    public function setRegistrationUrl($registrationUrl) {
        $this->registrationUrl = $registrationUrl;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function isValid() {
        
        // @todo validate
        return true;
    }

    protected function prepareRequestContent(array $data) {
        $data['phone'] = $this->getPhone();
        $data['password'] = $this->getPassword();
        $data['email'] = $this->getEmail();
        $data['company_name'] = $this->getCompanyName();
        $data['https'] = $this->getHttps();
        $data['site_url'] = $this->getSiteUrl();
        $data['registration_url'] = $this->getRegistrationUrl();
        
        return $data;
    }

}
