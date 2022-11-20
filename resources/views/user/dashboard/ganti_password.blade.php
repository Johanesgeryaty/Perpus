@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center"><h3><strong>Ganti Password</strong></h3></div>

                    <form action="{{ route('user.updatepassword') }}" method="POST" >
                        @csrf
                            <div class="mb-5">
                                <label for="oldPasswordInput" class="form-label">Password Lama</label>
                                <input name="old_password" type="password" class="form-control"
                                    placeholder="Masukkan Password Anda Yang Lama">
                            </div>
                            <div class="mb-5">
                                <label for="newPasswordInput" class="form-label " style="padding-top:20px;" >Password Baru</label>
                                <input name="new_password" type="password" class="form-control"
                                    placeholder="Masukkan Password Anda Yang Baru">
                            </div>
                            <div class="mb-5">
                                <label for="confirmNewPasswordInput" class="form-label" style="padding-top:20px;">Konfirmasi Password Baru</label>
                                <input name="new_password_confirmation" type="password" class="form-control"
                                    placeholder="Verifikasi Password Anda Yang Baru">
                            </div>

                        </div>
                        <br>
                        <div class="text-center " >
                            <button class="btn btn-success " >Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
