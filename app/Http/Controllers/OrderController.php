<?php

namespace App\Http\Controllers;

use App\Client;
use App\Fuel;
use App\Order;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::orderBy('date')->get();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $fuels = Fuel::orderBy('type')->get();
        $clients = Client::orderBy('last_name')->get();
        $workers = Worker::orderBy('last_name')->get();

        return view('orders.create', compact(['fuels', 'clients', 'workers']));
    }

    public function edit(Order $order)
    {
        $fuels = Fuel::orderBy('type')->get();
        $clients = Client::orderBy('last_name')->get();
        $workers = Worker::orderBy('last_name')->get();

        return view('orders.edit', compact(['order','fuels', 'clients', 'workers']));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'amount' => 'required|numeric|max:1000',
            'price'=>'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('orders.create')->withErrors($validator)->withInput();
        }

        Order::insert([
            'fuel_id' => request('fuel'),
            'client_id' => request('client'),
            'worker_id' => request('worker'),
            'amount' => request('amount'),
            'price' => request('price'),
            'date' => request('date'),
        ]);

        return redirect()->route('orders');
    }

    public function update(Order $order)
    {
        $validator = Validator::make( request()->all(),[
            'amount' => 'required|numeric|max:1000',
            'price'=>'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('orders.edit')->withErrors($validator)->withInput();
        }

        Order::where('id',$order->id)->update([
            'fuel_id' => request('fuel'),
            'client_id' => request('client'),
            'worker_id' => request('worker'),
            'amount' => request('amount'),
            'price' => request('price'),
            'date' => request('date'),
        ]);

        return redirect()->route('orders');
    }

    public function delete(Request $request){
        $orders_id = $request->get('check');
        Order::destroy($orders_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
