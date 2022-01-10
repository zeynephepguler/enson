<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basvuru extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['öğrencino','cap','yataygeçiş','dikeygeçiş','intibak','yazokulu'];
}
