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
                        <div class="card-title"><h1>Adicionar Aluno</h1></div>
                    </div>  
                    <div class="card-body">
                        <br>
                        <form action="{{route('alunos.create')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <span>Nome completo</span>
                                    <input type="text" class="form-control" id="nome" name="nome">
                                </div>
                                <div class="col-md-5">
                                    <span>E-mail</span>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="col-md-2">
                                    <span>Sexo</span>
                                    <select class="form-control" id="sexo" name="sexo">
                                        <option value=""></option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <span>Idade</span>
                                    <input type="text" class="form-control" id="idade" name="idade">
                                </div>
                                <div class="col-md-3">
                                    <span>Altura (cm)</span>
                                    <input type="text" class="form-control" id="altura" name="altura">
                                </div>
                                <div class="col-md-3">
                                    <span>Peso (kg)</span>
                                    <input type="text" class="form-control" id="peso" name="peso">
                                </div>
                                <div class="col-md-3">
                                    <span>TMB</span>
                                    <input type="text" class="form-control" id="tmb" name="tmb">
                                </div>
                                
                                <div class="col-md-12 mt-3">
                                    <button class="btn-add float-end">Salvar <i class="fas fa-save"></i></button>
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
