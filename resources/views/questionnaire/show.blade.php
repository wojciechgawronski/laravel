@extends('layouts.app')

@section('content')
<div class="container">
    @include('page_elements.nav')
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
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>{{ $question->question }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($question->answers as $answer)
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>{{ $answer->answer }}</div>
                                    <div class="small text-muted">
                                        answers: {{ $answer->responses->count() }}
                                        | responses:  {{ $question->responses->count() }}
                                        @if($question->responses->count())
                                            | <b>{{ intval($answer->responses->count() * 100 / $question->responses->count()) }} %</b>
                                        @endif
                                    </div>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-sm rounded-0">Delete question</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
