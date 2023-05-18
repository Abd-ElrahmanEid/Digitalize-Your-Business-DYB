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
        <form action="{{route('adminusers.update', $users->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">User Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="name" value="{{old('name')}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">User E-Mail</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="email" value="{{old('email')}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">User Role</label>
                <div class="col-sm-10">
                    <select name="is_admin" class="form-control" id="name">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-dark mt-4" style="width: 450px; position: relative; left: 35%">
                Update
            </button>

        </form>
    </div>
@endsection
