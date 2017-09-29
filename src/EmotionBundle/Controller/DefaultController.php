<?php

namespace EmotionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use EmotionBundle\Entity\User;
// use EmotionBundle\Form\UserType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmotionBundle:Default:index.html.twig');
    }
    public function getUserAction($id) {
        
        // récup de UserRepository
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EmotionBundle:User');
        
        // recup de l'entité correspondante à $id
        $user = $repository->find($id);
        
        return $this->render('EmotionBundle:Default:user.html.twig', [
            'user' => $user
        ]);
    }
}
