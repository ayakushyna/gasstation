<?php

namespace App\Http\Controllers;

use App\GasStation;
use App\Position;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkerController extends Controller
{
    //    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $workers = Worker::orderBy('last_name')->get();

        return view('workers.index', compact('workers'));
    }

    public function create()
    {
        $gas_stations = GasStation::orderBy('name')->get();
        $positions = Position::orderBy('title')->get();

        return view('workers.create', compact(['gas_stations', 'positions']));
    }

    public function edit(Worker $worker)
    {
        $gas_stations = GasStation::orderBy('name')->get();
        $positions = Position::orderBy('title')->get();

        return view('workers.edit', compact(['worker','gas_stations', 'positions']));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'first_name' => 'required|max:50',
            'last_name'=>'required|max:50',
            'birthday' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('workers.create')->withErrors($validator)->withInput();
        }

        Worker::insert([
            'gas_station_id' => request('gas_station'),
            'position_id' => request('position'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'birthday' => request('birthday'),
        ]);

        return redirect()->route('workers');
    }

    public function update(Worker $worker)
    {
        $validator = Validator::make( request()->all(),[
            'first_name' => 'required|max:50',
            'last_name'=>'required|max:50',
            'birthday' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('workers.edit')->withErrors($validator)->withInput();
        }

        Worker::where('id',$worker->id)->update([
            'gas_station_id' => request('gas_station'),
            'position_id' => request('position'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'birthday' => request('birthday'),
        ]);

        return redirect()->route('workers');
    }

    public function delete(Request $request){
        $workers_id = $request->get('check');
        Worker::destroy($workers_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
