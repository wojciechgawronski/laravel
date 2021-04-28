@extends('app')

@section('content')
    <h1>Customers</h1>
    @forelse($customers as $customer)
        <p><b>{{$customer->name}}</b>, <i>{{ $customer->email }}</i></p>
    @empty
        <p><i>No custmers...</i></p>
    @endforelse
@endsection
