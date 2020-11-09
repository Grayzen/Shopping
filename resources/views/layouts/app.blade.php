<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    </head>
      <body class="d-flex flex-column h-100" data-new-gr-c-s-check-loaded="14.983.0">

        <div class="text-center h-25">
          @yield('navbar')
        </div>

        <main class="row text-center flex-shrink-0 h-75 mb-5">

          <div class="w-25 bg-dark">
            @section('sidebar')
              Products
            @show
          </div>

          <div class="w-50">
            @yield('content')
          </div>

          <div class="w-25 bg-dark">
            Fırsats of day
          </div>

        </main>

        <div class="text-center mt-5">
          @yield('footer')
        </div>


    </body>
</html>
