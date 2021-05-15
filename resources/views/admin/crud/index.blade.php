@extends('layouts.web')

@section('judul', 'Car')
<style>
#b{
      font-size:50px;
      font-family: 'serif';
    }
</style>
@section('content')
<h1 id="b"><img src="https://img.icons8.com/ios-glyphs/100/000000/car.png"/>&#160;Car</h1>
<hr />
<a href="/crud/create" class="btn btn-primary">Tambah Mobil</a>   
@csrf
@include('inc.messages')

@if(count($mobil) > 0)
        @foreach($mobil as $Mobil)
        <div class="col">
        <div class="card">
        <div class="card-body text-center">
        <img src="{{asset($Mobil->gambar)}}" class="img-fluid">
        </div>
        <div class="row mt-2">
            <div class="card-body">
            <center>
                <h5 class="card-title">{{ $Mobil->merk }}</h5>
                <p class="card-text">
                <strong>{{$Mobil-> no_mobil}}</strong> <br>
                <strong>Rp. {{ number_format($Mobil-> harga)}}</strong> <br>
                <strong>{{$Mobil-> status}}</strong> <br>
                </p>
                <a href="crud/{{ $Mobil->id_mobil }}/edit" class="btn btn-primary">Edit</a>   
                <a href="{{ route('crud.destroy',$Mobil->id_mobil) }}" class="btn btn-primary">Hapus</a>   
            </center>
  </div> 

  </div>
  </div>
</div>
</section>
</div><br>
@endforeach
{{ $Mobil->paginate(5)->links('pagination::bootstrap-4') }}
</div>
@else
<div class="row">
    <h5 class="text-center">
        Mobil Tidak Tersedia
    </h5>
</div>
@endif
</div>
</div>
@endsection
