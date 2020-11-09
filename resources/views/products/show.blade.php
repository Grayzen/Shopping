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

  <div class="w-75 ml-2 mr-2 mt-5">

        <div class="card mb-4">
          <img src="https://picsum.photos/id/{{ $product->id }}/300/200">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">Some quick example text to build</p>
            <a class="btn btn-sm btn-secondary" href="{{ url('products', $product->id)}}">${{ $product->price }}</a>
          </div>
        </div>

  </div>


@endsection


@section('footer')

    @include('layouts.footer')

@endsection
