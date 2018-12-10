<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    /**
 * @Route("/voyage", name="voyage")
 */
    public function index()
    {

        return $this->render('travel/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/voyage/{name}", name="voyage_nom")
     */
    public function prenom($name)
    {
        $date_du_jour = date('d m Y');
        return $this->render('travel/index_name.html.twig', [
            'controller_name' => 'BlogController',
            'name' => $name,
            'date_du_jour' => $date_du_jour
        ]);
    }

}
