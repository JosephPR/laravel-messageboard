<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request) {
      $message = new Message();
      $message->title = $request->title;
      $message->content = $request->content;

      $message->save();

      return redirect('/');
    }

    public function show($id) {
      $message = Message::findOrFail($id);
      return view('message', [
        'message' => $message
      ]);
    }

    public function edit($id)
    {
      $message = Message::find($id);
      return view('edit', [
        'message' => $message
      ]);
    }
}
