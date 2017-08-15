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
        $blocks = [
            [
                'head' => 'Heading 1',
                'text' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'
            ],
            [
                'head' => 'Heading 2',
                'text' => 'Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'
            ],
            [
                'head' => 'Heading 3',
                'text' => 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus.'
            ]
        ];
        return $this->render('jumbotron/index.html.twig', ['blocks' => $blocks]);
    }
}
