<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Homepage()
    {
    	$variavel="MelosasMoz";
    	#cria variavel titlo, para como mostrar na tela.
    	return view('welcome', [
    		'title'=>$variavel
    	]);
    }

     public function Cadastrar()
    {
    	echo "Tela de cadastro";
    }
/*
#Aqui vai o metodo de loguin
*/
     public function log()
    {
    	return view('user.log');
    }
}
