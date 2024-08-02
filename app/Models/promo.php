<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    protected $table = "promos";
    protected $fillable = ['preview', 'title', 'information'];
    public $timestamps = false;
}
