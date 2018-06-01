<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of StorageController
 *
 * @author lpu8er
 * @Route("/game/storage")
 */
class StorageController extends InternalController {
    /**
     * @Route("/", name="storage_index")
     * @Template()
     */
    public function index() {
        
        return [
            'best' => $this->getDoctrine()->getRepository(History::class)->retrieveMax('%'),
            'worst' => $this->getDoctrine()->getRepository(History::class)->retrieveMax('%', 'P1D', true),
        ];
    }
}
