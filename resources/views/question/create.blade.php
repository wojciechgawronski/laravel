@extends('layouts.app')

@section('content')

    {{--    https://www.youtube.com/watch?v=_SyG3HMv48k&list=PLpzy7FIRqpGC8Jk6gyWdSVdxCVXZAsenQ&index=21--}}

    <div class="container">
        @include('page_elements.nav')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new question</div>

                    <div class="card-body">
                        <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                            @csrf
                            @method('post')

                            <div class="mb-3">
                                <label for="exampleInputNamw" class="form-label">Question</label>
                                <input type="text" name="question[question]" class="form-control" id="exampleInputQuestion" aria-describedby="questionHelp" placeholder="Enter question" value="{{ old('question.question') }}">
                                <div id="questionHelp" class="form-text">Ask simple and to the point question to best <b>results</b>.</div>
                                @error('question.question')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <legend>Choices</legend>
                                    <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into question</small>

                                        <div class="form-group">
                                            <label for="answer1">Choice 1</label>
                                            <input type="text" name="answers[][answer]" class="form-control" id="answer1" placeholder="Enter a choice 1" aria-describedby="choicesHelp" value="{{ old('answers.0.answer') }}">
                                            @error('answers.0.answer')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label>
                                        <input type="text" name="answers[][answer]" class="form-control" id="answer2" placeholder="Enter a choice 2" aria-describedby="choicesHelp" value="{{ old('answers.1.answer') }}">
                                        @error('answers.1.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label>
                                        <input type="text" name="answers[][answer]" class="form-control" id="answer3" placeholder="Enter a choice 3" aria-describedby="choicesHelp" value="{{ old('answers.2.answer') }}">
                                        @error('answers.2.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label>
                                        <input type="text" name="answers[][answer]" class="form-control" id="answer1" placeholder="Enter a choice 4" aria-describedby="choicesHelp" value="{{ old('answers.3.answer') }}">
                                        @error('answers.3.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </fieldset>
                            </div>

                            <button class="btn btn-primary rounded-0">Add question</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
