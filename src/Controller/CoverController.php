<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class CoverController
 * @package App\Controller
 */
class CoverController extends Controller
{
    /**
     * @Route("/examples/cover", name="cover_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('cover/index.html.twig');
    }
}
