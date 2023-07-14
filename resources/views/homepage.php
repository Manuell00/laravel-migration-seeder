<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Railroads Info</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <!-- Container generico -->
    <div class="container-fluid bg-secondary">

        <!-- Titolo -->
        <h1 class="text-center mb-3 text-dark">Railroads information</h1>

        <!-- Container delle cards -->
        <div class="container bg-secondary p-3 ">
            <div class="row g-3">
                @foreach ($railroads as $rail)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        {{$rail}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



</body>

</html>