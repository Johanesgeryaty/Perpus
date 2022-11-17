<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profil</title>
    <link rel="stylesheet" href="/cssuser/bootstrap.min.css">
    <link rel="stylesheet" href="/cssuser/all.min.css">
  </head>
  <body>
    <div class="container">
        <h3 class="text-center mt-5">Edit Profil</h3>
    <form method="post" action="/user/editprofil">
      @method('put')
      @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required autofocus value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">No. Whatsapp</label>
            <input type="text" class="form-control" id="kelas">
          </div>
        <div class="mb-3">
            <label for="Adress" class="form-label">Tempat, Tanggal Lahir</label>
            <input type="text" class="form-control" id="Adress">
        </div>
        <div class="mb-3">
            <label for="User" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="User">
        </div>
        <button type="submit" class="btn btn-primary float-end mb-5">Kirim</button>
      </form>

    </div>
    <script src="jsuser/bootstrap.min.js"></script>
    <script src="jsuser/all.min.js"></script>
  </body>
</html>