<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Data</title>
    <link rel="stylesheet" href="{{asset('cssuser/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssuser/all.min.css')}}">
  </head>
  <body>
    <div class="container">
    <h3 class="text-center mt-5 p-2" style="background-color: #55acee; border-radius: 50px;" >Ganti Kata Sandi</h3>
    <form>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kata Sandi Baru</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword2" class="form-label">Konfirmasi Kata Sandi</label>
          <input type="password" class="form-control" id="exampleInputPassword2">
        </div>
      </form>
    </div>
    <div class="container">
        <h3 class="text-center mt-5 p-2" style="background-color: #55acee; border-radius: 50px;">Biodata Anggota</h3>
    <form>
        <div class="mb-3">
            <label for="namalengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="namalengkap">
          </div>
        <div class="mb-3">
          <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
          <input type="text" class="form-control" id="ttl">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas">
          </div>
        <div class="mb-3">
            <label for="Adress" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="Adress">
        </div>
        <div class="mb-3">
            <label for="User" class="form-label">No. Whatsapp Anggota (Aktif)</label>
            <input type="text" class="form-control" id="User">
        </div>
        <div class="mb-3">
            <label for="Parent" class="form-label">Nama Orang Tua</label>
            <input type="text" class="form-control" id="Parent">
        </div>
        <div class="mb-3">
            <label for="wa" class="form-label">No. Whatsapp Orang Tua</label>
            <input type="text" class="form-control" id="wa">
        </div>
        <button type="submit" class="btn btn-primary float-end mb-5">Kirim</button>
      </form>

    </div>
    <script src="/jsuser/bootstrap.min.js"></script>
    <script src="/jsuser/all.min.js"></script>
  </body>
</html>