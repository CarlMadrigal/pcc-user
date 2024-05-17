<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Carabao;
use App\Models\Cooperative;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    function redirectToHomepage(Request $request) {
        if(Auth::check()){
            $carabao = Auth::user()->carabaos;
            return view('home', [
                'carabaos' => $carabao
            ]);
        }       
        $coophead = Cooperative::all();
        return view('login', [
            'coopheads' => $coophead
        ]);
    }
    
    function redirectToContractsPage(Request $request){
        return view('mycontracts');
    }
    
    function redirectToFilePage(Request $request){
        return view('fileContainer');
    }

    function redirectToCarabaoPage(Request $request){
        $carabao = Auth::user()->carabaos;
        return view('mycarabao', [
            'carabaos' => $carabao
        ]);
    }

    function redirectToCarabaoDetailsPage(Request $request){
        $id = request()->route('id');
        $carabao = Carabao::find($id);
        if (!$carabao) {
            flash()->addError('Carabao not found!');
            return redirect('/carabao');
        }
        return view('carabao', [
            'carabao' => $carabao
        ]);
    }

    function redirectToNotificationpage(Request $request){
        $notif = Auth::user()->notifications()->orderBy('created_at', 'desc')->get();
        return view('notifications', [
            'notifs' => $notif
        ]);
    }

    function redirectToAboutUspage(Request $request){
        return view('aboutUs');
    }
    
    function redirectToHelppage(Request $request){
        return view('helpcenter');
    }
    
    function redirectToProfilepage(Request $request){
        return view('myprofile');
    }
}