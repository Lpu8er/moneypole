<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Description of ExternalController
 *
 * @author lpu8er
 */
class ExternalController extends AbstractController {
    /**
     * 
     * @param mixed $returns the default return value
     * @return mixed
     */
    protected function redirectLoggedIn($returns = []) {
        if($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $returns = $this->redirectToRoute('dashboard_index');
        }
        return $returns;
    }
    
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function index() {
        return [];
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
        return [];
    }
    
    /**
     * @Route("/info", name="info")
     * @Template()
     */
    public function info() {
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
