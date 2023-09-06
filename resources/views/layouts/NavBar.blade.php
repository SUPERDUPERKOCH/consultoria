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

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>
    <style>

    </style>
  </head>
  <body>

    <nav id="mySidenav" class="sidenav">
      <a href="/"><i class="fas fa-home"></i> Home</a>
        <div class="item">
         <a class="sub-btn d-flex justify-content-between align-items-center"><span><i class="fas fa-plus"></i> Cadastros</span><i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="{{route('alimentos')}}" class="sub-item">Alimentos</a>
           <a href="{{route('alunos')}}"class="sub-item">Alunos</a>
           <a href="" class="sub-item">Treinos</a>
         </div>
       </div>
      <a href="{{route('planejamentos')}}"><i class="fas fa-clipboard"></i> Planejamentos</a>
    </nav>
    <div id="horizontalBar">
      <nav class="navbar navbar-dark bg-dark" id="navbar">
    
      <a class="navbar-brand ml-1" href="javascript:void(0)" onclick="toggleNav()"><i class="fas fa-bars"></i></a>

      <form class="form-inline my-2 my-lg-0">
        <span class="mr-3" id="session">Gabriel Koch Vidotto</span>
        <button id="btnLogout" class="btn btn-outline-danger my-2 my-sm-0" style="margin-right: 4px"type="button">Sair</button>
      </form>
      
    </div>

  <script>
  function toggleNav() {
    var sidenav = document.getElementById("mySidenav");
    var main = document.getElementById("main");
    var horizontalBar = document.getElementById("horizontalBar")

    if (sidenav.style.width === "250px") {
        sidenav.style.width = "0px";
        main.style.marginLeft = "0px";
        horizontalBar.style.marginLeft = "0px";
    } else {
        sidenav.style.width = "250px";
        main.style.marginLeft = "250px";
        horizontalBar.style.marginLeft = "250px";
    }
  }

  $(".sub-btn").click(function() {
      $(this).siblings(".sub-menu").toggle();  
      $(this).find(".dropdown").toggleClass("rotate"); 
  }); 
  


  </script>
   
  </body>
</html> 
