<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //TODO add questionnaier links
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
        // $data['user_id'] = (int) auth()->user()->id;
        // better way:
        // but: WE MAKE A SPAGHETTI CODE FROM MODULES...
        $questionnaire = auth()->user()->questionnaires()->create($data);

        // $questionnaire = \App\Models\Questionnaire::create($data);

        return redirect('questionnaires/' . $questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {
        // lazy loading - load a reltionshiop
        $questionnaire->load('questions.answers');
        // dd($questionnaire); // relationss section in array

        return view('questionnaire.show', compact('questionnaire'));
    }
}
