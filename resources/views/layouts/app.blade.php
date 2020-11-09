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

        <style media="screen">

            .asd{
              width: 50vw;
              justify-content: center;
            }

            @media screen and (max-width: 750px) {
              .w-25 {
                display: none;
              }
              .asd{
                justify-content: center;
                width: 100vw;
                display: flex;
              }
            }

        </style>

        @yield('style')


    </head>
      <body class="d-flex flex-column h-100" data-new-gr-c-s-check-loaded="14.983.0">

        <div class="text-center h-25">
          @yield('navbar')
        </div>

        <main class="row text-center flex-shrink-0 h-75 mb-5">

          <div class="w-25 bg-dark text-white pt-5">
            @section('sidebar')
              Products
            @show
          </div>

          <div class="asd text-center d-flex">
            @yield('content')
          </div>

          <div class="w-25 bg-dark pt-5 text-info">
            Opportunity Products

            @foreach ($opportunity as $key => $value)
              @if($value->price < 15)
                <div class="pt-5">
                  <div class="card mb-4">
                    <img src="https://picsum.photos/id/{{ $value->id }}/300/200" class="" alt="{{ $value->id }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $value->name }}</h5>
                      <p class="card-text">Some quick example text to build</p>
                      ${{ $value->price }}  <br><br>
                      <a class="btn btn-sm btn-dark" href="{{ url('products', $value->id)}}">See Product</a>
                      <a class="btn btn-sm btn-info" href="{{ url('products', $value->id)}}">Add to Cart</a>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach

          </div>

        </main>

        <div class="text-center mt-5">
          @yield('footer')
        </div>


    </body>
</html>
