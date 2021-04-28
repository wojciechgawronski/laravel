@extends('app')

@section('content')
    <h1>Customers</h1>
    @forelse($customers as $customer)
        <p><a href="/customers/{{ $customer->id }}"><b>{{$customer->name}}</b></a>
        <i>{{ $customer->email }}</i></p>
    @empty
        <p><i>No custmers...</i></p>
    @endforelse
@endsection
