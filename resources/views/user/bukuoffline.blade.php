@extends('layouts.app')

 
@section('content')

  @foreach ($bukuoffline as $buku)
<li class="col-md-3" style="list-style: none; text-align:center;"  >
    <div class="container" >
      <div class="card">
          <figure>
            <a href="/detailbuku">
              <img src="/images/{{ $buku->cover_buku }}" alt="bukuoffline" style="width: 150px;height:210px">
            </a>
            <h3 style="margin: 2px ;">{{ $buku->judul_buku }}</h3>
          </figure>
          {{-- <button href="#" class="btn btn-primary" style="margin-bottom:20px;">Detail Buku</button> --}}
          <button href="" class="button btn-sm"><span>Detail Buku </span></button>
      </div>
    </div>
  </li>
  @endforeach


@endsection
