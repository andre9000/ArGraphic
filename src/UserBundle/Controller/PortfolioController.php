<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use UserBundle\Entity\Progetti;
use UserBundle\Form\ProgettiType;

class PortfolioController extends Controller
{
        public function projectAction(Request $request)
    {
     $nome = new Progetti();
     $form = $this->createForm(ProgettiType::class, $nome);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()) {
         // Salvo cose.
         $nome = $form->getData();
         $em = $this->getDoctrine()->getManager();
         $em->persist($nome);
         $em->flush();
     }
        return $this->render('UserBundle:Board:addProject.html.twig', array(
            'form'=>$form->createView(),

        ));
    }
}
