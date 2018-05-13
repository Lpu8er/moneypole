<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use App\Entity\Country;

/**
 * Description of AdminController
 *
 * @author lpu8er
 * @Route("/admin")
 */
class AdminController extends InternalController {
    /**
     * 
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     * @return $this
     */
    protected function checkAccess() {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        return $this;
    }
    
    /**
     * @Route("/", name="admin_index")
     * @Template()
     */
    public function index() {
        $this->checkAccess();
        // grab companies
        return [];
    }
    
    /**
     * @Route("/", name="admin_countries")
     * @Template()
     */
    public function countries() {
        $this->checkAccess();
        return [
            'countries' => $this->getDoctrine()->getRepository(Country::class)->findAll(),
        ];
    }
}
