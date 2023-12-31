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


        <div id="search-container" class="col-md-3" style="margin: 10px">
        
      
        
            <h6>Pesquisar aluno</h6>
             
            
       

            <div class="row">


                <div class="col-md-8">
                    <input class = "form-control" type="search" name="search" id="search">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary">Pesquisar</button>
                </div>
            </div>
      
        </div>

        
        <div style = "padding: 15px 0;">
            <table class="table table-bordered" style="border: 3px solid black;">
                <thead>
                    <tr>

                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">Nome</th>
                        <th style="text-align: center">Ultima Atualização</th>
                        <th style="text-align: center">Ações</th>

                    </tr>
                </thead>
                <tbody>
                
                    
                        
                    @foreach($planejamentos as $p)    
                            <tr>
                                
                                <td style="text-align: center">{{$p->id}}</td>
                                <td style="text-align: center">{{$p->nome}}</td>
                                <td style="text-align: center">{{$p->updated_at_f}}</td>
                                <td> 
                                    <div class="row">
                                        <div class="col-md-2">                        
                                            <button data-id="{{ $p->id }}" type="button" class="btn-view"><i class="fas fa-eye"></i></button>
                                        </div>
                                        <div class="col-md-2">                        
                                            <button type="button" class="btn-delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div> 
                                </td>
                               
                            </tr>
                    @endforeach
                    </div>                                           
                </tbody>
            </table>
               
        </div>
    </div>
    <script>

        $(document).on('click', '.btn-view', function() {
            var id = $(this).data('id');
            location.href = 'planejamentos/planejamento/' + id;
        });

    </script>

    <style>


       



    </style>    

  </body>
</html> 
