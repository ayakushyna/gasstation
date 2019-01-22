<?php

namespace App\Http\Controllers;

use App\Provisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProvisionerController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $provisioners = Provisioner::orderBy('last_name')->get();

        return view('provisioners.index', compact('provisioners'));
    }

    public function create()
    {
        return view('provisioners.create');
    }

    public function edit(Provisioner $provisioner)
    {
        return view('provisioners.edit', compact('provisioner'));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'first_name' => 'required|max:50',
            'last_name'=>'required|max:50',
            'email' => 'required|email|max:70',
        ]);

        if ($validator->fails()) {
            return redirect()->route('provisioners.create')->withErrors($validator)->withInput();
        }

        Provisioner::insert([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
        ]);

        return redirect()->route('provisioners');
    }

    public function update(Provisioner $provisioner)
    {
        $validator = Validator::make( request()->all(),[
            'first_name' => 'required|max:50',
            'last_name'=>'required|max:50',
            'email' => 'required|email|max:70',
        ]);

        if ($validator->fails()) {
            return redirect()->route('provisioners.edit')->withErrors($validator)->withInput();
        }

        Provisioner::where('id',$provisioner->id)->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
        ]);

        return redirect()->route('provisioners');
    }

    public function delete(Request $request){
        $provisioners_id = $request->get('check');
        Provisioner::destroy($provisioners_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
