@extends('layouts.admin')
@section('content')
    @if(session()->has('success'))
        <p class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </p>
    @endif
    <table class="container table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Add user</th>
            <th scope="col">Delete user</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    {{$user->is_admin?'Admin':'User'}}
                </td>

                <td>
                    <a class="btn btn-secondary" href="{{route('adminusers.create')}}">Add user</a>
                </td>
                <td>
                    <form action="{{route('adminusers.destroy',$user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            DELETE
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
