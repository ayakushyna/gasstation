<?php

namespace App\Http\Controllers;

use App\EarningHistory;
use App\GasStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EarningHistoryController extends Controller
{
    //    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $earning_histories = EarningHistory::orderBy('id')->get();

        return view('earning_histories.index', compact('earning_histories'));
    }

    public function create()
    {
        $gas_stations = GasStation::orderBy('name')->get();
        return view('earning_histories.create',  compact('gas_stations'));
    }

    public function edit(EarningHistory $earning_history)
    {
        $gas_stations = GasStation::orderBy('name')->get();
        return view('earning_histories.edit', compact(['earning_history','gas_stations']));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'earnings' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        EarningHistory::insert([
            'gas_station_id' => request('gas_station'),
            'earnings' => request('earnings'),
            'date' => request('date'),
        ]);

        return redirect()->route('earning_histories');
    }

    public function update(EarningHistory $earning_history)
    {
        $validator = Validator::make( request()->all(),[
            'earnings' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        EarningHistory::where('id',$earning_history->id)->update([
            'gas_station_id' => request('gas_station'),
            'earnings' => request('earnings'),
            'date' => request('date'),
        ]);

        return redirect()->route('earning_histories');
    }

    public function delete(Request $request){
        $earning_histories_id = $request->get('check');
        EarningHistory::destroy($earning_histories_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
