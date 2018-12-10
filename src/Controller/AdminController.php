<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Repository\MembreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
 * @Route("/admin", name="admin")
 */
    public function index()
    {

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/afficherMembres", name="afficherMembres")
     *
     */
    public function afficherMembres()
    {
        $repo = $this->getDoctrine()->getRepository(Membre::class);
        $membres = $repo->findAll();
        return $this->render('admin/afficherMembres.html.twig', [
            'controller_name' => 'AdminController',
            'membres' => $membres
        ]);
    }




}
