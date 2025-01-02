<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $emailData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'msg_subject' => $validatedData['subject'],
            'message_body' => $validatedData['message'],
        ];

        // Mail::send('emails.contact', $emailData, function ($mail) use ($emailData) {
        //     $mail->to('recipient@example.com') // Replace with your email
        //          ->subject($emailData['subject']);
        // });
          // $userEmail = $request->email;
          Mail::to("info@ohaechesifoundation.com")->send(new ContactMessage($emailData));
          return response()->json(['success' => true]);
        //   if (Mail::failures()) {
        //       //  return response()->Fail('Sorry! Please try again latter');
        //       return response()->json(['status'=>400,'data'=>'Message was not sent, please check your network and try again']);
        //   }else{
        //       //  return response()->success('Great! Successfully send in your mail');
        //       return response()->json(['success' => true]);
        //      }

       
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function clearCache(): View
    {
        Artisan::call('cache:clear');

        return view('clear-cache');
    }
}
