<?php

namespace App\Twig;

/**
 * Class FileExists
 * @package App\Twig\Extension
 */
class FileExtension extends \Twig_Extension
{
    /**
     * @return array|\Twig_Function[]
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('file_exists', 'file_exists'),
        ];
    }
}
