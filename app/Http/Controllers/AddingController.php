<?php

namespace App\Http\Controllers;

use App\Adding;
use App\Fuel;
use App\GasColumn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddingController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $addings = Adding::orderBy('id')->get();

        return view('addings.index', compact('addings'));
    }

    public function create()
    {
        $gas_columns = GasColumn::groupBy('gas_station_id', "id")->get();
        $fuels = Fuel::orderBy('type')->get();

        return view('addings.create',  compact(['gas_columns','fuels']));
    }

    public function edit(Adding $adding)
    {
        $gas_columns = GasColumn::groupBy('gas_station_id', "id")->get();
        $fuels = Fuel::orderBy('type')->get();

        return view('addings.edit', compact(['adding','gas_columns','fuels']));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'amount' => 'required|numeric|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('addings.create')->withErrors($validator)->withInput();
        }

        Adding::insert([
            'fuel_id' => request('fuel'),
            'gas_column_id' => request('gas_column'),
            'amount' => request('amount'),
        ]);

        return redirect()->route('addings');
    }

    public function update(Adding $adding)
    {
        $validator = Validator::make( request()->all(),[
            'amount' => 'required|numeric|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('addings.edit')->withErrors($validator)->withInput();
        }

        Adding::where('id',$adding->id)->update([
            'fuel_id' => request('fuel'),
            'gas_column_id' => request('gas_column'),
            'amount' => request('amount'),
        ]);

        return redirect()->route('addings');
    }

    public function delete(Request $request){
        $addings_id = $request->get('check');
        Adding::destroy($addings_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
