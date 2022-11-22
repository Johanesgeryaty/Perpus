<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuOffline extends Model
{
    use HasFactory;
    protected $table = 'bukuoffline';
    protected $guarded = ['id'];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
