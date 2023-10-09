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
        <div class="row mt-3" >    
            <div class="col-md-12" id="card-box">
                <div class="card" id="card-food0">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <span>Calorias: <span class="totalCalorias" id="totalCalorias0">0</span></span>
                            </div>
                            <div class="col-md-2">
                                <span>Carboidratos: <span class="totalCarboidratos" id="totalCarboidratos0">0</span></span>
                            </div>
                            <div class="col-md-2">
                                <span>Proteínas: <span class="totalProteinas" id="totalProteinas0">0</span></span>
                            </div>
                            <div class="col-md-2">
                                <span>Gorduras: <span class="totalGorduras" id="totalGorduras0">0</span></span>
                            </div>
                        </div>    
                    </div>
                    <div class="card-body">
                        <div class="food-group" id="food-group0">
                            <div class="button-food">
                                <button class="btn btn-primary mt-1" onclick="addAlimento(0, 0)">Adicionar alimento</button>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <span>Alimento</span>
                                    <select class="form-control" id="selectAlimento0_0" onchange="foodSelect(0, 0)">
                                        <option value=""></option>
                                        @foreach($alimento as $a)
                                            <option value="{{$a->id}}">{{$a->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <span>Porção</span>
                                    <input type="text" class="form-control" oninput="calculateCalories(0)" id="porcaoInput0_0"/>
                                </div>
                                <div class="col-md-2">
                                    <span>Calorias</span>
                                    <input type="text" class="form-control" id="calorieInput0_0"/>
                                </div>
                                <div class="col-md-2">
                                    <span>Carboidratos</span>
                                    <input type="text" class="form-control" id="carboidratoInput0_0"/>
                                </div> 
                                <div class="col-md-2">
                                    <span>Proteinas</span>
                                    <input type="text" class="form-control" id="proteinaInput0_0"/>
                                </div> 
                                <div class="col-md-2">
                                    <span>Gorduras</span>
                                    <input type="text" class="form-control" id="gorduraInput0_0"/>
                                </div>      
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">    
            <div class="col-md-12">
                  
                <div class="card">

                    <button class="btn btn-primary" id="addCard">Adicionar nova refeição</button>

                </div>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            
    
    <script>
        var contador_ref = 0;
        var contador_alimento = 0;

        $('#addCard').click(function() {
            contador_alimento = 0;
            contador_ref++;

            var cardHtml = '<div class="card mt-3">' +
                '<div class="card-header">'+
                    '<div class="row">'+
                        '<div class="col-md-4">'+
                            `<input type="text" class="form-control" id="refeicao${contador_ref}">`+
                        '</div>'+
                        '<div class="col-md-2">'+
                            `<span>Calorias: <span class="totalCalorias" id="totalCalorias${contador_ref}">0</span></span>`+
                        '</div>'+
                        '<div class="col-md-2">'+
                            `<span>Carboidratos: <span class="totalCarboidratos" id="totalCarboidratos${contador_ref}">0</span></span>`+
                        '</div>'+
                        '<div class="col-md-2">'+
                            `<span>Proteínas: <span class="totalProteinas" id="totalProteinas${contador_ref}">0</span></span>`+
                        '</div>'+
                        '<div class="col-md-2">'+
                            `<span>Gorduras: <span class="totalGorduras" id="totalGorduras${contador_ref}">0</span></span>`+
                        '</div>'+
                    '</div>'+
                '</div>'+   
                '<div class="card-body">' +
                    `<div class="button-food">` + 
                        `<button class="btn btn-primary mt-1" onclick="addAlimento(${contador_ref})">Adicionar alimento</button>`+
                    '</div>'+
                    `<div class="food-group" id="food-group${contador_ref}">` +            
                        '<div class="row">' + 
                            '<div class="col-md-3">'+
                                '<span>Alimento</span>' +
                                `<select class="form-control" id="selectAlimento${contador_ref}_${contador_alimento}" onchange="foodSelect(${contador_ref}, ${contador_alimento})" placeholder="Selecione o alimento">` +
                                    '<option value=""></option>' +
                                    '@foreach($alimento as $a)' + 
                                        '<option value="{{$a->id}}">{{$a->nome}}</option>' +
                                    '@endforeach' +
                                '</select>' +
                            '</div>' +
                            '<div class="col-md-1">'+
                                '<span>Porção</span>'+
                                `<input type="text" class="form-control" oninput="calculateCalories(${contador_ref})" id="porcaoInput${contador_ref}_${contador_alimento}"/>`+
                            '</div>'+
                            '<div class="col-md-2">' +
                                '<span>Calorias</span>' +
                                `<input type="text" class="form-control" id="calorieInput${contador_ref}_${contador_alimento}"/>`+
                            '</div>' +
                            '<div class="col-md-2">' +
                                '<span>Carboidratos</span>'+
                                `<input type="text" class="form-control" id="carboidratoInput${contador_ref}_${contador_alimento}"/>`+
                            '</div>' +
                            '<div class="col-md-2">' +
                                '<span>Proteinas</span>' +
                                `<input type="text" class="form-control" id="proteinaInput${contador_ref}_${contador_alimento}"/>`+
                            '</div>' +
                            '<div class="col-md-2">' +
                                '<span>Gorduras</span>' +
                                `<input type="text" class="form-control" id="gorduraInput${contador_ref}_${contador_alimento}"/>`+
                            '</div>' +
                        '</div>'+
                    '</div>'+    
                '</div>' +
            '</div>';

            $(`#card-box`).append(cardHtml);
        });

    function addAlimento(cr)
    {
        contador_alimento++;

        var newGroup = '<div class="row">' + 
            '<div class="col-md-3">'+
                '<span>Alimento</span>'+
                `<select class="form-control" id="selectAlimento${cr}_${contador_alimento}" onchange="foodSelect(${cr}, ${contador_alimento})" placeholder="Selecione o alimento">`+
                    '<option value=""></option>' +
                    '@foreach($alimento as $a)'+
                        '<option value="{{$a->id}}">{{$a->nome}}</option>'+
                    '@endforeach'+
                '</select>'+
            '</div>'+
            '<div class="col-md-1">'+
                '<span>Porção</span>'+
                `<input type="text" class="form-control" oninput="calculateCalories(${cr}, ${contador_alimento})" id="porcaoInput${cr}_${contador_alimento}"/>`+
            '</div>'+
            '<div class="col-md-2">'+
                '<span>Calorias</span>'+
                `<input type="text" class="form-control" id="calorieInput${cr}_${contador_alimento}"/>`+
            '</div>'+
            '<div class="col-md-2">'+
                '<span>Carboidratos</span>'+
                `<input type="text" class="form-control" id="carboidratoInput${cr}_${contador_alimento}"/>`+
            '</div>'+
            '<div class="col-md-2">'+
                '<span>Proteinas</span>'+
                `<input type="text" class="form-control" id="proteinaInput${cr}_${contador_alimento}"/>`+
            '</div>'+
            '<div class="col-md-2">'+
                '<span>Gorduras</span>'+
                `<input type="text" class="form-control" id="gorduraInput${cr}_${contador_alimento}"/>`+
            '</div>'+
        '</div>';

        $(`#food-group${cr}`).last().append(newGroup);
    }

    function foodSelect(id_ref, id_alimento){ 
        var foodId = $(`#selectAlimento${id_ref}_${id_alimento}`).val();
        
        var porcao = $(`#food-group${id_ref}`).find(`#porcaoInput${id_ref}_${id_alimento}`);
        var calorias = $(`#food-group${id_ref}`).find(`#calorieInput${id_ref}_${id_alimento}`);
        var carboidratos = $(`#food-group${id_ref}`).find(`#carboidratoInput${id_ref}_${id_alimento}`);
        var proteinas = $(`#food-group${id_ref}`).find(`#proteinaInput${id_ref}_${id_alimento}`);
        var gorduras = $(`#food-group${id_ref}`).find(`#gorduraInput${id_ref}_${id_alimento}`);
        
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
                   
                    $(`#porcaoInput${id_ref}_${id_alimento}`).val(defaultPorcao);
                    $(`#calorieInput${id_ref}_${id_alimento}`).val(defaultCalorias);     
                    $(`#carboidratoInput${id_ref}_${id_alimento}`).val(defaultCarboidratos);   
                    $(`#proteinaInput${id_ref}_${id_alimento}`).val(defaultProteinas);   
                    $(`#gorduraInput${id_ref}_${id_alimento}`).val(defaultGorduras);
                    totalRefeicao(id_ref, id_alimento);
                    
    
                },
                error: function(error) {
                    console.error("Erro ao buscar as calorias:", error);
                }
            });
        } else {
            $(`#porcaoInput${id_ref}_${id_alimento}`).val('');
            $(`#calorieInput${id_ref}_${id_alimento}`).val('');     
            $(`#carboidratoInput${id_ref}_${id_alimento}`).val('');   
            $(`#proteinaInput${id_ref}_${id_alimento}`).val('');   
            $(`#gorduraInput${id_ref}_${id_alimento}`).val('');

        }
    }

    function calculateCalories(id_ref, id_alimento){

        let novaPorcao = $(`#porcaoInput${id_ref}_${id_alimento}`).val();
        let porcao = novaPorcao / defaultPorcao; 
                            
        $(`#calorieInput${id_ref}_${id_alimento}`).val(parseFloat(defaultCalorias * porcao).toFixed(2));
        $(`#carboidratoInput${id_ref}_${id_alimento}`).val(parseFloat(defaultCarboidratos * porcao).toFixed(2));
        $(`#proteinaInput${id_ref}_${id_alimento}`).val(parseFloat(defaultProteinas * porcao).toFixed(2));
        $(`#gorduraInput${id_ref}_${id_alimento}`).val(parseFloat(defaultGorduras * porcao).toFixed(2));
        
        totalRefeicao(id_ref, id_alimento);
        
    }

    function getTotalDieta() {
        let totalCalories = 0;
        let totalCarboidratos = 0;
        let totalProteinas = 0;
        let totalGorduras = 0;

        $(".form-control[id^='calorieInput']").each(function() {
            totalCalories += parseFloat($(this).val()) || 0;
        });

        $(".form-control[id^='carboidratoInput']").each(function() {
            totalCarboidratos += parseFloat($(this).val()) || 0;
        });

        $(".form-control[id^='proteinaInput']").each(function() {
            totalProteinas += parseFloat($(this).val()) || 0;
        });

        $(".form-control[id^='gorduraInput']").each(function() {
            totalGorduras += parseFloat($(this).val()) || 0;
        });

        $(".totalCalorias").text(totalCalories.toFixed(2));
        $(".totalCarboidratos").text(totalCarboidratos.toFixed(2));
        $(".totalProteinas").text(totalProteinas.toFixed(2));
        $(".totalGorduras").text(totalGorduras.toFixed(2));
    }

    function totalRefeicao(id_ref, id_alimento) {
        let totalCalories = 0;
        let totalCarboidratos = 0;
        let totalProteinas = 0;
        let totalGorduras = 0;
        
        for(let i = 0 ; i != 999 ; i++)
        {
            console.log($(`#calorieInput${id_ref}_${i}`).val())
            console.log(i)

            if($(`#gorduraInput${id_ref}_${i}`).val() === undefined)
            {
                $(`#totalCalorias${id_ref}`).text(totalCalories.toFixed(2));
                $(`#totalCarboidratos${id_ref}`).text(totalCarboidratos.toFixed(2));
                $(`#totalProteinas${id_ref}`).text(totalProteinas.toFixed(2));
                $(`#totalGorduras${id_ref}`).text(totalGorduras.toFixed(2));

                return;
            }

            totalCalories     += parseFloat($(`#calorieInput${id_ref}_${i}`).val());
            totalCarboidratos += parseFloat($(`#carboidratoInput${id_ref}_${i}`).val());
            totalProteinas    += parseFloat($(`#proteinaInput${id_ref}_${i}`).val());
            totalGorduras     += parseFloat($(`#gorduraInput${id_ref}_${i}`).val());
        }
    }



    </script>

    <style>




    </style>    

  </body>
</html> 
