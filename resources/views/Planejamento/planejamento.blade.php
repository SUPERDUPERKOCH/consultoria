<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Painel ADM</title>
            
            <! -- css da aplicação -->
            <link rel="stylesheet" href="/css/app.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            
            <! -- bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
                
            <! -- JS -->
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

            <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
    </head>


</head>
  <body>
    @include('layouts.NavBar')

    <div id="main">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-center">
                            <h4>{{$aluno->nome}}</h4>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="d-flex justify-content-end mt-2">
            <button class="btn btn-primary" id="botaoAvaliacao" data-id="{{$aluno->id}}">Adicionar avaliação</button>
        </div>
        <div class="row mt-2">
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Situação atual:</h6>
                        </div>
                        <div class="row mb-2">
                            <ul class="d-flex justify-content-around list-inline w-100">
                                <li class="px-2 py-1">
                                    Gordura: <br>
                                    <span><strong>{{ ($dobra && $dobra->body_fat_percentage) ? number_format($dobra->body_fat_percentage, 2, ',', '.') : '' }}%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Massa Magra: <br>
                                    <span><strong>{{ ($dobra && $dobra->massa_magra) ? number_format($dobra->massa_magra, 2, ',', '.') : '' }} kg</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Peso: <br>
                                    <span><strong>{{ $medida->peso ?? ''}} kg</strong></span>
                                </li>
                            </ul>
                        </div>
                        <h6>Ganhos</h6>
                        <h6 class="mt-2">Em relação à penúltima avaliação:</h6>
                        <div class="row mb-2">
                            <ul class="d-flex justify-content-around list-inline w-100">
                                <li class="px-2 py-1">
                                    Gordura: <br>
                                    <span><strong>{{ ($penultima_dobra && $penultima_dobra->body_fat_percentage) ? number_format($penultima_dobra->body_fat_percentage, 2, ',', '.') : '' }}%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Massa Magra: <br>
                                    <span><strong>{{ ($penultima_dobra && $penultima_dobra->massa_magra) ? number_format($penultima_dobra->massa_magra, 2, ',', '.') : '' }} kg</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Peso: <br>
                                    <span><strong>{{ $penultima_medida->peso ?? ''}} kg</strong></span>
                                </li>
                            </ul>
                        </div>

                        <h6 class="mt-2">Em relação ao inicio do período: {{$primeira_avaliacao->created_at_f ?? ''}}</h6>
                        <div class="row">
                            <ul class="d-flex justify-content-around list-inline w-100">
                                <li class="px-2 py-1">
                                    Gordura: <br>
                                    <span><strong>{{ ($primeira_avaliacao && $primeira_avaliacao->body_fat_percentage) ? number_format($primeira_avaliacao->body_fat_percentage, 2, ',', '.') : '' }}%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Massa Magra: <br>
                                    <span><strong>{{  ($primeira_avaliacao && $primeira_avaliacao->massa_magra) ? number_format($primeira_avaliacao->massa_magra, 2, ',', '.') : '' }} kg</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Peso: <br>
                                    <span><strong>{{$aluno->peso}} kg</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Últimas medidas: {{$medida->created_at_f ?? ''}} </h6>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                Braço Esquerdo relaxado:
                                <span><strong>{{$medida->braco_esquerdo_relaxado ?? ''}} cm</strong></span>
                            </div>

                            <div class="col-6 mb-2">
                            Braço Direito relaxado:
                            <span><strong>{{$medida->braco_direito_relaxado ?? ''}} cm</strong></span>
                            </div>
                        
                            <div class="col-6 mb-2">
                                Braço Esquerdo contraído:
                                <span><strong>{{$medida->braco_esquerdo_contraido ?? ''}} cm</strong></span>
                            </div>
                            <div class="col-6 mb-2">
                                Braço Direito contraído:
                                <span><strong>{{$medida->braco_direito_contraido ?? ''}} cm</strong></span>
                            </div>
                        
                            <div class="col-6 mb-2">
                                Coxa Medial Esquerda:
                                <span><strong>{{$medida->coxa_medial_esquerda ?? ''}} cm</strong></span>
                            </div>
                            <div class="col-6 mb-2">
                                Coxa Medial Direita
                                <span><strong>{{$medida->coxa_medial_direita ?? ''}} cm</strong></span>
                            </div>
                           
                        
                            <div class="col-6 mb-2">
                                Panturrilha Esquerda:
                                <span><strong>{{$medida->panturrilha_esquerda ?? ''}} cm</strong></span>
                            </div>
                            <div class="col-6 mb-2">
                                Panturrilha Direita
                                <span><strong>{{$medida->panturrilha_direita ?? ''}} cm</strong></span>
                            </div>                           
                        
                            <div class="col-6 mb-2">
                                Abdômen:
                                <span><strong>{{$medida->abdomen ?? ''}} cm</strong></span>
                            </div>
                            <div class="col-6 mb-2">
                                Cintura:
                                <span><strong>{{$medida->cintura ?? ''}} cm</strong></span>
                            </div>
                        
                        
                            <div class="col-6 mb-2">
                                Ombro:
                                <span><strong>{{$medida->ombro ?? ''}} cm</strong></span>
                            </div>
                            <div class="col-6 mb-2">
                                Torax:
                                <span><strong>{{$medida->torax ?? ''}} cm</strong></span>
                            </div>
                        
                        
                            <div class="col-6 mb-2">
                                Quadril:
                                <span><strong>{{$medida->quadril ?? ''}} cm</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <script>

        $(document).on('click', '#botaoAvaliacao', function() {
            var id = $(this).data('id');
            location.href = '/planejamentos/planejamento/' + id + '/avaliacao';
        });

    </script>

    <style>
      

       
        

    </style>    

  </body>
</html> 
