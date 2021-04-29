@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Customers</h1>
                <a href="/customers" class="btn btn-outline-info rounded-0 my-2 mb-3">Back</a>

                <form method="post" action="/customers">

                    @include('customer.form')

                    <button type="submit" class="btn btn-outline-info rounded-0">Add customer</button>
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
