
   @extends('layouts.app')

   @section('content')
       
       <div class="container">
        <label  style="padding-top: 10px;">Nama Lengkap</label>
        <div style="background-color: #A6A6A6; border-radius:10px ; text-align: center; width:100%; padding:10px;">{{ Auth::User()->name }}</div>
        <label  style="padding-top: 10px;">Kelas</label>
        <div style="background-color: #A6A6A6; border-radius:10px ; text-align: center; width:100%; padding:10px;">{{ Auth::User()->kelas }} {{ Auth::User()->jurusan }}</div> 
        <label  style="padding-top: 10px;">Tempat,  Tanggal Lahir</label>
        <div style="background-color: #A6A6A6; border-radius:10px ; text-align: center; width:100%; padding:10px;">Tangerang, 30 Februari 2006</div> 
        <label  style="padding-top: 10px;">Alamat</label>
        <div style="background-color: #A6A6A6; border-radius:10px ; text-align: center; width:100%; padding:10px;">Tangerang, Banten</div> 
        <label style="padding-top: 10px;">No. Whatsapp</label>
        <div style="background-color: #A6A6A6; border-radius:10px ; text-align: center; width:100%; padding:10px;">085899876657</div> 
        <label style="padding-top: 10px;">Email</label>
        <div style="background-color: #A6A6A6; border-radius:10px ; text-align: center; width:100%; padding:10px;">{{ Auth::User()->email }}</div> 
        <a class="btn btn-primary" style="margin-top: 20px; float:right; border-radius: 5px;" href="#" role="button">Edit Profil</a>
      </div>
@endsection
