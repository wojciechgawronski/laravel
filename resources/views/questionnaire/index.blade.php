@extends('layouts.app')

@section('content')
<div class="container">
    @include('page_elements.nav')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Questionnaires <a href="/questionnaires/create" class="btn btn-outline-info btn-sm rounded-pill">Create new</a></div>

                <div class="card-body">
                   ...
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
