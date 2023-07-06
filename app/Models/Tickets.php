<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $fillable = [
        'package',
        'quantity',
        'date',
        'fullname',
        'phonenumber',
        'email',
        'qr_code',
    ];
}
