<?php
/**
 * @author: Peter Holop <peter.holop@resyst.cz>
 * created: 14.12.2019
 */

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class SendFormController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
//        return (new ContactFormSubmitted($name, $email, $message))->render();
        $recipient = Config::get('mail.send_mail_to_address');
        try {
            Mail::to($recipient)->send(new ContactFormSubmitted($name, $email, $message));
        } catch (\Swift_TransportException $exception) {
            mail($recipient, 'Kontaktní formulář', $name . ', ' . $email . ', Zpráva: ' . $message);
            mail($recipient, 'Chyba při odesílání emailu', $exception->getMessage());
        }
        return Redirect::back()->with('success', 'Děkujeme za zprávu. Co nejdříve se vám ozveme.');
    }
}
