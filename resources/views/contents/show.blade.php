@extends('layouts.master')

@section('content')
 <div class="ml-2 mt-2">
  <a href="{{route('artikel.index')}}" class="btn btn-dark" style="text-white"> Back </a>
  </div>
  @if(isset($artikel))
    <div class="card ml-2 mt-2">
      <div class="card-body">
        <h2 class="card-title"><b>{{ucfirst($artikel->judul)}}</b></h2>
        <h4 class="card-title">{{$artikel->slug}}</h4>
        <p class="card-text">{{$artikel->isi}}</p>
        <a href="#" class="btn btn-primary"> {{$artikel->tag}} </a>
        <p class="card-text" style="text-align: right;">{{$artikel->created_at}}</p>
      </div>
    </div>
  @endif
@endsection
