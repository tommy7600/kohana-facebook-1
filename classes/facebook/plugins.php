<?php defined('SYSPATH') or die('No direct script access.');
    
class Facebook_Plugins {
    private $_appID, $_adminUID, $_defaultSettings, $_availableOptions;
    private static $_instance;
    
    public function __construct() {
        $this->_appID               = Kohana::$config->load('facebook.appID');
        $this->_adminUID            = Kohana::$config->load('facebook.adminUID');
        $this->_defaultSettings     = Kohana::$config->load('plugins/default');
        $this->_availableOptions    = Kohana::$config->load('plugins/options');
    }
    
    public static function instance() {
        if (!isset(Facebook_Plugins::$_instance))
            Facebook_Plugins::$_instance = new Facebook_Plugins();

        return Facebook_Plugins::$_instance;
    }
    
    public function like($uSettings = array()) {
        return '<fb:like '.$this->_options('like', $uSettings).'></fb:like>';
    }
    
    public function send($uSettings = array()) { 
        return '<fb:send '.$this->_options('send', $uSettings).'></fb:send>';
    }
    
    public function subscribe($uSettings = array()) { 
        return '<fb:subscribe '.$this->_options('subscribe', $uSettings).'></fb:subscribe>';
    }
    
    public function comments($uSettings = array()) { 
        return '<fb:comments '.$this->_options('comments', $uSettings).'></fb:comments>';
    }
    
    public function activity($uSettings = array()) { 
        return '<fb:activity '.$this->_options('activity', $uSettings).'></fb:activity>';
    }
    
    public function recommendations($uSettings = array()) { 
        return '<fb:recommendations '.$this->_options('recommendations', $uSettings).'></fb:recommendations>';
    }
    
    public function likeBox($uSettings = array()) { 
        return '<fb:like-box '.$this->_options('like-box', $uSettings).'></fb:like-box>';
    }

    public function login($uSettings = array()) { 
        return '<fb:login-button '.$this->_options('login', $uSettings).'></fb:login-button>';
    }
    
    public function registration($uSettings = array()) { 
        return '<fb:registration '.$this->_options('registration', $uSettings).'></fb:registration>';
    }
    
    public function facepile($uSettings = array()) { 
        return '<fb:facepile '.$this->_options('facepile', $uSettings).'></fb:facepile>';
    }
    
    public function liveStream($uSettings = array()) { 
        return '<fb:live-stream '.$this->_options('live-stream', $uSettings).'></fb:live-stream>';
    }

    public function defaultSettings($pluginName) {
        return (isset($this->_defaultSettings[$pluginName])) ? $this->_defaultSettings[$pluginName] : FALSE; 
    }
    
    private function _settings($pluginName, $options) {
        if (($default = $this->_defaultSettings[$pluginName])) {
            $validable = $this->_availableOptions[$pluginName];
            foreach ($options as $key => $value) {
                if (isset($validable[$key]))
                    if (!in_array($value, $validable[$key]))
                        continue;

                $default[$key] = (is_array($value)) ? $this->_arrayExtends($default[$key], $value) : $value;
            }
            return $default;
        } else {
            return $options;
        }
    }
    private function _options($pluginName, $uSettigns) {
        $settings = $this->_settings($pluginName, $uSettigns);
        
        $options = '';
        foreach ($settings as $settingName => $settingValue) {
            if ($settingValue === '') continue;
            $options .= ' '.$settingName.'="'.$settingValue.'"';
        }
        return $options; 
    }
    
}