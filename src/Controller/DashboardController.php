<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of DashboardController
 *
 * @author lpu8er
 * @Route("/game/dash")
 */
class DashboardController extends InternalController {
    /**
     * @Route("/", name="dashboard_index")
     * @Template()
     */
    public function index() {
        // grab companies
        return [];
    }
}
