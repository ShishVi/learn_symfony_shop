<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{

  #[Route('/first/{action}', 
  requirements: ['action' => '[a-zA-Z]+'], 
  defaults:['action' => 'default'],
  methods:['GET', 'POST'])]
  public function firstAction(string $action)
  {
    $number = rand(1, 4656);
    $listUsers = ['Владимир', 'Сергей', 'Виталий', 'Андрей', 'Анастасия', 'Ольга', 'Эдуард', 'Мира'];

    
    //dd($listUsers);
    return $this->render('first/firstAction.html.twig', [
      'action' => $action,
      'number' => $number,
      'listUsers' => $listUsers,
    ]);
  }

  #[Route('/test1')]
  public function test1(): Response
  {
    return $this->render('first/test1.html.twig', [
      'text' => 'Test1 resp!'
    ]);
    
  }
  #[Route('/test2')]
  public function test2(): Response
  {
    return $this->render('first/test2.html.twig', [
      'text' => 'Test2 resp!'
    ]);
  }
}