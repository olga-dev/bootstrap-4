<?php

namespace App\Service;

use Symfony\Component\Routing\Router;

/**
 * Class Menu
 * @package App\Service
 */
class Menu
{
    /**
     * @var Router
     */
    protected $router;

    /**
     * Menu constructor.
     * @param Router $router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        $result = [];
        $router = $this->router->getRouteCollection()->all();
        foreach ($router as $route => $params) {
            if (strpos($route, '_home') > 0) {
                $projectName = explode('_', $route)[0];
                $name = str_replace('-', ' ', $projectName);
                $result[] = [
                    'route' => $route,
                    'image' => "assets/$projectName/images/screenshot.png",
                    'name' => $name
                ];
            }
        }

        return $result;
    }
}
