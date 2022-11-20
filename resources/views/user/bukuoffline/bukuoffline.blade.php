@extends('layouts.user')


@section('content')

<div class="row">
    @foreach ($bukuoffline as $buku)
    <div class="col-sm-6 col-md-3" style="margin-bottom: 20px;">
        <div class="card">
            <img src="/images/{{ $buku->cover_buku }}" alt="">
            <div class="card-body">
                <h3>{{ $buku->judul_buku }}</h3>
                <a href="" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection
