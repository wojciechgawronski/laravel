@extends('app')

@section('title', 'services')

@section('content')
<h1>
    services
</h1>

<ul>
    @forelse($services as $service)
        <li>{{ $service }}</li>
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
