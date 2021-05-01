<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = ['title', 'purpose', 'user_id'];
    protected $guarded = [];
    use HasFactory;

    /**
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
}
