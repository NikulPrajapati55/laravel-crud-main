<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeemail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function mailsubmit(Request $request)
    {
        // dd($request->all());
        $data = [
            'to' => 'nikulprajapati203@gmail.com',
            'subject' => 'Website Inquiry - test',
            'firstname' => $request->first_name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ];
        $mail = Mail::send('mail.mail-template', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['firstname']);
            $message->sender('nikulprajapati203@gmail.com');
            $message->to($data['to'], $data['firstname']);
            $message->subject($data['subject']);
            $message->priority(3);
        });
        return redirect()->back()->with('success', 'Mail sent successfully!');

    }
}








