@extends('layouts.main')

@section('content')
    

        <div class="row">
            <div class="">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $users->name }}
                </div>
            </div>
            <div class="">
                <div class="form-group">
                    <strong>Nisn:</strong>
                    {{ $users->nisn }}
                </div>
            <div class="">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $users->email }}
                </div>
            <div class="">
                <div class="form-group">
                    <strong>Kelas:</strong>
                    {{ $users->kelas }}
                </div>
            <div class="">
                <div class="form-group">
                    <strong>Jurusan:</strong>
                    {{ $users->jurusan }}
                </div>
            <div class="">
                <div class="form-group">
                    <strong>NO. HP:</strong>
                    {{ $users->no_hp }}
                </div>
            <div class="">
                <div class="form-group justify-content-center">
                    <strong>Alamat:</strong>
                    {{ $users->alamat }}
                </div>
            </div>
        </div>
        </form>
      </div>
    </div>
</div>
@endsection