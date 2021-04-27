@extends('app')

@section('title', 'services')

@section('content')
<h1>
    services
</h1>
<form method="post" action="">
    @csrf
    <div class="mb-3">
        <label for="service" class="form-label">Add a service name</label>
        <input type="text" name="name" class="form-control" id="service" aria-describedby="serviceHelp">
        <div id="serviceHelp" class="form-text">We'll never share your servie with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
</form>

@error('name')
<div class="alert alert-danger small rounded-0 my-2">{{ $message }}</div>
@enderror

<ul>
    @forelse($services as $service)
        <li>{{ $service->name }} , {{ $service->created_at }}, updated at: {{ $service->updated_at }}</li>
    @empty
        <p>No services avaible</p>
    @endforelse
</ul>
<?php
//    var_dump($data['services']);
//    var_dump($data['hello']);
    ?>

{{--<p>{{ $data['hello'] }}</p>--}}

@endsection
