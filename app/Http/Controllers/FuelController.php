<?php

namespace App\Http\Controllers;

use App\Fuel;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FuelController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $fuels= Fuel::orderBy('id')->get();

        return view('fuels.index', compact('fuels'));
    }

    public function create()
    {
        return view('fuels.create');
    }

    public function edit(Fuel $fuel)
    {
        return view('fuels.edit', compact('fuel'));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'type' => 'required',
            'amount'=>'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        Fuel::insert([
            'type' => request('type'),
            'amount' => request('amount'),
            'price' => request('price')
        ]);

        return redirect()->route('fuels');
    }

    public function update(Fuel $fuel)
    {
        $validator = Validator::make( request()->all(),[
            'type' => 'required',
            'amount'=>'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        Fuel::where('id',$fuel->id)->update([
            'type' => request('type'),
            'amount' => request('amount'),
            'price' => request('price'),
        ]);

        return redirect()->route('fuels');
    }

    public function delete(Request $request){
        $fuels_id = $request->get('check');
        Fuel::destroy($fuels_id);
       /* $check = Request::input('check');
        Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
