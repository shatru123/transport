<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $drivers=Driver::all();

        return view('admin.drivers.index',compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.drivers.create');
    }

    public function edit($id)
    {
        $driver=Driver::findOrFail($id);
        return view('admin.drivers.edit',compact('driver'));

    }


    public function store(Request $request)
    {
        //
        $input=$request->all();
        if($file = $request->file('photo_id'))
        {


            $name = time() . $file->getClientOriginalName();


            $file->move('images/backend/drivers', $name);

          //  $photo = Photo::create(['file'=>$name]);


            $input['photo'] = $name;

        }
         $drivers=new Driver();
        $drivers->create($input);

        return redirect('/admin/drivers');



    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

        $input=$request->all();
        if($file = $request->file('photo_id'))
        {


            $name = time() . $file->getClientOriginalName();


            $file->move('images/backend/drivers', $name);

            //  $photo = Photo::create(['file'=>$name]);


            $input['photo'] = $name;

        }

        Driver::whereId($id)->first()->update($input);

        return redirect('/admin/drivers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $drivers = Driver::findOrFail($id);

       // unlink("images/backend/drivers" . $drivers->photo);

        $drivers->delete();

        return redirect('/admin/drivers');
    }








}
