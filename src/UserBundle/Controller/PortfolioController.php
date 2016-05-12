<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
        public function projectAction()
    {
        return $this->render('UserBundle:Board:addProject.html.twig', array(
            // ...
        ));
    }
}
