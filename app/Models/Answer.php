<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * an answer simplyu belongs to a question.. check method
 *
 * php artisan make:model Answer -m
 * Class Answer
 * @package App\Models
 */
class Answer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
