@extends('app')

@section('content')
    <h1>Customers</h1>

    <form method="post" action="/customers">
        @csrf
        <div class="mb-3">
            <label for="service" class="form-label">Add a customer name</label>
            <input type="text" name="name" class="form-control" id="service" aria-describedby="serviceHelp" value="{{ old('name') }}" autocomplete="off">
            <div id="serviceHelp" class="form-text">We'll never share your servie with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Add a customer email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ old('email') }}" autocomplete="off">
            <div id="emailHelp" class="form-text">We'll never share your servie with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Add a optional customer notes</label>
            <input type="text" name="notes" class="form-control" id="notes" aria-describedby="notesHelp">
            <div id="notesHelp" class="form-text">We'll never share your notes with anyone else.</div>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
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

@endsection
