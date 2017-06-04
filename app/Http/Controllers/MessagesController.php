<?php

namespace App\Http\Controllers;


use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages()
    {
        //Lazy loading -> Eager Loading
        return Message::with('user')->get();
    }
}
