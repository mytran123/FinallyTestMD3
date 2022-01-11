<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table= "staffs";

    protected $fillable = [
        'group',
        'name',
        'birthday',
        'gender',
        'phone',
        'CMND',
        'email',
        'address'
    ];
}
