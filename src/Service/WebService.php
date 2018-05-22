<?php
namespace App\Service;

/**
 * Description of WebService
 *
 * @author captivea-qch
 */
class WebService {
    protected $messages = [];
    protected $styles = [];
    protected $scripts = [];
    protected $title = null;
    protected $d3 = false;
    
    public function addMessage(array $message) {
        $this->messages[] = $message;
        return $this;
    }
    
    public function addStyle(string $path) {
        $this->styles[] = $path;
        return $this;
    }
    
    public function addScript(string $path) {
        $this->scripts[] = $path;
        return $this;
    }
    
    public function setD3(bool $enabled) {
        $this->d3 = $enabled;
        return $this;
    }
    
    public function get_D3() {
        return $this->d3;
    }
    
    public function getTemplateVariables() {
        return [
            '_messages' => $this->messages,
            '_styles' => $this->styles,
            '_scripts' => $this->scripts,
            '_d3' => $this->d3,
        ];
    }
}
