<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Survey: standes between questionnaire and actual response
 * @package App\Models
 */
class Survey extends Model
{

    protected $guarded = []; // gourded off
    use HasFactory;

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }

//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
//
//    public function questions()
//    {
//        return $this->hasMany(Question::class);
//    }
//
//    public function surveys()
//    {
//        return $this->hasMany(Survey::class);
//    }
}
