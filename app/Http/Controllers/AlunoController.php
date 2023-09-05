<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AlunoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function alunos() 
   { 

    $alunos = Aluno::where('status', 1)->get();
   
    return view('aluno.alunos', compact('alunos'));

   }

   public function add()
   { 

    return view('aluno.add');

   }

   public function create(Request $request)
   { 

        $data = $request->all();
    
        $new = [
        
            'nome' => $data ['nome'],
            'email' => $data ['email'],
            'sexo' => $data ['sexo'],
            'idade' => $data ['idade'],
            'altura' => $data ['altura'],
            'peso' => $data ['peso'],
            'tmb' => $data ['tmb'],
            'status' => 1,
            'created_at' => Carbon::now(),
        
        ];
    
        Aluno::create($new);
    
        return redirect()->route('alunos');

   }

   public function edit($id) 
   { 

    $aluno = Aluno::find($id);
   
    return view('aluno.edit', compact('aluno'));

   }

   public function update(Request $request, int $id) 
   { 


    $data = $request->all();
    
    $aluno = Aluno::where('id', $id)->update([
        
            'nome' => $data ['nome'],
            'email' => $data ['email'],
            'sexo' => $data ['sexo'],
            'idade' => $data ['idade'],
            'altura' => $data ['altura'],
            'peso' => $data ['peso'],
            'tmb' => $data ['tmb'],
            'updated_at' => Carbon::now(),
        
    ]);
    
        
    return redirect()->route('alunos');
   

   }



}
