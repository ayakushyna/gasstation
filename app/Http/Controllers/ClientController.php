<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    //    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $clients = Client::orderBy('last_name')->get();

        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'first_name' => 'required',
            'last_name'=>'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        Client::insert([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
        ]);

        return redirect()->route('clients');
    }

    public function update(Client $client)
    {
        $validator = Validator::make( request()->all(),[
            'first_name' => 'required',
            'last_name'=>'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        Client::where('id',$client->id)->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
        ]);

        return redirect()->route('clients');
    }

    public function delete(Request $request){
        $clients_id = $request->get('check');
        Client::destroy($clients_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
