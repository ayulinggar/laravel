<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    protected $table = 'week1';
    protected $fillable = [
        'id', 'media', 'media_type','baby_name', 'tanggal', 'bulan', 'tahun', 'first_name', 'last_name', 'email', 'phone1', 'phone2', 
    ];
}
