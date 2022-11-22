@extends('layouts.user')

@section('content')

<iframe src="{{ asset('file_uploads/'. $bukuonline->isi_buku) }}" align="top" height="620" width="100%" frameborder="0" scrolling="auto"></iframe>

@endsection