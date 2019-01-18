<?php

namespace App\Http\Controllers;

use App\GasColumn;
use App\GasStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GasColumnController extends Controller
{
    //    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $gas_columns = GasColumn::orderBy('id')->get();

        return view('gas_columns.index', compact('gas_columns'));
    }

    public function create()
    {
        $gas_stations = GasStation::orderBy('name')->get();
        return view('gas_columns.create',  compact('gas_stations'));
    }

    public function edit(GasColumn $gas_column)
    {
        $gas_stations = GasStation::orderBy('name')->get();
        return view('gas_columns.edit', compact(['gas_column','gas_stations']));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'serial_number' => 'required',
            'amount' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        GasColumn::insert([
            'gas_station_id' => request('gas_station'),
            'serial_number' => request('serial_number'),
            'amount' => request('amount'),
        ]);

        return redirect()->route('gas_columns');
    }

    public function update(GasColumn $gas_column)
    {
        $validator = Validator::make( request()->all(),[
            'serial_number' => 'required',
            'amount' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        GasColumn::where('id',$gas_column->id)->update([
            'gas_station_id' => request('gas_station'),
            'serial_number' => request('serial_number'),
            'amount' => request('amount'),
        ]);

        return redirect()->route('gas_columns');
    }

    public function delete(Request $request){
        $gas_columns_id = $request->get('check');
        GasColumn::destroy($gas_columns_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
