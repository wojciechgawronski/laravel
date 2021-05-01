@extends('layouts.app')

@section('content')
<div class="container">
    @include('page_elements.nav')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires" method="post">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="exampleInputTitle" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp" placeholder="Enter Title">
                            <div id="titleHelp" class="form-text">Give your questionnaire title that attracks <b>attention</b>.</div>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPurpose" class="form-label">Purpose</label>
                            <input type="text" name="purpose" class="form-control" id="exampleInputPurpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">
                            <div id="purposeHelp" class="form-text">Give your questionnaire purpose that attracks <b>attention</b>.</div>
                            @error('purpose')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button class="btn btn-primary rounded-0">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
