<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class NavbarTopFixedController
 * @package App\Controller
 */
class NavbarTopFixedController extends Controller
{
    /**
     * @Route("/examples/navbar-top-fixed", name="navbar-top-fixed_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('navbar-top-fixed/index.html.twig');
    }
}