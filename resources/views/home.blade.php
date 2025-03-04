<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJ4QeNfW9E63k5s92Q9A6r4/v0A4kLddV4xLzpR0tD2Gyw6c6v3nNx2E2pfc" crossorigin="anonymous">

    <!-- Bootstrap Bundle (JS + Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0Go5iv4XGdiy8Qx2sorPnntQdS3/k2Rcdl2Nymux9eLR0kD8" crossorigin="anonymous">
    </script>

</head>

<body>
    <x-header />

    <h1>Hello world</h1>
    <p>{{ $saluto }} {{ $nome }}</p>
</body>

</html>
