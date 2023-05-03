<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.serviceindex',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.servicecreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceCreateRequest $request)
    {
        $path = $request->file('image')->store('services','public');
        Admin::create([
            'name'=>$request['name'],
            'description'=>$request['description'],
            'image'=>$path
        ]);
        return redirect()->route('adminservice.create')->with('success','service added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $admin = Admin::where('id',$id)->first();
        return view('admin.serviceshow',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admins = Admin::where('id',$id)->first();
        return view('admin.serviceupdate',compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceUpdateRequest $request, int $id)
    {
        $admins = Admin::where('id',$id)->first();
        $admins->update($request->all());
        return redirect()->route('adminservice.index')->with('success','service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Admin::where('id',$id)->delete();
        return redirect()->route('adminservice.index')->with('success','service deleted successfully');
    }

}
