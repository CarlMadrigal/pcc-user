<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    function deleteAll(Request $request) {
        Notification::truncate();
        return redirect('/notification');
    }
    function delete(Request $request) {
        $notif = Notification::find($request->id);
        $notif->delete();
        return redirect('/notification');
    }
}
