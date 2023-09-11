<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aluno;
use App\Models\Planejamento;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PlanejamentoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function planejamentos() 
   { 
   
    $planejamentos = Aluno::where('status', 1)->get();


    return view('planejamento.planejamentos', compact('planejamentos'));

   }

   public function planejamento($id) 
   { 
   
    $aluno = Aluno::find($id);


    return view('planejamento.planejamento', compact('aluno'));

   }


   
}


