@extends('layouts.master')

@section('content')
	<div class="ml-2 mt-2 d-flex justify-content-between">
      <a href="{{route('home')}}" class="btn btn-dark" style="text-white">Back</a>
      <a href="{{route('artikel.create')}}" class="btn btn-dark" style="text-white;">Buat Artikel</a>
    </div>  
      @foreach($artikels as $key => $artikel)
        <div class="card ml-2 mt-2">
          <div class="card-body">
            <h2 class="card-title"><b>{{ucfirst($artikel->judul)}}</b></h2>
            <p class="card-text">{{$artikel->isi}}</p>
            <form action="{{route('artikel.delete', ['id'=> $artikel])}}" method='post'>
            @csrf
            <a href="{{route('artikel.show', ['id'=>$artikel])}}" class="card-link btn btn-light">Lihat Detail</a>
            <a href="{{route('artikel.edit', ['id'=>$artikel])}}" class="card-link btn btn-light">Edit</a>
            @method('delete')
            <button type="submit" class="card-link btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Delete</button>
           </form>
          </div>
        </div>
      @endforeach
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
