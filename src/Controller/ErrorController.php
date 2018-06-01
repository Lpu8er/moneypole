<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * Description of ErrorController
 *
 * @author lpu8er
 * @Route("/game/error")
 */
class ErrorController extends InternalController {
    /**
     * 
     * @Route("/404", name="error_404")
     * @Template("@App/error/notfound.html.twig")
     */
    public function notFound() {
        return [];
    }
}
