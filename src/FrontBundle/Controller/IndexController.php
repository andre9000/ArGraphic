<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontBundle:Home:index.html.twig', array(
            // ...
        ));
    }
}
