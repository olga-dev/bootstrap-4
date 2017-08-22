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
        return $this->render('cover/home/index.html.twig');
    }

    /**
     * @Route("/examples/cover/features", name="cover_features")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function featuresAction()
    {
        return $this->render('cover/features/index.html.twig');
    }

    /**
     * @Route("/examples/cover/contact", name="cover_contact")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction()
    {
        return $this->render('cover/contact/index.html.twig');
    }
}
