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
            <th scope="col">Task Level</th>
            <th scope="col">Rating</th>
            <th scope="col">Recommendations</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($feedbacks as $feedback)
            <tr>
                <th scope="row">{{$feedback->id}}</th>
                <th scope="row">{{$feedback->user->name}}</th>
                <th scope="row">{{$feedback->user->email}}</th>
                <td>{{$feedback->tasklevel}}</td>
                <td>{{$feedback->rating}}</td>
                <td>{{$feedback->recommendations}}</td>
                <td>
                    <form action="{{route('adminfeedback.destroy',$feedback->id)}}" method="post">
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
