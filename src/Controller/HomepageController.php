<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage_view")
     */
    public function viewHomepage()
    {
        $model = array();
        $view = 'homepage.html.twig';
        
        return $this->render($view, $model);
    }
}
