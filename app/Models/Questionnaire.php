<?php

namespace App\Models;

use Dotenv\Util\Str;
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
    // protected $guarded = [];
    use HasFactory;

    public function path()
    {
        // no $questionnaire, rather $this, we are inside Questionnaire
        return url('/questionnaires/' . $this->id);
    }

    public function publicPath()
    {
        return url('surveys/' . $this->id . '-' . \Illuminate\Support\Str::slug($this->title));
    }

    /**
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

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}
