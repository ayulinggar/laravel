<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cbk extends Model
{
    protected $table = 'week1';
    protected $fillable = [
        'id', 'first_name', 'first_name', 'baby_name', 'tanggal', 'bulan', 'tahun', 'email', 'phone1', 'phone2', 'photo',
    ];
}
