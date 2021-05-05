@extends('layouts.app')

@section('content')
<div class="container">
    s@include('page_elements.nav')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Questionnaire
{{--                    <a href="questionnaires/create" class="btn btn-outline-info btn-sm rounded-pill">Create new</a>--}}
                    <div>
                        <a href="/questionnaires/{{ $questionnaire->id }}/questions/create" class="btn btn-outline-info btn-sm rounded-pill">Create question</a>
                        <a href="/surveys/{{ $questionnaire->id }}/{{ \Illuminate\Support\Str::slug($questionnaire->title) }}" class="btn btn-outline-info btn-sm rounded-pill">Take survey</a>

                    </div>

                </div>

                <div class="card-body">
                    <h4>Title: <b>{{ $questionnaire->title }}</b></h4>
                    <p>Purpose: <b>{{ $questionnaire->purpose }}</b></p>
                    <p>Created: <b>{{ $questionnaire->created_at }}</b></p>
                    <p>Updated: <b>{{ $questionnaire->updated_at }}</b></p>
                </div>
            </div>

                    @foreach($questionnaire->questions as $question)
                <div class="card mt-2">
                    <div class="card-header">
                        <h4>{{ $question->question }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($question->answers as $answer)
                                <li class="list-group-item">{{ $answer->answer }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
