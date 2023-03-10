<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.css',
           ])
        
    </head>
    <body class="antialiased">
    <div class="card" style="width: 18rem;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuAAIPIr0A0k0XWUStwi3Wz1vIWnY9MY3ETw&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><b>FELICIDADE</b></h5>
        <p class="card-text">Ser feliz é legal</p>
        <a href="https://www.youtube.com/watch?v=6SW9s8QqneA" class="btn btn-outline-warning">clique aki para ser feliz</a>
    </div>
</div>
    </body>
</html>
