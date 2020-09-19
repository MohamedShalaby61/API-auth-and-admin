<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;


class UserVerificationController extends Controller
{

	public function verificationService()
	{
		$sid    = "AC5e989ebdd25a7281f087c3e6743ffb6b";
		$token  = "3b4a6b1894cab0be3f8d19a8f4a67db8";
		$twilio = new Client($sid, $token);

		$service = $twilio->verify->v2->services->create("My First Verify Service");

		print($service->sid); //VA50d420671dc2d889a399592db0e20760

	}


	public function sendVerificationTokens(Request $request)
	{
			$sid    = "AC5e989ebdd25a7281f087c3e6743ffb6b";
			$token  = "3b4a6b1894cab0be3f8d19a8f4a67db8";
			$twilio = new Client($sid, $token);

			$verification = $twilio->verify->v2->services("VA50d420671dc2d889a399592db0e20760")
			                                   ->verifications
			                                   ->create($request->phone_number, "sms");

			print($verification->status);
	}

	public function checkVerificationToken(Request $request)
	{
		$sid    = "AC5e989ebdd25a7281f087c3e6743ffb6b";
		$token  = "3b4a6b1894cab0be3f8d19a8f4a67db8";
		$twilio = new Client($sid, $token);

		$verification_check = $twilio->verify->v2->services("VA50d420671dc2d889a399592db0e20760")
		                                         ->verificationChecks
		                                         ->create("123456", // code
		                                                  ["to" => $request->phone_number]
		                                         );

		print($verification_check->status);
	}
    
}
