@extends('layouts.app')

@section('content')


<form action="{{ route('user.saran') }}" method="POST">
    <label for="sarans">Saran:</label>
    <input type="text" name="sarans">
    <button>Kirim</button>
</form>

@endsection