@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h3 class="text text-secondary mb-5">
            update service
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
        <form action="{{route('adminservice.update', $admins->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">service Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="name" value="{{old('name', $admins->name)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label fw-bold">service description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" rows="2" name="description" ></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-dark mt-4" style="width: 450px; position: relative; left: 35%">
                Update
            </button>

        </form>
    </div>
@endsection
