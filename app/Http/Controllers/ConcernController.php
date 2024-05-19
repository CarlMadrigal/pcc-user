<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConcernController extends Controller
{
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,id',
            'recipient' => 'required',
            'message' => 'required'
        ], [
            'id.required' => 'User is required',
            'id.exists' => 'User does not exist',
            'recipient.required' => 'Recipient is required',
            'message.required' => 'Message is required',
        ]);
        
        if($validator->fails()){
            $message = $validator->messages()->all()[0];
            flash()->addError($message);
            return back()->withInput();
        }else{
            $concern_form = [
                'user_id' => $request->id,
                'recipient' => $request->recipient,
                'message' => $request->message
            ];

            $notification = [
                'cooperative_id' => User::find($request->id)->cooperative->id,
                'user_id' => $request->id,
                'title' => 'New Concern Submitted',
                'message' => User::find($request->id)->name.' submitted a new concern'
            ];
            Notification::create($notification);

            Concern::create($concern_form);
            flash()->addSuccess('Concern added successfully');
            return back();
        }
    }
}
