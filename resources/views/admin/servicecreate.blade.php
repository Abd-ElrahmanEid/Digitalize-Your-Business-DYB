@extends('layouts.admin')
@section('content')

    @if(session()->has('success'))
        <p class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </p>
    @endif
<div class="container mt-5">
    <h3 class="text text-dark mb-5">
        Add Service
    </h3>
    @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('adminservice.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label fw-bold">Service Name</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" id="name"  name="name" value="{{old('name')}}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="image" class="col-sm-2 col-form-label fw-bold">Service image</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image" name="image">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label fw-bold">Service description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" rows="2" name="description" value="{{old('description')}}"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-dark mt-4" style="width: 450px; position: relative; left: 35%">
            Create
        </button>

    </form>
    </div>
</div>
@endsection
