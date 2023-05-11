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
            <th scope="col">User name</th>
            <th scope="col">User email</th>
            <th scope="col">Content</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($complaints as $complaint)
            <tr>
                <th scope="row">{{$complaint->id}}</th>
                <th scope="row">{{$complaint->user->name}}</th>
                <th scope="row">{{$complaint->user->email}}</th>
                <th scope="row">{{$complaint->content}}</th>
                <td>
                    <form action="{{route('admincomplaint.destroy',$complaint->id)}}" method="post">
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
