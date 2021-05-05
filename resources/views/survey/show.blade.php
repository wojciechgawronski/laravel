@extends('layouts.app')

@section('content')
<div class="container">
    @include('page_elements.nav')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Questionnaire. survey/show.blade.php
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

                    <form action="/surveys/{{ $questionnaire->id }}/{{ \Illuminate\Support\Str::slug($questionnaire->title) }}" method="post">
                        @csrf
                        @method('post')
                        @foreach($questionnaire->questions as $key => $question)
                            <div class="card mt-2">
                                <div class="card-header">
                                    <h4>{{ $key +1 }}. {{ $question->question }}</h4>
                                </div>
                                <div class="card-body">

                                    @error('responses.' . $key . '.answer_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <ul class="list-group">
                                        @foreach($question->answers as $answer)
                                            <li class="list-group-item">
                                                <input type="radio" name="responses[{{ $key }}][answer_id]" value="{{ $answer->id }}" id="answer{{ $answer->id }}" class="mr-2 small"
                                                    {{ old('responses.' . $key . '.answer_id') == $answer->id ? 'checked' : '' }}>
                                                <label for="answer{{ $answer->id }}">                                                {{ $answer->answer }}
                                                </label>
                                                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
{{--                            {{ $question->title }} <br>--}}
                        @endforeach




                </div>
            </div> {{-- end card --}}

{{--            @foreach($questionnaire->questions as $question)--}}
{{--                <div class="card mt-2">--}}
{{--                    <div class="card-header">--}}
{{--                        <h4>{{ $question->question }}</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <ul class="list-group">--}}
{{--                            @foreach($question->answers as $answer)--}}
{{--                                <li class="list-group-item">{{ $answer->answer }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}

            <div class="card mt-3">
                <div class="card-header">
                    Your Information
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name=survey[name]" id="name" class="form-control" aria-describedby="nameHelp" placeholder="Enter name" value="{{ old('survey.name') }}">
                        <div id="nameHelp" class="form-text">Hey, what's your <b>name?</b>.</div>
                        @error('survey.name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="survey[email]" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('survey.email') }}">
                        <div id="emailHelp" class="form-text">Your email please.</div>
                        @error('survey.email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <button class="btn btn-dark mt-4 rounded-0" type="submit">Complete survey</button>


            </div>

            </form>



        </div>
    </div>
</div>
@endsection
