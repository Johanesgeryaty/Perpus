<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuOnline extends Model
{
    use HasFactory;
    protected $table = 'buku_online';
    protected $guarded = ['id'];
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
