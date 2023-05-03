<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCreateRequest;
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
    public function show(string $id)
    {
        dd('dd');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd('dd');
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
    public function destroy(int $id)
    {
        Admin::where('id',$id)->delete();
        return redirect()->route('adminservice.index')->with('success','product deleted successfully');
    }
}
