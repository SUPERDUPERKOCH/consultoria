<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Alimento;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AlimentoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function alimentos() 
   { 
   
    $alimentos = Alimento::where('status', 1)->get();


    return view('alimento.alimentos', compact('alimentos'));

   }

//    public function create() 
//    { 
   
//     $alimentos = Alimento::where('status', 1)->get();


//     return view('alimento.alimentos', compact('alimentos'));

//    }

}


