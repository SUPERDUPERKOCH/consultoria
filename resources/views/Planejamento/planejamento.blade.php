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

            <!-- Font Awesome -->

            <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

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
            <button class="btn btn-primary"> Adicionar avaliação</button>
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
                                    <span><strong>10%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Massa Magra: <br>
                                    <span><strong>72.5 kg</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Peso: <br>
                                    <span><strong>80.5 kg</strong></span>
                                </li>
                            </ul>
                        </div>
                        <h6>Ganhos</h6>
                        <h6 class="mt-2">Em relação à penúltima avaliação:</h6>
                        <div class="row mb-2">
                            <ul class="d-flex justify-content-around list-inline w-100">
                                <li class="px-2 py-1">
                                    Gordura: <br>
                                    <span><strong>10%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Massa Magra: <br>
                                    <span><strong>72.5 kg</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Peso: <br>
                                    <span><strong>80.5 kg</strong></span>
                                </li>
                            </ul>
                        </div>

                        <h6 class="mt-2">Em relação ao inicio do período: (15/08/2022)</h6>
                        <div class="row">
                            <ul class="d-flex justify-content-around list-inline w-100">
                                <li class="px-2 py-1">
                                    Gordura: <br>
                                    <span><strong>10%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Massa Magra: <br>
                                    <span><strong>72.5 kg</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Peso: <br>
                                    <span><strong>80.5 kg</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Últimas medidas: (dia/mês/ano) </h6>
                        </div>
                        <div class="row mb-2">
                            <ul class="d-flex justify-content-between list-inline w-100">
                                <li class="px-2 py-1">
                                Braço Relaxado Direito:
                                <span><strong>10%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Braço Relaxado Esquerdo:
                                    <span><strong>72.5</strong></span>
                                </li>
                            </ul>
                            <ul class="d-flex justify-content-between list-inline w-100">
                                <li class="px-2 py-1">
                                    Braço Contraído Direito:
                                    <span><strong>10%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Braço Contraído Esquerdo:
                                    <span><strong>72.5</strong></span>
                                </li>
                            </ul>
                            <ul class="d-flex justify-content-between list-inline w-100">
                                <li class="px-2 py-1">
                                    Coxa Medial Direito
                                    <span><strong>10%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Coxa Medial Esquerdo:
                                    <span><strong>72.5</strong></span>
                                </li>
                            </ul>
                            <ul class="d-flex justify-content-between list-inline w-100">
                                <li class="px-2 py-1">
                                    Abdômen:
                                    <span><strong>10%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Cintura:
                                    <span><strong>72.5</strong></span>
                                </li>
                            </ul>
                            <ul class="d-flex justify-content-between list-inline w-100">
                                <li class="px-2 py-1">
                                    Ombro:
                                    <span><strong>10%</strong></span>
                                </li>
                                <li class="px-2 py-1">
                                    Torax:
                                    <span><strong>72.5</strong></span>
                                </li>
                            </ul>
                            <ul class="d-flex justify-content-start list-inline w-100">
                                <li class="px-2 py-1">
                                    Quadril:
                                    <span><strong>10%</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <script>



    </script>

    <style>
      

       
        

    </style>    

  </body>
</html> 
