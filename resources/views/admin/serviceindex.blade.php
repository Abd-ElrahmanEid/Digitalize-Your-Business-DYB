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
            <th scope="col">service name</th>
            <th scope="col">service image</th>
            <th scope="col">service description</th>
            <th scope="col">Delete service</th>
            <th scope="col">Show service</th>
            <th scope="col">Update service</th>
        </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
            <tr>
                <th scope="row">{{$admin->id}}</th>
                <td>{{$admin->name}}</td>
                <td>{{$admin->description}}</td>
                <td>
                    <img src="{{asset('/storage/'.$admin->image)}}" height="100">
                </td>
                <td>
                    <form action="{{route('adminservice.destroy',$admin->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            delete service
                        </button>
                    </form>

                </td>
                <td>
                    <a href="{{route('adminservice.show',$admin->id)}}" class="btn btn-secondary">
                        show service
                    </a>
                </td>
                <td>
                    <a href="{{route('adminservice.edit',$admin->id)}}" class="btn btn-secondary">
                        update service
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
