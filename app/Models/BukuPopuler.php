<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuPopuler extends Model
{
    use HasFactory;

    protected $table = 'buku_populer';

    protected $guarded = [];

    public function buku_online()
    {
        return $this->belongsTo(BukuOnline::class);
    }
}
