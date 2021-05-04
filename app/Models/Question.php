<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Methods describes relationshios..:
 *
 * Question belongs to questionnaire...
 * and has many answears
 * php artisan make:model Question -m
 * Class Question
 * @package App\Models
 */
class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
