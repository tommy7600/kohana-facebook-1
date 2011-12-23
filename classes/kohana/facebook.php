<?php defined('SYSPATH') or die('No direct script access.');
    
class Kohana_Facebook {
    private static $_instance;
    private $_config;
    
    private $_userID;
    private $_fb;
    private $_me;
    
    public function __construct() {
        if (($path = Kohana::find_file('vendor', 'facebook/facebook'))) {
            ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.dirname(dirname($path)));

            require_once 'facebook/facebook.php';
            
            $this->_config = Kohana::$config->load('facebook');
            
            $this->_fb = new Facebook(array(
                'appId'   => $this->_config->appID,
                'secret'  => $this->_config->secret,
                'cookie'  => true,
            ));
            
            $this->getUser();
            if ($this->getUserID()) {
                try {
                    $this->_me = $this->_fb->api('/me');
                } catch (FacebookApiException $e) {
//                    error_log($e);
                    $this->_userID = NULL;
                }
            }
        }
    }
    
    public static function instance() {
        if (!isset(Kohana_Facebook::$_instance))
            Kohana_Facebook::$_instance = new Kohana_Facebook();

        return Kohana_Facebook::$_instance;
    }

    private function getUser() { $this->_userID = $this->_fb->getUser(); }
    
    public function authorizeURL() {
        if ($this->_userID)
            return FALSE;
        
        $scope = (count($this->_config->scopeArray) > 0) ? implode(',', $this->_config->scopeArray) : array();
        
        return $this->_fb->getLoginUrl(array('scope' => $scope));
    }            
    
    public function getAccessToken() {
        if (!$this->_userID)
            return FALSE;
        
        $accessToken = $this->_fb->getAccessToken();
        return $accessToken;
    }
    
    public function getMe() {
        return $this->_me;
    }
    
    public function getAppID() {
        return $this->_config->appID;
    }
    
    public function getUserID() {
        return $this->_userID;
    }
    
    public function loggedIn() {
        return ($this->_userID) ? TRUE : FALSE;
    }
    
    public function api($cmd) {
        if (!$this->_userID)
            return FALSE;
        
        return $this->_fb->api($cmd);
    }
    
    
    public function loadAsyncJSSDK() {
        return View::factory('asyncJSSDK');
    }
    
    public function loadMetaTags() {
        $vars = array();
        
        $vars['appID']      = $this->_config->appID;
        $vars['adminUID']   = $this->_config->adminUID;
        
        return View::factory('metaTags', $vars);
    }
}

