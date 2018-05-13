<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of LibraryController
 *
 * @author lpu8er
 * @Route("/game/lib")
 */
class LibraryController extends InternalController {
    /**
     * @Route("/", name="lib_index")
     * @Template()
     */
    public function index() {
        // grab companies
        return [];
    }
}
