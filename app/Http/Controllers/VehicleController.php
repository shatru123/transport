<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function index()
    {

        $vehicles=Vehicle::all();
        return view('admin.vehicles.index',compact('vehicles'));
    }


    public function create()
    {

        $wheels=range(4,20);
        return view('admin.vehicles.create',compact('wheels'));

    }


    public function store(Request $request)
    {
        $input = $request->all();
        $vehicles=new Vehicle();
        $vehicles->create($input);
        return redirect('admin/vechicles');

    }


    public function show($id)
    {


    }


    public function edit($id)
    {

        $vehicles = Vehicle::findOrFail($id);
        $wheels=range(4,20);
        return view('admin.vehicles.edit',compact('vehicles','wheels'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        Vehicle::whereId($id)->first()->update($input);

        return redirect('/admin/vechicles');

    }


    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
         $vehicle->delete();

        return redirect('/admin/vechicles');
    }


}






