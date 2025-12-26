<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CatalogController extends AbstractController 
{
  #[Route('catalog/show', name: 'catalog_show')]
  public function show(): Response
  {
    return $this->render('catalog/show.html.twig');
  }

}
