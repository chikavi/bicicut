<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;
class TicketController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 public function createTicket(Request $request){
        $ticket = Tickets::create($request->all());
        return $ticket;
}
}
