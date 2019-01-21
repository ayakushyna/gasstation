<?php

namespace App\Http\Controllers;

use App\Buying;
use App\Fuel;
use App\Provisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuyingController extends Controller
{
    //    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $buyings = Buying::orderBy('id')->get();

        return view('buyings.index', compact('buyings'));
    }

    public function create()
    {
        $provisioners= Provisioner::orderBy('last_name')->get();
        $fuels = Fuel::orderBy('type')->get();

        return view('buyings.create',  compact(['provisioners','fuels']));
    }

    public function edit(Buying $buying)
    {
        $provisioners= Provisioner::orderBy('last_name')->get();
        $fuels = Fuel::orderBy('type')->get();

        return view('buyings.edit', compact(['buying','provisioners','fuels']));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'amount' => 'required|numeric|max:1000',
            'price' => 'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('buyings.create')->withErrors($validator)->withInput();
        }

        Buying::insert([
            'fuel_id' => request('fuel'),
            'provisioner_id' => request('provisioner'),
            'amount' => request('amount'),
            'price' => request('price'),
            'date' => request('date'),
        ]);

        return redirect()->route('buyings');
    }

    public function update(Buying $buying)
    {
        $validator = Validator::make( request()->all(),[
            'amount' => 'required|numeric|max:1000',
            'price' => 'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('buyings.edit')->withErrors($validator)->withInput();
        }

        Buying::where('id',$buying->id)->update([
            'fuel_id' => request('fuel'),
            'provisioner_id' => request('provisioner'),
            'amount' => request('amount'),
            'price' => request('price'),
            'date' => request('date'),
        ]);

        return redirect()->route('buyings');
    }

    public function delete(Request $request){
        $buyings_id = $request->get('check');
        Buying::destroy($buyings_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
