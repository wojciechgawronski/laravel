<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function index()
    {
        return view('questionnaire.index');
    }
    public function create()
    {
        return view('questionnaire.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title'=>'required',
            'purpose'=>'required',
        ]);

        // not best way to get user_id:
        $data['user_id'] = (int) auth()->user()->id;

        $questionnaire = \App\Models\Questionnaire::create($data);

        return redirect('questionnaires/' . $questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {
        return view('questionnaire.show', compact('questionnaire'));
    }
}
