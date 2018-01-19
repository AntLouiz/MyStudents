<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentNotification;

class StudentNotificationController extends Controller
{
    public function check(Request $request){
      foreach ($request->all() as $notification) {
        $notification_id = $notification['id'];
        StudentNotification::where('id', $notification_id)
        ->update(['checked' => 1]);
      }
      return StudentNotification::orderBy('id', 'DESC')->get();;
    }
}
