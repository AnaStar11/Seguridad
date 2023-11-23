<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function concatenar($cadena1, $cadena2)
    {
        return $cadena1 . $cadena2;
    }

    public function longitudCadena($cadena)
    {
        return strlen($cadena);
    }

    public function arraySuma($numeros)
    {
        return array_sum($numeros);
    }

    public function esPar($numero)
    {
        return $numero % 2 == 0;
    }

    public function arrayInvertir($array)
    {
        return array_reverse($array);
    }






}
