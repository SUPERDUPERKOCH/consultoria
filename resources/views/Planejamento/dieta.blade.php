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
            
            

            <!-- Font Awesome -->

            <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    </head>


</head>
  <body>
    @include('layouts.NavBar')

    <div id="main">
        <div class="row mt-3">    
            <div class="col-md-8">
                  
                <div class="card">

                    <button class="btn btn-primary" id="addCard">Adicionar nova refeição</button>

                </div>
            </div>
            
        </div>
        
        <div class="row mt-3" >    
            <div class="col-md-12">
                  
                <div class="card">

                    <div class="card-header">

                        <input type="text" class="form-control">

                    </div>
                    <div class="card-body">
                        <div class="food-group">    
                            <div class="row">
                                <div class="col-md-3">
                                    <span>Adicionar alimento</span>
                                    <select class="form-control" id="selectAlimento0" onchange="foodSelect(0)">
                                        <option value=""></option>
                                        @foreach($alimento as $a)
                                            <option value="{{$a->id}}">{{$a->nome}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary addAlimento-btn mt-1">Adicionar novo alimento</button>
                                </div>
                                <div class="col-md-1">
                                    <span>Porção</span>
                                    <input type="text" class="form-control" oninput="calculateCalories(0)" id="porcaoInput0"/>
                                </div>
                                <div class="col-md-2">
                                    <span>Calorias</span>
                                    <input type="text" class="form-control" id="calorieInput0"/>
                                </div>
                                <div class="col-md-2">
                                    <span>Carboidratos</span>
                                    <input type="text" class="form-control" id="carboidratoInput0"/>
                                </div> 
                                <div class="col-md-2">
                                    <span>Proteinas</span>
                                    <input type="text" class="form-control" id="proteinaInput0"/>
                                </div> 
                                <div class="col-md-2">
                                    <span>Gorduras</span>
                                    <input type="text" class="form-control" id="gorduraInput0"/>
                                </div>      
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            
    
    <script>
    
    var contador = 1;
    $(document).ready(function() {
        $('#addCard').click(function() {
        var cardHtml = 
        '<div class="card mt-3">' +
            '<div class="card-header">' +
                '<input type="text" class="form-control">' +
            '</div>' +
            '<div class="card-body">' +
                '<div class="food-group">' +            
                    '<div class="row">' + 
                        '<div class="col-md-3">'+
                            '<span>Adicionar alimento</span>' +
                            `<select class="form-control" id="selectAlimento${contador}" onchange="foodSelect(${contador})" placeholder="Selecione o alimento">` +
                                '<option value=""></option>' +
                                '@foreach($alimento as $a)' + 
                                    '<option value="{{$a->id}}">{{$a->nome}}</option>' +
                                '@endforeach' +
                            '</select>' +
                            '<button class="btn btn-primary addAlimento-btn mt-1">Adicionar novo alimento</button>' + 
                        '</div>' +
                        '<div class="col-md-1">'+
                            '<span>Porção</span>'+
                            `<input type="text" class="form-control" oninput="calculateCalories(${contador})" id="porcaoInput${contador}"/>`+
                        '</div>'+
                        '<div class="col-md-2">' +
                            '<span>Calorias</span>' +
                            `<input type="text" class="form-control" id="calorieInput${contador}"/>`+
                        '</div>' +
                        '<div class="col-md-2">' +
                            '<span>Carboidratos</span>'+
                            `<input type="text" class="form-control" id="carboidratoInput${contador}"/>`+
                        '</div>' +
                        '<div class="col-md-2">' +
                            '<span>Proteinas</span>' +
                            `<input type="text" class="form-control" id="proteinaInput${contador}"/>`+
                        '</div>' +
                        '<div class="col-md-2">' +
                            '<span>Gorduras</span>' +
                            `<input type="text" class="form-control" id="gorduraInput${contador}"/>`+
                        '</div>' +
                    '</div>'+
                '</div>'+    
            '</div>' +
        '</div>';
        contador ++;
        $('.card').last().after(cardHtml);
        
        });
  
        $(document).on('click', '.addAlimento-btn', function() {
        
        var newGroup =
        '<div class="food-group">' + 
            '<div class="row">' + 
                '<div class="col-md-3">'+
                    '<span>Adicionar alimento</span>'+
                    `<select class="form-control" id="selectAlimento${contador}" onchange="foodSelect(${contador})" placeholder="Selecione o alimento">`+
                        '<option value=""></option>' +
                        '@foreach($alimento as $a)'+
                            '<option value="{{$a->id}}">{{$a->nome}}</option>'+
                        '@endforeach'+
                    '</select>'+
                    '<button class="btn btn-primary addAlimento-btn mt-1">Adicionar novo alimento</button>'+
                '</div>'+
                '<div class="col-md-1">'+
                    '<span>Porção</span>'+
                      `<input type="text" class="form-control" oninput="calculateCalories(${contador})" id="porcaoInput${contador}"/>`+
                '</div>'+
                '<div class="col-md-2">'+
                    '<span>Calorias</span>'+
                    `<input type="text" class="form-control" id="calorieInput${contador}"/>`+
                '</div>'+
                '<div class="col-md-2">'+
                    '<span>Carboidratos</span>'+
                    `<input type="text" class="form-control" id="carboidratoInput${contador}"/>`+
                '</div>'+
                '<div class="col-md-2">'+
                    '<span>Proteinas</span>'+
                    `<input type="text" class="form-control" id="proteinaInput${contador}"/>`+
                '</div>'+
                '<div class="col-md-2">'+
                    '<span>Gorduras</span>'+
                    `<input type="text" class="form-control" id="gorduraInput${contador}"/>`+
                '</div>'+
            '</div>'+
        '</div>';
        

        contador ++;
        $(this).closest('.card-body').append(newGroup);
        });
    

    });

    function foodSelect(id){
        console.log(id)    
        var foodId = $(`#selectAlimento${id}`).val();
        
        var porcao = $(this).closest('.food-group').find(`#porcaoInput${id}`);
        var calorias = $(this).closest('.food-group').find(`#calorieInput${id}`);
        var carboidratos = $(this).closest('.food-group').find(`#carboidratoInput${id}`);
        var proteinas = $(this).closest('.food-group').find(`#proteinaInput${id}`);
        var gorduras = $(this).closest('.food-group').find(`#gorduraInput${id}`);
        
        if (foodId) {
            $.ajax({
                url: '/getAlimentos',
                type: 'GET',
                data: { id: foodId },
                success: function(data) {
                    defaultPorcao = data.porcao
                    defaultCalorias = data.calorias;
                    defaultProteinas = data.proteinas;
                    defaultCarboidratos = data.carboidratos;
                    defaultGorduras = data.gorduras;
                   
                    $(`#porcaoInput${id}`).val(defaultPorcao);
                    $(`#calorieInput${id}`).val(defaultCalorias);     
                    $(`#carboidratoInput${id}`).val(defaultCarboidratos);   
                    $(`#proteinaInput${id}`).val(defaultProteinas);   
                    $(`#gorduraInput${id}`).val(defaultGorduras);
                    
    
                },
                error: function(error) {
                    console.error("Erro ao buscar as calorias:", error);
                }
            });
        } else {
            porcao.val('');
            calorias.val('');
            carboidratos.val('');
            proteinas.val('');
            gorduras.val('');

        }
    }

    

    function calculateCalories(id){

        let novaPorcao = $(`#porcaoInput${id}`).val();
        let porcao = novaPorcao / defaultPorcao; 
                            
        $(`#calorieInput${id}`).val(parseFloat(defaultCalorias * porcao).toFixed(2));
        $(`#carboidratoInput${id}`).val(parseFloat(defaultCarboidratos * porcao).toFixed(2));
        $(`#proteinaInput${id}`).val(parseFloat(defaultProteinas * porcao).toFixed(2));
        $(`#gorduraInput${id}`).val(parseFloat(defaultGorduras * porcao).toFixed(2));
        
    }

    </script>

    <style>




    </style>    

  </body>
</html> 
