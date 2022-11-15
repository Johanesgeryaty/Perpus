<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php

$kategori = 1;

?>
<div class="modal fade show " id="modal-default" style="display: block; padding-right: 17px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Buku</h4>
                <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input wire:model="judul" type="text" class="form-control" id="judul">
                    @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input wire:model="penulis" type="text" class="form-control" id="penulis">
                            @error('penulis') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input wire:model="stok" type="number" class="form-control" id="stok" min="1">
                            @error('stok') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sampul">Sampul</label>
                    @if (true)
                    Preview:
                    <img src="">
                    @endif
                    <input wire:model="sampul" type="file" class="form-control" id="sampul" min="1">
                    @error('sampul') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select wire:model="kategori_id" wire:click="pilihKategori" class="form-control" id="kategori">
                                <option selected value="">Pilih Kategori</option>
                                ($kategori as $item)
                                <option value=""></option>
                               
                            </select>
                            @error('kategori_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <select wire:model="penerbit_id" class="form-control" id="penerbit">
                                <option selected value="">Pilih Penerbit</option>
                                ($penerbit as $item)
                                <option value=""></option>
                               
                            </select>
                            @error('penerbit_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="form-group">
                            <label for="rak">Rak</label>
                            <select wire:model="rak_id" class="form-control" id="rak">
                                <option selected value="">Pilih Rak</option>
                                @isset($rak)
                                ($rak as $item)
                                <option value="">Rak : , Baris : </option>
                               
                                @endisset
                            </select>
                            @error('rak_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                <span type="button" wire:click="store" class="btn btn-success">Simpan</span>
            </div>
        </div>
    </div>
</div>

</body>
</html>

