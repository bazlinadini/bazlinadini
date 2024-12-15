<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan | SIMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../golongan/index">Golongan</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../pelanggan/index">Pelanggan</a>
            </li>
  
            <li class="nav-item">
                <a class="nav-link" href="../users/index">Users</a>
            </li>
        </ul>
        
        <table class="table table-striped table-hover col-sm-12">
                <h4>Tabel Data Pelanggan</h4>
                <thead>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>HandPhone</td>
                    <td>Golongan</td>
                    <td>Aksi</td>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>Bazlina Dini Amanda</td>
                    <td>Kesatuan, Kec. Perbaungan</td>
                    <td>0838-6724-8591</td>
                    <td>Pimpinan</td>
                    <td>Delete</td>
                </tbody>
                <tbody>
                    <td>2</td>
                    <td>Raihan Maulana Irsyad</td>
                    <td>Batang Terap, Kec. Perbaungan</td>
                    <td>0822-7515-7653</td>
                    <td>Pimpinan</td>
                    <td>Delete</td>
                </tbody>
        </table>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>
