<?php

namespace PushAd\Model\Request;

/**
 * Description of CreateNotification
 *
 * @author emilswiderek
 */
class CreateNotification extends Request{
    
    /**
     * 'pl' => 'contents',
     * 'en' => 'contents',
     * @var array
     */
    protected $contents = [];
    
    /**
     * 'en' => 'title',
     * 'pl' => 'tytol'
     * @var array
     */
    protected $headings = [];
    
    /**
     * Url to icon for chrome browsers
     * @var \string
     */
    protected $chromeWebIcon;
    
    /**
     * Url to icon for firefox browsers
     * @var \string
     */
    protected $firefoxWebIcon;
    
    /**
     * Url of the page to be loaded after click on notification
     * @var \string
     */
    protected $url;
    
    /**
     * List of user IDs that will receive notification
     * @var array
     */
    protected $includePlayerIds;
    
    protected function prepareRequestContent(array $data) {
        $data['contents'] = $this->getContents();
        $data['headings'] = $this->getHeadings();
        $data['chrome_web_icon'] = $this->getChromeWebIcon();
        $data['firefox_web_icon'] = $this->getFirefoxWebIcon();
        $data['include_player_ids'] = $this->getIncludePlayerIds();
        $data['url'] = $this->getUrl();
        
        return $data;
    }

    public function getApiAction() {
        return 'create';
    }

    public function getRequestNamespace() {
        return 'notification';
    }

    public function getResponseClassName() {
        return 'CreateNotificationResponse';
    }

    public function isValid() {
        return true;
    }

    
    public function getContents() {
        return $this->contents;
    }

    public function setContents(array $contents) {
        $this->contents = $contents;
        return $this;
    }

    public function getHeadings() {
        return $this->headings;
    }

    public function getChromeWebIcon() {
        return $this->chromeWebIcon;
    }

    public function getFirefoxWebIcon() {
        return $this->firefoxWebIcon;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setHeadings(array $headings) {
        $this->headings = $headings;
        return $this;
    }

    public function setChromeWebIcon($chromeWebIcon) {
        $this->chromeWebIcon = $chromeWebIcon;
        return $this;
    }

    public function setFirefoxWebIcon($firefoxWebIcon) {
        $this->firefoxWebIcon = $firefoxWebIcon;
        return $this;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }
    
    public function addHeadings($lang, $content){
        $this->headings[$lang] = $content;
        return $this;
    }
    
    public function addContent($lang, $content){
        $this->contents[$lang] = $content;
        return $this;
    }
    
    public function getIncludePlayerIds() {
        return $this->includePlayerIds;
    }

    public function setIncludePlayerIds($includePlayerIds) {
        $this->includePlayerIds = $includePlayerIds;
        return $this;
    }



}
