<?php

namespace App\Http\Controllers;

use App\GasStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GasStationController extends Controller
{
    //    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $gas_stations = GasStation::orderBy('name')->get();

        return view('gas_stations.index', compact('gas_stations'));
    }

    public function create()
    {
        return view('gas_stations.create');
    }

    public function edit(GasStation $gas_station)
    {
        return view('gas_stations.edit', compact('gas_station'));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        GasStation::insert([
            'name' => request('name'),
        ]);

        return redirect()->route('gas_stations');
    }

    public function update(GasStation $gas_station)
    {
        $validator = Validator::make( request()->all(),[
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        GasStation::where('id',$gas_station->id)->update([
            'name' => request('name'),
        ]);

        return redirect()->route('gas_stations');
    }

    public function delete(Request $request){
        $gas_stations_id = $request->get('check');
        GasStation::destroy($gas_stations_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
