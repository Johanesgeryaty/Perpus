<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Data</title>
    <link rel="stylesheet" href="{{asset('/cssuser/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/cssuser/all.min.css')}}">
  </head>
  <body>
    <div class="container">
    <h3 class="text-center mt-5 text-white p-1" style="background-color: rgb(1, 49, 125); border-radius:5px;">Ganti Kata Sandi</h3>
    <form>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password Yang Sekarang</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kata Sandi Baru</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword2" class="form-label">Konfirmasi Kata Sandi</label>
          <input type="password" class="form-control" id="exampleInputPassword2">
        </div>
      </form>
      <button type="submit" class="btn btn-primary float-end mb-5">Kirim</button>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
  </body>
</html>
