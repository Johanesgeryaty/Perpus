<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Waca</title>
       <link rel="stylesheet" href="style.css">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 100px;">
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                                @if(session()->has('pesan'))
                            <div class="alert alert-info">
                              {{ session('pesan') }}
                            </div>
                                 @endif

                            <h4 class="mt-3 text-center">Login</h4>
                            @if(session('Error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{session('Error')}}
                            </div>
                            @endif
                            <form action="{{ route('login.post') }}" class="mt-4" method="post">
                            @csrf
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">Masukan NIS</label>
                                    <input type="number" class="form-control" name="nisn" id="nisn">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Masukan Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary w-100 mt-4">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
