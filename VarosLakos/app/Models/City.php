<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $visible = ['id', 'nev', 'orszag', 'lakossag'];
    protected $fillable = ['nev','orszag','lakossag'];
}
