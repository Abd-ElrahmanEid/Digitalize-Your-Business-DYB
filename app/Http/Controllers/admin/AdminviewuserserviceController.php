<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUpdateUserServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminviewuserserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.userserviceindex',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $services = Service::where('id',$id)->first();
        return view('admin.userserviceupdate',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateUserServiceRequest $request, int $id)
    {
        $services = Service::where('id',$id)->first();
        $services->update($request->all());
        return redirect()->route('adminviewservice.index')->with('success','service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Service::where('id',$id)->delete();
        return redirect()->route('adminviewservice.index')->with('success','service deleted successfully');
    }
}
