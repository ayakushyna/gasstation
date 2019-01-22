<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PositionController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $positions = Position::orderBy('title')->get();

        return view('positions.index', compact('positions'));
    }

    public function create()
    {
        return view('positions.create');
    }

    public function edit(Position $position)
    {
        return view('positions.edit', compact('position'));
    }

    public function store()
    {
        $validator = Validator::make( request()->all(),[
            'title' => 'required|max:50',
            'salary'=>'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('positions.create')->withErrors($validator)->withInput();
        }

        Position::insert([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect()->route('positions');
    }

    public function update(Position $position)
    {
        $validator = Validator::make( request()->all(),[
            'title' => 'required|max:50',
            'salary'=>'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('positions.edit')->withErrors($validator)->withInput();
        }

        Position::where('id',$position->id)->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect()->route('positions');
    }

    public function delete(Request $request){
        $positions_id = $request->get('check');
        Position::destroy($positions_id);
        /* $check = Request::input('check');
         Fuel::whereIn('id',$check)->delete();*/


        return back();
    }
}
