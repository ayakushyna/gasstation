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
            'first_name' => 'required|max:50',
            'last_name'=>'required|max:50',
            'email' => 'required|email|max:70',
        ]);

        if ($validator->fails()) {
            return redirect()->route('clients.create')->withErrors($validator)->withInput();
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
            'first_name' => 'required|max:50',
            'last_name'=>'required|max:50',
            'email' => 'required|email|max:70',
        ]);

        if ($validator->fails()) {
            return redirect()->route('clients.edit')->withErrors($validator)->withInput();
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
