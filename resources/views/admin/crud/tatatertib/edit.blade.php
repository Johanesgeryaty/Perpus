@extends('layouts.main')

@section('content')
<div>
    <form action="{{route('admin.tatatertib.update', $tatatertib->id )}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
              <textarea name="isi" id="isi" cols="30" rows="10" class="ckeditor form-control">{!! $tatatertib->isi !!}</textarea>
        </div>
        <button type="submit">kirim</button>
    </form>
</div>

@endsection
