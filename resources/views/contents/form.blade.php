@extends('layouts.master')

@section('content')
  <div class="ml-2 mt-2">
  <a href="{{route('artikel.index')}}" class="btn btn-dark" style="text-white;"> Back </a>
  </div>
  <div class="ml-2">	
	<form action="{{route('artikel.store')}}" method='post'>
	  @csrf
		<div class="form-group">
		  <label for="judul">Judul</label>
			<input type="text" name="judul" placeholder="Title" class="form-control" value="{{old('judul')}}">
		</div>
		@error('judul')
		    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
		<div class="form-group">
		  <label for="isi">Isi</label>
			<textarea cols="100" rows="6" placeholder="Isi disini" class="form-control" name="isi">{{old('isi')}}</textarea>
		</div>
		@error('isi')
		    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
		<div class="form-group">
			<label for="tag"></label>
			<input type="text" name="tag" placeholder="Pilih Tag" class="form-control" value="{{old('tag')}}">
		</div>
		<input type="submit" value="Submit">
	</form>
  </div>
@endsection
