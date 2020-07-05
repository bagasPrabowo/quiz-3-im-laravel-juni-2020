@extends('layouts.master')

@section('content')
<div>
	<a href="{{route('artikel.index')}}" class="btn btn-dark mb-2" style="text-white;">Lihat Artikel</a>
</div>

<div class="container">
<img src="{{asset ('/Images/Artikel.png')}}" style="width: 100%;">
</div>

@endsection