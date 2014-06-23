<?php

require 'vendor/autoload.php';

use Haskell\Functor\Maybe\Just;
use Haskell\Functor\ListFunctor;
use Haskell\Type\ListType;

//$justFunctor = new Just('foo');
//
//$a = $justFunctor->fmap(function($a) {
//    return array_fill(0, 3, $a);
//});

$listFunctor = new ListFunctor(new ListType([1,2,3]));

$a = $listFunctor->fmap([
   function ($x) { return range(0, $x); },
   function ($x) { return pow($x, 3); }
]);

var_dump($a);