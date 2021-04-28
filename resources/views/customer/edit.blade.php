@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Customer</h1>
                <p><b>Name: </b> {{ $customer->name }}</p>
                <p><b>Email: </b> {{ $customer->email }}</p>
                <p><b>Notes: </b> {{ $customer->notes }}</p>
                <a href="/customers" class="btn btn-outline-info rounded-0">Back</a>
                <a href="/customers/create" class="btn btn-outline-info rounded-0">Add</a>
                <hr>
                <form method="post" action="/customers/{{ $customer->id }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="service" class="form-label">Edit a customer name</label>
                        <input type="text" name="name" class="form-control" id="service" aria-describedby="serviceHelp" value="{{ $customer->name }}" autocomplete="off">
                        <div id="serviceHelp" class="form-text">We'll never share your servie with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Edit a customer email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ $customer->email }}" autocomplete="off">
                        <div id="emailHelp" class="form-text">We'll never share your servie with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="notes" class="form-label">Edit a optional customer notes</label>
                        <input type="text" name="notes" class="form-control" id="notes" aria-describedby="notesHelp" value="{{ $customer->notes }}">
                        <div id="notesHelp" class="form-text">We'll never share your notes with anyone else.</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger my-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @error('email')
                @foreach($errors as $error)
                    <div class="alert alert-danger small my-2">
                        {{ $error }}
                    </div>
                @endforeach
                <div class="alert alert-danger small my-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
@endsection
