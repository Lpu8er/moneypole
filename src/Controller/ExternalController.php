<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of ExternalController
 *
 * @author captivea-qch
 */
class ExternalController extends AbstractController {
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function index() {
        $this->addMessage('Hello World', static::MSGLVL_ERROR, false);
        return [];
    }
    
    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function login() {
        return [];
    }
    
    /**
     * @Route("/subscribe", name="subscribe")
     * @Template()
     */
    public function subscribe() {
        return [];
    }
    
    /**
     * @Route("/logout", name="logout")
     */
    public function logout() {
        $this->addMessage('You have been logged out.', static::MSGLVL_SUCCESS, false);
        return $this->redirectToRoute('login');
    }
}
