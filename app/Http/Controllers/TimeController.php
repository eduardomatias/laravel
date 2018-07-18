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
        $pagination = 10;
        try {

            $request->validate([
                'id' => 'numeric|exists:times,id',
            ]);
 
            if (!empty($request->id)) {
                $times = Time::where('id', $request->id)->paginate(1);

            } else if (!empty($request->nome)) {
                $times = Time::where('nome', 'like', '%' . $request->nome . '%')->paginate($pagination);

            } else {
                $times = Time::paginate($pagination);
                
            } 

        } catch (\Exception $e) {
            dd($e);
        }
        
        return view('times.index', ['times' => $times]);
        //return $return;
    }
}
