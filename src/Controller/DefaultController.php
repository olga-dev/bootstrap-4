<?php

namespace App\Controller;

use App\Service\Menu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @param Menu $menu
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Menu $menu)
    {
        return $this->render('default/index.html.twig', ['menu' => $menu]);
    }
}
