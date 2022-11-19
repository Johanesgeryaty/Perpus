@extends('layouts.app')

<style>
  .button {
    border-radius: 4px;
    background-color:#337ab7;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button span:after {
    content: '\21b2';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.8s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  </style>

@section('content')
  
  @foreach ($bukuonline as $buku)
<li class="col-md-3" style="list-style: none; text-align:center;"  >
    <div class="container" >
      <div class="card" >
          <figure>
            <a href="/detailbuku"> 
              <img src="/images/{{ $buku->cover_buku }}" alt="bukuoffline" style="width: 150px;height:210px">
            </a>
            <h3 style="margin: 1px ;">{{ $buku->judul_buku }}</h3>
          </figure>
          {{-- <button href="#" class="btn btn-primary" style="margin-bottom:20px;">Detail Buku</button> --}}
          <button href="" class="button btn-sm mb-2"><span>Detail Buku </span></button>
      </div>
    </div>
  </li>
  @endforeach

  
@endsection