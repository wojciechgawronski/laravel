@extends('app')

@section('content')
    <div class="container">
        <h1>Customers</h1>
        <a href="/customers/create" class="btn btn-outline-info rounded-0 my-2 mb-3">Create new</a>
        <a href="/customers?active=1" class="btn btn-outline-info rounded-0 my-2 mb-3">Active</a>
        <a href="/customers?active=0" class="btn btn-outline-info rounded-0 my-2 mb-3">Unactive</a>
        <a href="/customers" class="btn btn-outline-info rounded-0 my-2 mb-3">All</a>
        <table class="table table table-dark table-striped">
            <thead>
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
                    <td class="d-flex">
                        <a href="/customers/{{ $customer->id }}" class="btn btn-sm  btn-outline-info rounded-0 ms-2"><i>show</i></a>
                        <a href="/customers/{{ $customer->id }}/edit" class="btn btn-sm  btn-outline-warning rounded-0 ms-2"><i>edit</i></a>
                        <form action="/customers/{{ $customer->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm  btn-outline-warning rounded-0 ms-2"><i>delete</i></button>
                        </form>

                    </td>
                </tr>
            @empty
                <p><i>No custmers...</i></p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
