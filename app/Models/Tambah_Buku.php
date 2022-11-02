<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambah_buku extends Model
{
    use HasFactory;
    protected $table = 'buku_online';
    protected $guarded = ['id'];
}
