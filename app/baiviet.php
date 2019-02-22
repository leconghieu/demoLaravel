<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    protected $table = 'baiviet';
    public $timestamps = false;
    public $fillable = ['tieude', 'noidung', 'maloai'];
}
