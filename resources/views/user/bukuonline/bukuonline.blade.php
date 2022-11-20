@extends('layouts.user')


@section('content')

  @foreach ($bukuonline as $buku)
<li class="col-md-6"  >
    <div class="container" >
      <div class="card" >
          <figure>
            <a href="/detailbuku">
              <img src="/images/{{ $buku->cover_buku }}" alt="bukuoffline">
            </a>
            <h3 style="margin: 1px ;">{{ $buku->judul_buku }}</h3>
          </figure>
          {{-- <button href="#" class="btn btn-primary" style="margin-bottom:20px;">Detail Buku</button> --}}
          <button href="" class="button btn-sm"><span>Detail Buku </span></button>
      </div>
    </div>
  </li>
  @endforeach
@endsection
