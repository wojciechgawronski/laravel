<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Questionnaire;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    public function store(Questionnaire $questionnaire)
    {

        // nested vallidate nested names in form
        $data = \request()->validate([
           'question.question' => 'required',
            'answers.*.answer' => 'required'
        ]);


        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionnaires/' . $questionnaire->id);
    }
}
