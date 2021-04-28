<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // option1: what is fillable
    protected $fillable = ['name', 'email'];
    // option2:
    protected $guarded = ['mame'];

    use HasFactory;
}
