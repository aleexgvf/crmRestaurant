<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bebidas;
use DB;

class bebidasController extends Controller
{
    public function regitrar()
    {
    	return view('/registrarBebidas');
    }
}
