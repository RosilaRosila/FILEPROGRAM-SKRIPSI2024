<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataWisata extends Model
{
    use HasFactory;

    protected $table = 'data_wisatas';
    protected $primarykey = 'id';
    // protected $fillable = ['title', 'alamat', 'excerpt', 'body'];

    public $incrementing = false;
    public $timestamps = true;
}
