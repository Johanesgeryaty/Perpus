<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        * {
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card mt-3  text-bg-primary" style="width: auto;">
            <div class="card-body">
                <h3 class="card-title mt-3 fw-bold">Peraturan Pinjam Buku</h3>
                <ul class="mt-4">
                    <h5>1. Dilarang memasukan data palsu</h5>
                    <h5>2. Mengembalikan dengan tepat waktu</h5>
                    <h5>3. Tidak menyebarkan file buku</h5>
                    <h5>4. Membayar <span class="fw-bold">Denda</span> Jika telat Mengembalikan</h5>
                    <h5>5. Jika buku hilang, peminjam wajib untuk <span class="fw-bold">Mengganti</span> buku yang
                        dihilangkan</h5>
                </ul>
                <ul class="list-group">
                    <li class="list">
                        <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckboxStretched">
                        <label class="form-check-label stretched-link" for="firstCheckboxStretched">Saya menyetujui dan
                            mengikuti peraturan yang berlaku</label>
                    </li>
                </ul>
            </div>
            <div class="container">
                <h3 class="card-title mt-3 fw-bold">Formulir Pinjam Buku</h3>
                <ul>
                    <li>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Jangka Waktu</option>
                            <option value="1">1 Hari</option>
                            <option value="2">2 Hari</option>
                            <option value="3">3 Hari</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>
