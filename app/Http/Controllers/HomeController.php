<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Mailgun\Mailgun;
// use Mailgun;
use Validator;
use Redirect;
use Input;
use Mail;
use Response;
use Session;


class HomeController extends Controller
{
    public function index() {

    }

    public function sendContactForm (Request $request) {
    	try {
    		$data = Input::all();

    		$receiverAddress = env('MAIL_CONTACT_RECEIVER');

			Mail::to($receiverAddress)->send(new ContactForm($data['data']));
			return Response::json(array(
                'status' => 'success',
                'message' => 'Email send successfully'
            ), 200);
		}
		catch(Exception $e) {
			return Response::json(array(
                'status' => 'error',
                'message' => $e,
            ), 500);
		}
    }
}
