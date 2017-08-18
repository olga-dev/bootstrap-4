<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class CarouselController
 * @package App\Controller
 */
class CarouselController extends Controller
{
    /**
     * @Route("/examples/carousel", name="carousel_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('carousel/index.html.twig');
    }
}
