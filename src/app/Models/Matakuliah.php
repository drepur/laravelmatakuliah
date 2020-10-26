<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = "tblmatakuliah";

    protected $fillable = ['kodemk','mk','dosen','noruang'];
}
