<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of DashboardController
 *
 * @author captivea-qch
 * @Route("/game/dash")
 */
class DashboardController extends InternalController {
    /**
     * @Route("/", name="dashboard_index")
     * @Template()
     */
    public function index() {
        $this->addMessage('Hello World', static::MSGLVL_ERROR, false);
        return [];
    }
}
