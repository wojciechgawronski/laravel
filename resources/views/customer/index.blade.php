@extends('app')

@section('content')
    <div class="container">
        <h1>Customers</h1>
        <table class="table table table-dark table-striped">
            <thead>exitwe
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td><a href="/customers/{{ $customer->id }}"><b>{{$customer->name}}</b></a></td>
                    <td>  <i>{{ $customer->email }}</i></td>
                    <td>
                        <a href="/customers/{{ $customer->id }}" class="btn btn-sm  btn-outline-info rounded-0 ms-2"><i>show</i></a>
                        <a href="/customers/{{ $customer->id }}/edit" class="btn btn-sm  btn-outline-warning rounded-0 ms-2"><i>edit</i></a>
                        <a href="/customers/{{ $customer->id }}/edit" class="btn btn-sm  btn-outline-warning rounded-0 ms-2"><i>delete</i></a>
                    </td>
                </tr>
            @empty
                <p><i>No custmers...</i></p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
