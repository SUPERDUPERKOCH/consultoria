<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aluno;
use App\Models\Dobra;
use App\Models\Medida;
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

    $medida = Medida::where('aluno_id', $aluno->id)->orderBy('id', 'desc')->first();
    $dobra = Dobra::where('aluno_id', $aluno->id)->orderBy('id', 'desc')->first();
    $penultima_dobra = Dobra::where('aluno_id', $aluno->id)->orderBy('id', 'desc')->skip(1)->first();

    return view('planejamento.planejamento', compact('aluno', 'medida', 'dobra', 'penultima_dobra'));

   }

   public function add($id)
   { 
    
    $aluno = Aluno::find($id);
    
    return view('planejamento.avaliacao', compact('aluno'));

   }

   public function create(Request $request, $id)
   { 

    $data = $request->all();
    
    $aluno = Aluno::find($id);

    $dobras = Dobra::create([
        'aluno_id' => $aluno->id,
        'subescapular' => $data['subescapular'],
        'tricipital' => $data['tricipital'],
        'peitoral' => $data['peitoral'],
        'axilar_media' => $data['axilar_media'],
        'abdominal' => $data['abdominal'],
        'coxa' => $data['coxa'],
        'supra_iliaca' => $data['supra_iliaca'],

    ]);

    $medidas = Medida::create([
        'aluno_id' => $aluno->id,
        'braco_esquerdo_relaxado' => $data['braco_esquerdo_relaxado'],
        'braco_direito_relaxado' => $data['braco_direito_relaxado'],
        'braco_esquerdo_contraido' => $data['braco_esquerdo_contraido'],
        'braco_direito_contraido' => $data['braco_direito_contraido'],
        'coxa_medial_esquerda' => $data['coxa_medial_esquerda'],
        'coxa_medial_direita' => $data['coxa_medial_direita'],
        'panturrilha_esquerda' => $data['panturrilha_esquerda'],
        'panturrilha_direita' => $data['panturrilha_direita'],
        'abdomen' => $data['abdomen'],
        'cintura' => $data['cintura'],
        'ombro' => $data['ombro'],
        'torax' => $data['torax'],
        'quadril' => $data['quadril'],

    ]);


    
    return redirect()->route('planejamentos.planejamento', ['id' => $aluno->id]);

   }


   
}


