<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments');
    }

    public function store()
    {
        // procedural notification
        request()->user()->notify(new PaymentReceived(900)); // for 1 user every post
        // Notification::send(request()->user(), new PaymentReceived()); // for >1 user every post

        // event-listener notification
        // ProductPurchased::dispatch('toy');
        
        return redirect('/payments')
            ->with('message', 'Notification sent!');
    }
}
