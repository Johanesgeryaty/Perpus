
   @extends('layouts.user')

   @section('content')

       <div class="container">
        <label  style="padding-top: 10px;">Nama Lengkap</label>
        <div style="background-color: #e3e3e3; border-radius:10px ; text-align: center; width:100%; padding:10px;">{{ Auth::User()->name }}</div>
        <label  style="padding-top: 10px;">Kelas</label>
        <div style="background-color: #e3e3e3; border-radius:10px ; text-align: center; width:100%; padding:10px;">{{ Auth::User()->kelas }} {{ Auth::User()->jurusan }}</div>
        <label style="padding-top: 10px;">Email</label>
        <div style="background-color: #e3e3e3; border-radius:10px ; text-align: center; width:100%; padding:10px;">@if (Auth::User()->email == null)
          <strong> Data Ini Belum Diisi, Harap Lengkapi Data!</strong>
           @else
           {{ Auth::User()->email }}
         @endif</div>
         <label style="padding-top: 10px;">No. Whatsapp</label>
        <div style="background-color: #e3e3e3; border-radius:10px ; text-align: center; width:100%; padding:10px;">@if (Auth::User()->no_hp == null)
         <strong> Data Ini Belum Diisi, Harap Lengkapi Data!</strong>
          @else
          {{ Auth::User()->no_hp }}
        @endif
        </div>
        <label  style="padding-top: 10px;">Tanggal Lahir</label>
        <div style="background-color: #e3e3e3; border-radius:10px ; text-align: center; width:100%; padding:10px;">@if (Auth::User()->tanggal_lahir == null)
         <strong> Data Ini Belum Diisi, Harap Lengkapi Data!</strong>
          @else
          {{ Auth::User()->tanggal_lahir }}
        @endif</div>
        <label  style="padding-top: 10px;">Alamat</label>
        <div style="background-color: #e3e3e3
        ; border-radius:10px ; text-align: center; width:100%; padding:10px;">@if (Auth::User()->alamat == null)
          <strong class=""> Data Ini Belum Diisi, Harap Lengkapi Data!</strong>
           @else
           {{ Auth::User()->alamat }}
         @endif</div>
        <a class="btn btn-primary" style="margin-top: 20px; float:right; border-radius: 5px;" href="{{ route('user.editprofil', Auth::user()->id) }}" role="button">Edit Profil</a>
      </div>
@endsection
