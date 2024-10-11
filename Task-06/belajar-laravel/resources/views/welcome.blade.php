<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Selamat Datang</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #1b1b1b;
            color: #ffffff;
        }

        h1 {
            color: #c70039;
        }

        a {
            color: #9d0b35e8;
            text-decoration: none;
        }

        a:hover {
            color: #ff4d4d;
        }

        .btn-custom {
            background-color: #9d0b35e8;
            border-color: #9d0b35e8;
            color: white;
        }

        .btn-custom:hover {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
        }

        /* General layout */
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="container text-center">
        <h1>Selamat Datang di Buku Tamu</h1>
        <div class="mt-4">
            <a href="{{ route('bukutamu.create') }}" class="btn btn-custom">Isi Buku Tamu</a>
            <a href="{{ route('bukutamu.show') }}" class="btn btn-custom ms-2">Lihat Komentar</a>
        </div>
    </div>
</body>
</html>
