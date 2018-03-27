<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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
        return $this->wrap();
    }
    
    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils) {
        $error = $authenticationUtils->getLastAuthenticationError();
        if(!empty($error)) {
            $this->addMessage('Authentication error', static::MSGLVL_ERROR);
        }
        return $this->wrap();
    }
    
    /**
     * @Route("/subscribe", name="subscribe")
     * @Template()
     */
    public function subscribe() {
        return $this->wrap();
    }
    
    /**
     * @Route("/logout", name="logout")
     */
    public function logout() {
        $this->addMessage('You have been logged out.', static::MSGLVL_SUCCESS, false);
        return $this->redirectToRoute('login');
    }
}
