<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Dichiarazione della variabile title che sará richiamata con x-slot nei componenti --}}
    <title>{{ $title ?? '' }}</title>

    {{-- Richiamo dei file App.css e App.js con Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="container">
        <div class="row">
            {{ $slot }}
        </div>
    </section>
</body>

</html>
