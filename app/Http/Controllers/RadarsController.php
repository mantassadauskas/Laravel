<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Radar;

use function Sodium\compare;

class RadarsController extends Controller
{

    public function index()
    {
//        $radars = Radar::all ();
        $radars = Radar::orderBy ('time', 'desc')->simplePaginate (10);

        return view ('radars.index', compact ('radars'));
    }

    public function create()
    {
        return view ('radars.create');
    }

    public function store()
    {
//        $data = [
//            'date' => $request->date,
//            'number' => $request->number,
//            'distance' => $request->distance,
//            'time' => $request->time,
//        ];
        $this->validate (request (), [
            'date' => 'required',
            'number' => 'required',
            'distance' => 'required',
            'time' => 'required',
        ]);
        $radar = new Radar;

        $radar->date = request ('date');
        $radar->number = request ('number');
        $radar->distance = request ('distance');
        $radar->time = request ('time');
        $radar->save ();

//        Radar::create($data);

        return redirect ('/radar');
    }

    public function show($id)
    {
        $radar = Radar::find ($id);
        return view ('radars.show', compact ('radar'));
    }

    public function edit($id)
    {
        $radar = Radar::find ($id);

        return view ('radars.edit', compact ('radar'));
    }

    public function update($id)
    {
//
//        $this->validate (request (), [
//            'date' => 'required',
//            'number' => 'required',
//            'distance' => 'required',
//            'time' => 'required',
//        ]);
//        $radar = new Radar;
        $radar = Radar::find ($id);
//        dd ($radar);

        $radar->date = request ('date');
        $radar->number = request ('number');
        $radar->distance = request ('distance');
        $radar->time = request ('time');
//        dd ($radar);
        $radar->update ();
        return redirect ('/radar');
    }

    public function delete($id)
    {
        $radar = Radar::find ($id);


        return view ('radars.delete', compact ('radar'));
        // susirandam irasa
        // $radar->delete();
    }

    public function destroy($id)
    {
        $radar = Radar::find ($id);
        $radar->date = request ('date');
        $radar->number = request ('number');
        $radar->distance = request ('distance');
        $radar->time = request ('time');
        $radar->delete ();
        return redirect ('/radar');

        // susirandam irasa
        // $radar->delete();
    }

}
