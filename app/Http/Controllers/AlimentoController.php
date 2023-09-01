<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Alimento;
use Illuminate\Http\Request;
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

   public function add()
   { 

    return view('alimento.add');

   }

   public function create(Request $request)
   { 

    $data = $request->all();    
    
    $new = [
        'nome' => $data['nome'],
        'porcao' => $data['porcao'],
        'carboidratos' => $data['carboidratos'],
        'proteinas' => $data['proteinas'],
        'gorduras' => $data['gorduras'],
        'fibras' => $data['fibras'],
        'sodio' => $data['sodio'],
        'calorias' => $data['calorias'],
        'status' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ];

    Alimento::create($new);

    return redirect()->route('alimentos');

   }

   public function edit($id)
   {
    
    $alimento = Alimento::find($id);

    return view('alimento.edit', compact('alimento'));

   }

   public function update(Request $request, int $id)
   { 

    $data = $request->all();    
    
    $alimento = Alimento::where('id', $id)->update([

    
        'nome' => $data['nome'],
        'porcao' => $data['porcao'],
        'carboidratos' => $data['carboidratos'],
        'proteinas' => $data['proteinas'],
        'gorduras' => $data['gorduras'],
        'fibras' => $data['fibras'],
        'sodio' => $data['sodio'],
        'calorias' => $data['calorias'],
        'updated_at' => Carbon::now()
    
    ]);

    return redirect()->route('alimentos');

   }
   
}


