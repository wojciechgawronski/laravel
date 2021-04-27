<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /*
 * each particlallr column in database
 */
//    protected $fillable = ['name'];
    protected $guarded = ['name'];
    use HasFactory;
}
