@extends('app')

@section('content')
    <h1>Customer</h1>
    <p><b>Name: </b> {{ $customer->name }}</p>
    <p><b>Email: </b> {{ $customer->email }}</p>
    <p><b>Notes: </b> {{ $customer->notes }}</p>
    <a href="/customers" class="btn btn-outline-info rounded-0">Back</a>
@endsection
