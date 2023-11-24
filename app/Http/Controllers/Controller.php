<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sumar($a, $b)
    {
        return $a + $b;
    }
    public function restar($a, $b)
    {
        return $a - $b;
    }
    public function multiplicar($a, $b)
    {
        return $a * $b;
    }
    public function dividir($a, $b)
    {
        if ($b != 0) {
            return $a / $b;
        } else {
            return 'Error: División por cero';
        }
    }
}
