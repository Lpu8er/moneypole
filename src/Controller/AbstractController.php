<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AbstractController
 *
 * @author lpu8er
 */
abstract class AbstractController extends Controller {
    const MSGLVL_ERROR = 'error';
    const MSGLVL_WARNING = 'warning';
    const MSGLVL_NOTICE = 'notice';
    const MSGLVL_SUCCESS = 'success';
    
    /**
     * 
     * @param string $message
     * @param string $level
     * @param bool $immediate
     * @return $this
     */
    protected function addMessage(string $message, string $level = null, bool $immediate = true): self {
        $this->get('web')->addMessage([
            'str' => $message,
            'lvl' => empty($level)? static::MSGLVL_ERROR:$level,
        ]);
        if(!$immediate) {
            $this->addFlash($level, $message);
        }
        return $this;
    }
    
    /**
     * 
     * @param string $message
     * @param bool $immediate
     * @return $this
     */
    protected function error(string $message, bool $immediate = true): self {
        return $this->addMessage($message, static::MSGLVL_ERROR, $immediate);
    }
    
    /**
     * 
     * @param string $message
     * @param bool $immediate
     * @return $this
     */
    protected function warn(string $message, bool $immediate = true): self {
        return $this->addMessage($message, static::MSGLVL_WARNING, $immediate);
    }
    
    /**
     * 
     * @param string $message
     * @param bool $immediate
     * @return $this
     */
    protected function notice(string $message, bool $immediate = true): self {
        return $this->addMessage($message, static::MSGLVL_NOTICE, $immediate);
    }
    
    /**
     * 
     * @param string $message
     * @param bool $immediate
     * @return $this
     */
    protected function success(string $message, bool $immediate = true): self {
        return $this->addMessage($message, static::MSGLVL_SUCCESS, $immediate);
    }
    
    /**
     * 
     * @return $this
     */
    protected function enableD3() {
        $this->get('web')->setD3(true);
        return $this;
    }
    
    /**
     * 
     * @return $this
     */
    protected function disableD3() {
        $this->get('web')->setD3(false);
        return $this;
    }
}
