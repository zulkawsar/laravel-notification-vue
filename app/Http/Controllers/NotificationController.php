<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
   	public function get()
   	{
   		$notification = Auth::user()->unreadNotifications;
   		return $notification;
   	}

   	// make notification as read
   	public function read(Request $request)
   	{
   		Auth::user()->unreadNotifications()->find($request->id)->markAsRead();
   		return 'success';	
   	}
}
