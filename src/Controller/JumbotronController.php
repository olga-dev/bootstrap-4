<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JumbotronController extends Controller
{
    /**
     * @Route("/examples/jumbotron", name="jumbotron_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('jumbotron/index.html.twig');
    }
}
