<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Questionnaire - COLLECTION OF QUESTIONS, so
 * Questionnaire has many questions
 * @package App\Models
 */
class Questionnaire extends Model
{
    protected $fillable = ['title', 'purpose', 'user_id'];
    protected $guarded = [];
    use HasFactory;

    /**
     *
     * relationshop
     *
     * now questionnaire knows about the user and user...
     * knows about questionnaier?
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // questionnaire belongs to user, so..
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
