<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $getChat = Chat::with('vendors', 'users', 'products')->get()->toArray();

        //   echo "<pre>"; print_r($getChat);die;

        return view('vendors_view.chat.index')->with('getChat', $getChat);
    }

    public function chatStore(Request $request)
    {
        $chat = new Chat;
        if ($request->isMethod('post')) {
            $data = $request->all();
            $chat->user_id = $data['user_id'];
            $chat->vendor_id = $data['vendor_id'];
            $chat->product_id = $data['product_id'];
            $chat->messages = $data['messages'];
            // dd( $chat );
            $chat->save();
            // Session::flash('success_message',$message);
            return redirect()->back();
        }
    }


}
