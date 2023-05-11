<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserServiceCreateRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class UserserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('request');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserServiceCreateRequest $request)
    {
        Service::create([
            'companyname'=>$request['companyname'],
            'service'=>$request['service'],
            'phone'=>$request['phone'],
            'description'=>$request['description'],
            'annualrevenues'=>$request['annualrevenues'],
            'companywebsite'=>$request['companywebsite'],
            'comments'=>$request['comments'],
            'time'=>$request['time'],
            'date'=>$request['date'],
            'user_id'=>auth()->user()->id,
        ]);
        return redirect()->route('userservice.create')->with('success','looking forward to meet you');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
