@extends('layout/main')

@section('judul', 'Car')

@section('container')

        @foreach($mobil as $mobil)
        <div class="row">
        <div class="col-md-3" style="width: auto"> 
        <div class="card" class="col-md-4">
            <img src="{{ url('image') }}/{{ $mobil->gambar }}"class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $mobil->merk }}</h5>
                <p class="card-text">
                <strong>{{$mobil-> no_mobil}}</strong> <br>
                <strong>Rp. {{ number_format($mobil-> harga)}}</strong> <br>
                <span class="label label-<?=(['{{$mobil-> status}}']) ? "success" : "danger" ?>"><?=(['{{$mobil-> status}}']) ? "Tersedia" : "Tidak Tersedia" ?></span>
                </p>
                <a href="#" class="btn btn-primary">Sewa</a>
  </div>
</div>
</div>
@endforeach
</div>
</div>

@endsection

