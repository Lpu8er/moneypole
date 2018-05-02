<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AbstractController
 *
 * @author captivea-qch
 */
abstract class AbstractController extends Controller {
    const MSGLVL_ERROR = 'error';
    const MSGLVL_WARNING = 'warning';
    const MSGLVL_NOTICE = 'notice';
    const MSGLVL_SUCCESS = 'success';
    
    protected $messages = [];
    protected $styles = [];
    protected $scripts = [];
    protected $title = null;
    
    /**
     * 
     * @param string $message
     * @param string $level
     * @param bool $immediate
     * @return $this
     */
    protected function addMessage(string $message, string $level = null, bool $immediate = true): self {
        $this->messages[] = [
            'str' => $message,
            'lvl' => empty($level)? static::MSGLVL_ERROR:$level,
        ];
        if(!$immediate) {
            $this->addFlash($level, $message);
        }
        return $this;
    }
    
    /**
     * 
     * @param array $wrap
     * @return array
     */
    protected function wrap(array $wrap = []) {
        $wrap['_messages'] = $this->messages;
        return $wrap;
    }
}
