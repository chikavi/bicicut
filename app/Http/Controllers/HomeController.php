<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;
use Carbon\Carbon;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $ticket = Tickets::all()->where("user_id","==",Auth::user()->id)->last();
        if($ticket){
            $now = $ticket->created_at->addMinutes(30)->toDateTimeString();
        }else{
            $now = "";
        }
        return view('home')->with(compact('ticket','now'));
    }
    
    }

