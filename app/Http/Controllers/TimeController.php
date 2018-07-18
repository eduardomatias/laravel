<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;

class TimeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        $times = null;
        try {

            $request->validate([
                'id' => 'numeric|exists:times,id',
            ]);

            $times = empty($request->id) ? Time::paginate(15) : Time::where('id', $request->id)->get();

        } catch (\Exception $e) {
            dd($e);
        }
        
        return view('times.index', ['times' => $times]);
        //return $return;
    }
}
