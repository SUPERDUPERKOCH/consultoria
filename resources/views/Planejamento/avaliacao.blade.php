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
        <div class="row mt-3">
            <div class="col-md-12">    
                <div class="card">
                    <div class="card-header">   
                        <div class="card-title"><h1>Avaliação</h1></div>
                    </div>  
                    <div class="card-body">
                        <br>
                        <form action="{{route('planejamentos.create', $aluno->id)}}" method="POST">
                            @csrf
                            <div class="row">

                                <h4>Dobras Cutâneas (em MM)</h4><hr>
                                <div class="col-md-2">
                                    <span>Subescapular</span>
                                    <input type="text" class="form-control" id="subescapular" name="subescapular">
                                </div>
                                <div class="col-md-2">
                                    <span>Tricipital</span>
                                    <input type="text" class="form-control" id="tricipital" name="tricipital">
                                </div>
                                <div class="col-md-2">
                                    <span>Peitoral</span>
                                    <input type="text" class="form-control" id="peitoral" name="peitoral">
                                </div>
                                <div class="col-md-2">
                                    <span>Axilar média</span>
                                    <input type="text" class="form-control" id="axilar_media" name="axilar_media">
                                </div>
                                <div class="col-md-2">
                                    <span>Abdominal</span>
                                    <input type="text" class="form-control" id="abdominal" name="abdominal">
                                </div>
                                <div class="col-md-2">
                                    <span>Coxa</span>
                                    <input type="text" class="form-control" id="coxa" name="coxa">
                                </div>
                                <div class="col-md-2">
                                    <span>Supra-ilíaca</span>
                                    <input type="text" class="form-control" id="supra_iliaca" name="supra_iliaca">
                                </div>
                                <h4 class="mt-2">Perímetros (em CM)</h4><hr>

                                <div class="col-md-3">
                                    <span>Braço esquerdo relaxado</span>
                                    <input type="text" class="form-control" id="braco_esquerdo_relaxado" name="braco_esquerdo_relaxado">
                                </div>
                                <div class="col-md-3">
                                    <span>Braço direito relaxado</span>
                                    <input type="text" class="form-control" id="braco_direito_relaxado" name="braco_direito_relaxado">
                                </div>
                                <div class="col-md-3">
                                    <span>Braço esquerdo contraído</span>
                                    <input type="text" class="form-control" id="braco_esquerdo_contraido" name="braco_esquerdo_contraido">
                                </div>
                                <div class="col-md-3">
                                    <span>Braço direito contraído</span>
                                    <input type="text" class="form-control" id="braco_direito_contraido" name="braco_direito_contraido">
                                </div>
                                <div class="col-md-3">
                                    <span>Coxa medial esquerda</span>
                                    <input type="text" class="form-control" id="coxa_medial_esquerda" name="coxa_medial_esquerda">
                                </div>
                                <div class="col-md-3">
                                    <span>Coxa medial direita</span>
                                    <input type="text" class="form-control" id="coxa_medial_direita" name="coxa_medial_direita">
                                </div>
                                <div class="col-md-3">
                                    <span>Panturrilha esquerda</span>
                                    <input type="text" class="form-control" id="panturrilha_esquerda" name="panturrilha_esquerda">
                                </div>
                                <div class="col-md-3">
                                    <span>Panturrilha direita</span>
                                    <input type="text" class="form-control" id="panturrilha_direita" name="panturrilha_direita">
                                </div>
                                <div class="col-md-3">
                                    <span>Abdômen</span>
                                    <input type="text" class="form-control" id="abdomen" name="abdomen">
                                </div>
                                <div class="col-md-3">
                                    <span>Cintura</span>
                                    <input type="text" class="form-control" id="cintura" name="cintura">
                                </div>
                                <div class="col-md-3">
                                    <span>Ombro</span>
                                    <input type="text" class="form-control" id="ombro" name="ombro">
                                </div>
                                <div class="col-md-3">
                                    <span>Torax</span>
                                    <input type="text" class="form-control" id="torax" name="torax">
                                </div>
                                <div class="col-md-3">
                                    <span>Quadril</span>
                                    <input type="text" class="form-control" id="quadril" name="quadril">
                                </div>
                                
                                <div class="col-md-12 mt-3">
                                    <button class="btn-add float-end">Salvar <i class="fas fa-save"></i></button>
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <script>

        function calculateTMB() {
    
        let idade = parseFloat(document.getElementById('idade').value) || 0;
        let altura = parseFloat(document.getElementById('altura').value) || 0;
        let peso = parseFloat(document.getElementById('peso').value) || 0;
        let sexo = document.getElementById('sexo').value;

        let taxaMetabolismo;

        if(sexo == 'M'){
            taxaMetabolismo = 88.362 + (13.397 * peso) + (4.799 * altura) - (5.677 * idade);
        }if(sexo == 'F'){
            taxaMetabolismo = 447.593 + (9.247 * peso) + (3.098 * altura) - (4.330 * idade);
        }else{

            document.getElementById('tmb').value = ''

        }
        document.getElementById('tmb').value = taxaMetabolismo.toFixed(2);  
        }


        document.getElementById('idade').addEventListener('input', calculateTMB);
        document.getElementById('altura').addEventListener('input', calculateTMB);
        document.getElementById('peso').addEventListener('input', calculateTMB);
        document.getElementById('sexo').addEventListener('change', calculateTMB);

    </script>

    <style>


        #main {
          transition: margin-left .5s;
          padding: 16px;
          margin-left: 250px;
        }



    </style>    

  </body>
</html> 
