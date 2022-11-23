@extends('layouts.main')

@section('content')
<div>
    <form action="{{route('admin.tatatertib.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
              <textarea name="isi" id="isi" cols="30" rows="10" class="ckeditor form-control"></textarea>
        </div>
        <button type="submit">kirim</button>
    </form>
</div>

@endsection
