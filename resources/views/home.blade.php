@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p><a href="/questionnaires/create" class="btn btn-info rounded-0">Questionnaire – create new</a></p>
                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">Questionnaire</div>

                <div class="card-body pl-3">
                    <ul class="list-group ml-3">

                    @forelse($questionnaires as $questionnaire)
                    <li class="list-group-items">
{{--                        <a href="/questionnaires/{{ $questionnaire->id }}" class="d-block">{{ $questionnaire->title }}</a>--}}
{{--                        we make path() inside model... --}}
                        <a href="{{ $questionnaire->path() }}" class="d-block">{{ $questionnaire->title }}</a>
                        <div class="mt-2">
                            <small class="font-weight-bold">Share url: (by email eg)</small>
                            <p>
                                <a href="{{ $questionnaire->publicPath() }}">{{ $questionnaire->publicPath() }}</a>
                            </p>
                        </div>
                    </li>
                    @empty
                        <li class="list-group-items">
                            <p>No questionnaier yet</p>
                        </li>
                    @endforelse
                    </ul>
                </div>




            </div>
        </div>
    </div>
</div>
@endsection
