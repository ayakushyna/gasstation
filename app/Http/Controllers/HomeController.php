<?php

namespace App\Http\Controllers;

use App\Buying;
use App\Client;
use App\EarningHistory;
use App\Order;
use App\Provisioner;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clients = Client::count();
        $orders = Order::count();
        $workers = Worker::count();
        $provisioners = Provisioner::count();
        $gs_earnings = EarningHistory::sum('earnings');
        $order_income = Order::sum(DB::raw('price*amount'));
        $costs = Buying::sum(DB::raw('price*amount'));
        return view('homepage.index', compact([
            'clients','orders','workers','provisioners',
            'gs_earnings', 'order_income', 'costs'
        ]));
    }


    public function goodbye(){
        auth()->logout();
        return redirect('/login');
    }

}
