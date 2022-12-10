<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $getChat = Chat::with('vendors', 'users', 'products')->groupBy('user_id')->get()->toArray();

        //   echo "<pre>"; print_r($getChat);die;

        return view('vendors_view.chat.index')->with('getChat', $getChat);
    }
    public function chatDetails($name)
    {
        $getChat = Chat::with('vendors', 'users', 'products')->where('vendor_id', Auth::guard('vendor')->user()->id)->groupBy('user_id')->get()->toArray();
        
        $userID = User::where('name', $name)->first()->toArray();

        $getMessage = Chat::where('user_id', $userID['id'])->with('vendors', 'users', 'products')->get()->toArray();

        $getCustomer = Chat::with('vendors', 'users', 'products')->first()->toArray(); 

        $getVendorMessage = ChatMessage::where('chat_id', $getCustomer['id'])->with('vendors:id', 'users', 'chats:id',)->get()->toArray();

        //   echo "<pre>"; print_r($getChat);die;

        return view('vendors_view.chat.vendor_chat')
            ->with('getChat', $getChat)
            ->with('getCustomer', $getCustomer)
            ->with('getVendorMessage', $getVendorMessage)
            ->with('userID', $userID)
            ->with('getMessage', $getMessage);
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
