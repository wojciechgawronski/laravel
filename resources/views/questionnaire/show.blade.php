@extends('layouts.app')

@section('content')
<div class="container">
    @include('page_elements.nav')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Questionnaires questionnaires/create <a href="questionnaires/create" class="btn btn-outline-info btn-sm rounded-pill">Create new</a></div>

                <div class="card-body">
                    <h4>Title: <b>{{ $questionnaire->title }}</b></h4>
                    <p>Purpose: <b>{{ $questionnaire->purpose }}</b></p>
                    <p>Created: <b>{{ $questionnaire->created_at }}</b></p>
                    <p>Updated: <b>{{ $questionnaire->updated_at }}</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
