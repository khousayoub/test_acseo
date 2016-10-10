<?php

namespace AeroportBundle\Controller;

use AeroportBundle\Entity\user as user;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     *
     * @Route("/Avions/{page}",name="avion", defaults={"page": 1}, requirements={"page": "\d+" })
     */
    public function ListAvionAction($page)
    {
        $rep = $this->getDoctrine()->getManager()->getRepository("AeroportBundle:avions");
        $result = $rep->getAvions($page,2);
        $rep2 = $this->getDoctrine()->getManager()->getRepository("AeroportBundle:user");
        $result2 = $rep2->findBy(array('roles' => 'ROLE_PASSAGER'));

        return $this->render('AeroportBundle:Aeroport:avion.html.twig', array("list" => $result, "passager"=>$result2, "page" => $page));
    }
    /**
     *
     * @Route("/utilisateur",name="user")
     */

    public function createUserAction()
    {
        $user = new user();
        $form = $this->get('form.factory')->createBuilder('form.type', $user)
            ->add('nom', 'text')
            ->add('email','text')
            ->getForm();

        return $this->render('user.html.twig', array(
            'form' => $form->createView()));

    }
    /**
     *
     * @Route("/Passagers/{page}",name="passager", defaults={"page": 1}, requirements={"page": "\d+" })
     */

    public function ListePassagersAction($page)
    {

        $rep2 = $this->getDoctrine()->getManager()->getRepository("AeroportBundle:user");
        $passe = $rep2->findBy(array('roles' => 'ROLE_PASSAGER'));

        return $this->render('AeroportBundle:Aeroport:passager.html.twig', array("passager"=>$passe, "page" => $page));
    }


}
