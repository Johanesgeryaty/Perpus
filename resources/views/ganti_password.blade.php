<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card{
            margin: 0 auto; 
        float: none; 
        margin-bottom: 48px; 
        margin-top: 13%;
        width: 30%;
        height: 9cm;
        border-radius: 10px;
        }

        .tombol {
            margin-top: 120px;
            position: absolute;
        }

        .card-body {
            border-radius: 10px;
        }
    </style>
</head>
<body class="btn-primary">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    <div class="card-header ">Ganti Password</div>
    
                    <div class="card-body">
                        <form method="POST" action="    ">
                            <div class="row mb-3">
                                <label for="email" class="col-md-5 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-5 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="">
                                <div class="col-md-12 offset-md-4">
                                    <button type="submit" class="btn btn-primary tombol">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


