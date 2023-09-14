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
                        <div class="card-title"><h1>Adicionar Alimento</h1></div>
                    </div>  
                    <div class="card-body">
                        <br>
                        <form action="{{route('alimentos.create')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Alimento</span>
                                    <input type="text" class="form-control" id="nome" name="nome">
                                </div>
                                <div class="col-md-6">
                                    <span>Porção (Gramas)</span>
                                    <input type="text" class="form-control" id="porcao" name="porcao">
                                </div>
                                <div class="col-md-2">
                                    <span>Qntd. de carboidrato</span>
                                    <input type="text" class="form-control" id="carboidratos" name="carboidratos">
                                </div>
                                <div class="col-md-2">
                                    <span>Qntd. de proteína</span>
                                    <input type="text" class="form-control" id="proteinas" name="proteinas">
                                </div>
                                <div class="col-md-2">
                                    <span>Qntd. de gordura</span>
                                    <input type="text" class="form-control" id="gorduras" name="gorduras">
                                </div>
                                <div class="col-md-2">
                                    <span>Qntd. de fibras</span>
                                    <input type="text" class="form-control" id="fibras" name="fibras">
                                </div>
                                <div class="col-md-2">
                                    <span>Qntd. de sódio (Mg)</span>
                                    <input type="text" class="form-control" id="sodio" name="sodio">
                                </div>
                                <div class="col-md-2">
                                    <span>Calorias totais</span>
                                    <input type="text" class="form-control" id="calorias" name="calorias">
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

        function calculateCalories() {
    
        let carboidratos = parseFloat(document.getElementById('carboidratos').value) || 0;
        let proteinas = parseFloat(document.getElementById('proteinas').value) || 0;
        let gorduras = parseFloat(document.getElementById('gorduras').value) || 0;

        
        let totalCalorias = (carboidratos * 4) + (proteinas * 4) + (gorduras * 9);

        
        document.getElementById('calorias').value = totalCalorias.toFixed(2);  
        }


        document.getElementById('carboidratos').addEventListener('input', calculateCalories);
        document.getElementById('proteinas').addEventListener('input', calculateCalories);
        document.getElementById('gorduras').addEventListener('input', calculateCalories);


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
