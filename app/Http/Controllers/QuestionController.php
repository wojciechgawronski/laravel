<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use \App\Models\Questionnaire;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        $question->answers()->delete(); // delete answers chidren of this question
        $question->delete(); // delete this question

        return redirect($questionnaire->path());
    }

    public function store(Questionnaire $questionnaire)
    {

        // nested vallidate nested names in formf
        $data = \request()->validate([
           'question.question' => 'required',
            'answers.*.answer' => 'required'
        ]);


        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionnaires/' . $questionnaire->id);
    }
}
