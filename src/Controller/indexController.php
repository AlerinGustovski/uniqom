<?php


namespace App\Controller;


use App\Entity\Model;
use App\Entity\Stamp;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class indexController extends AbstractController

{
    /**
     * @Route("/", name="index_page")
     */
    public function indexAction() {


        return $this->render('index.html.twig', [

        ]);
    }

}