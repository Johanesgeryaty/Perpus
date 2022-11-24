@extends('layouts.user')


@section('content')

<div class="row">
  @foreach ($bukuonline as $buku)
  <div class="col-sm-6 col-md-3" style="margin-bottom: 10px;">
      <div class="card">
          <img src="/images/{{ $buku->cover_buku }}" alt="">
          <div class="card-body">
              <h3>{{ $buku->judul_buku }}</h3>
              <a href="{{ route('user.bukuonline.show', $buku->id) }}" class="btn btn-primary">Detail</a>
          </div>
      </div>
  </div>
  @endforeach
@endsection
