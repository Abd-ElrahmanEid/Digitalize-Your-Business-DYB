@extends('layouts.admin')
@section('content')
    @if(session()->has('success'))
        <p class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </p>
    @endif
    <table class="container-fluid table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Company name</th>
            <th scope="col">Company website</th>
            <th scope="col">Phone number</th>
            <th scope="col">Annual revenues</th>
            <th scope="col">Service</th>
            <th scope="col">Description</th>
            <th scope="col">Meeting date</th>
            <th scope="col">Meeting time</th>
            <th scope="col">Comments</th>
            <th scope="col">Customer name</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>

        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <th scope="row">{{$service->id}}</th>
                <td>{{$service->companyname}}</td>
                <td>{{$service->companywebsite}}</td>
                <td>{{$service->phone}}</td>
                <td>{{$service->annualrevenues}}</td>
                <td>{{$service->service}}</td>
                <td>{{$service->description}}</td>
                <td>{{$service->date}}</td>
                <td>{{$service->time}}</td>
                <td>{{$service->comments}}</td>
                <td>{{$service->user->name}}</td>
                <td>
                    <form action="{{route('adminviewservice.destroy',$service->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            DELETE
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{route('adminviewservice.edit',$service->id)}}" class="btn btn-secondary">
                        update
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
