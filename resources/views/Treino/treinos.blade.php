<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Painel ADM</title>
            
            <! -- css da aplicação -->
            <link rel="stylesheet" href="/gym_2/resources/css/app.css">
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

        <div style="margin: 10px">

            <a href="" class="btn btn-primary float-end" style="margin: 10px">Adicionar</a>
      
        </div>  

        <div id="search-container" class="col-md-3" style="margin: 10px">
        
      
        
            <h6>Pesquisar usuário</h6>
             
            <form class="input" method="POST">
            @csrf
       

            <div>

                <input class = "form" type="search" name="search" id="search" placeholder="CPF...">
                <button class="btn btn-primary">Pesquisar</button>
         
            </div>
      
        </div>
        
        <div style = "padding: 15px 0;">
            <table class="table table-bordered" style="border: 5px solid black;">
                <thead>
                <tr>
                
                    <th style="text-align: center">Nome</th>
                    <th style="text-align: center">E-mail</th>
                    <th style="text-align: center">CPF</th>
                    <th style="text-align: center">Plano</th>
                    <th style="text-align: center">Ações</th>

                </tr>
                <tbody>
                    
                        <div > 
                            <tr>
                            
                                <td style="text-align: center"></td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center"></td>
                                <td> 
                                    <div class="row">
                                        <div class="col-md-1 mt-2">                        
                                        <a href="">
                                            <img src="\gym\public\img\editar.png" style="width: 3vh">   
                                        </a>
                                        </div>
                                     
                                        <div class="col-md-1">
                                        <div class="btn">
                                            <img src="\gym\public\img\deletar.png" style="width: 3vh">
                                        </div>
                                    
                                    
                                    </div> 
                                </td>
                            </tr>
                        </div>      
                    
                
                </tbody>
    
            </table>
        </div>

    
    </div>
    <script>

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
          document.getElementById("main").style.marginLeft= "0px";
        }

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
