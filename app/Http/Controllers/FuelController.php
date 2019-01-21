<?php

namespace App\Http\Controllers;

use App\Fuel;
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
            'type' => 'required|numeric|max:50',
            'amount'=>'required|numeric|max:1000',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('fuels.create')->withErrors($validator)->withInput();
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
            'type' => 'required|numeric|max:50',
            'amount'=>'required|numeric|max:1000',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('fuels.edit')->withErrors($validator)->withInput();
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
