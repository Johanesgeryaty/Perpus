<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function buku_online(){
        return $this->hasMany(BukuOnline::class);
    }
    
    public function bukuoffline(){
        return $this->hasMany(BukuOffline::class);
    }

}
