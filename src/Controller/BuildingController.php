<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

/**
 * Description of BuildingController
 *
 * @author lpu8er
 * @Route("/game/building")
 */
class BuildingController extends InternalController {
    /**
     * @Route("/create/office", name="office_create")
     * @Template()
     */
    public function createOffice() {
        return [];
    }
}
