<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sections extends Model
{
    // دى بتعمل ايه عشان اقدر اعمل تعيين جماعى للحقول دى
    protected $fillable = [
        'section_name',
        'description',
        'created_by',
    ];
}
