<?php


namespace JoeAziz\LaravelPassportModule\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgetPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response(['status' => trans($response)]);
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response(['status' => trans($response)], 422);
    }
}
