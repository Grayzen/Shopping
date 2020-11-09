@extends('layouts.app')


@section('title', 'Base')


@section('navbar')

  @include('layouts.navbar')

@endsection


@section('sidebar')

    @parent

    <div class="m-5">
      <a class="nav-link" href="{{ route('types', 'book') }}">Books</a>
      <a class="nav-link" href="{{ route('types', 'electronic') }}">Electronics</a>
      <a class="nav-link" href="{{ route('types', 'furniture') }}">Furnitures</a>
    </div>

@endsection


@section('content')

  <div class="row ml-2 mr-2">
    @foreach ($products as $key => $value)
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="card mb-4">
          <img src="https://picsum.photos/id/{{ $sayi = rand(50, 750) }}/200/200" class="" alt="{{ $sayi }}">
          <div class="card-body">
            <h5 class="card-title">{{ $value->name }}</h5>
            <p class="card-text">Some quick example text to build</p>
            <a class="btn btn-sm btn-secondary" href="{{ url('products', $value->id)}}">${{ $value->price }}</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>


@endsection


@section('footer')

    @include('layouts.footer')

@endsection
