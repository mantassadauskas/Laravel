<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;

use function Sodium\compare;

class DriversController extends Controller
{

    public function __construct()
    {

        $this->middleware ('auth')->except (['index', 'show']);

    }


    public function index()
    {
        $drivers = Driver::all ();

        return view ('drivers.index', compact ('drivers'));
    }

    public function create()
    {
        return view ('drivers.create');
    }

    public function store()
    {
        $this->validate (request (), [
           'name'=> 'required',
            'city' => 'required',
        ]);
        $driver = new Driver;

        $driver->name = request ('name');
        $driver->city = request ('city');


        $driver->save ();


        return redirect ('/driver');
    }

    public function show($driverid)
    {
        $driver = Driver::find ($driverid);
        return view ('drivers.show', compact ('driver'));
    }

    public function edit($driverid)
    {
        $driver = Driver::find ($driverid);
        return view ('drivers.edit', compact ('driver'));
    }

    public function update($driverid)
    {
        $driver = Driver::find ($driverid);
//        dd ($radar);

        $driver->name = request ('name');
        $driver->city = request ('city');

//        dd ($radar);
        $driver->update ();
        return redirect ('/driver');
    }

    public function delete($driverid)
    {

    }

    public function destroy($driverid)
    {

    }

}
