@extends('layouts.app')


@section('title', 'Base')

@section('style')

@endsection

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
      <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
        <div class="card mb-4">
          <img src="https://picsum.photos/id/{{ $value->id }}/300/200" class="" alt="{{ $value->id }}">
          <div class="card-body">
            <h5 class="card-title">{{ $value->name }}</h5>
            <p class="card-text">Some quick example text to build</p>
            ${{ $value->price }}  <br><br>
            <a class="nav-link btn btn-sm btn-dark mb-1" href="{{ url('products', $value->id)}}">See Product</a>
            <a class="nav-link btn-sm btn-info" href="{{ url('products', $value->id)}}">Add to Cart</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>


@endsection


@section('footer')

    @include('layouts.footer')

@endsection
