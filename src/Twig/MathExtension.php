<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class MathExtension extends AbstractExtension
{
  public function getFunctions(): array
  {
    return [
      new TwigFunction('ceil', function($v){
        return 'Ceil = '.ceil($v);
      }),

      new TwigFunction('vitaly', function(){
        return 'Привет, Виталий!';
      })
    ];
  }

  public function getFilters()
  {
    return [
      new TwigFilter('addIdxArr', function($arr){
        foreach ($arr as $key => $value) {
          $arr[$key] = ($key+1)." - ".$value;
        }
        return $arr;
      })
    ];
  }


}