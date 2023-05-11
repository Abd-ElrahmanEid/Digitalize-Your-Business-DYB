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
        <form action="{{route('adminviewservice.update', $services->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">Company Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="companyname" value="{{old('companyname',$services->companyname)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">Company website</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="companywebsite" value="{{old('companywebsite',$services->companywebsite)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">phone</label>
                <div class="col-sm-10">
                    <input type="number"  class="form-control" id="name"  name="phone" value="{{old('phone',$services->phone)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">Annual revenue</label>
                <div class="col-sm-10">
                    <input type="number"  class="form-control" id="name"  name="annualrevenues" value="{{old('annualrevenues',$services->annualrevenues)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">service</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="service" value="{{old('service',$services->service)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">description</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="description" value="{{old('description',$services->description)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">Meeting date</label>
                <div class="col-sm-10">
                    <input type="date"  class="form-control" id="name"  name="date" value="{{old('date',$services->date)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">Meeting time</label>
                <div class="col-sm-10">
                    <input type="time"  class="form-control" id="name"  name="time" value="{{old('time',$services->time)}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label fw-bold">Comment</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" rows="2" name="comments"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-dark mt-4" style="width: 450px; position: relative; left: 35%">
                Update
            </button>

        </form>
    </div>
@endsection
