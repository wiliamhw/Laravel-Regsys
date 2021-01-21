<?php

namespace App\Http\Controllers;

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
        request()->user()->notify(new PaymentReceived()); // for 1 user every post
        // Notification::send(request()->user(), new PaymentReceived()); // for >1 user every post

        return redirect('/payments')
            ->with('message', 'Notification sent!');
    }
}
