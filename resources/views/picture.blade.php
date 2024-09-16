<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Demo</title>
</head>
<style>
    .bg-custom{
            background-color: #3498db
        }
</style>
<body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-custom">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/item')}}">Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/picture')}}">Picture</a>
            </li>
        </ul>
    </div>
</nav>

    <h1 class="display-1 text-primary text-center mb-4 text-dark">Picture Page</h1>

    <div class="container d-flex justify-content-center align-items-center">
        <img src="https://static.wikia.nocookie.net/kinderverse/images/3/32/Deku.jpg/revision/latest?cb=20211023070411" alt="deku">

    <img src="https://static.wikia.nocookie.net/kinderverse/images/3/32/Deku.jpg/revision/latest?cb=20211023070411" alt="deku2">

    <img src="https://static.wikia.nocookie.net/kinderverse/images/3/32/Deku.jpg/revision/latest?cb=20211023070411" alt="deku3">
    </div>
    
    
</body>
</html>