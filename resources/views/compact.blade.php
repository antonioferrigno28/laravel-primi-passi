<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- importiamo il componente header --}}
    <x-header />

    {{-- semplice testo per vedere il cambiamento effettivo --}}
    <h1>compact</h1>
    {{-- le info passate con il compact NB la sintassi con la doppia graffa --}}
    <p>{{ $info }}</p>
</body>

</html>
