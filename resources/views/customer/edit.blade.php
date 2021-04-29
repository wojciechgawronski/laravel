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
                    @method('PUT')

                    @include('customer.form')

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
