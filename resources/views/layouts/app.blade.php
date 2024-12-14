<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | SIMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../golongan/index">Golongan</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="../pelanggan/index">Pelanggan</a>
            </li>
  
            <li class="nav-item">
                <a class="nav-link" href="../users/index">Users</a>
            </li>
        </ul>
        
        <div class="card text-bg-dark">
            <img src="{{ asset('storage/pelanggan.jpeg') }}" class="card-img" alt="......">
            <div class="card-img-overlay">
                <h2 class="card-title">Selamat Datang </h2>
                <p class="card-text">Sistem Informasi Manajemen Pelanggan</p>
                <p class="card-text"><small>Bazlina Dini Amanda</small></p>
            </div>
        </div> 
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>
