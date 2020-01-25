<?php


namespace Joeaziz\LaravelPassportModule\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassportAuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $this->validate($request, [
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required|confirmed"
        ]);

        // we convert plane password to hashed one
        $data["password"] = bcrypt($data["password"]);

        /**
         * @var User $user
         */
        $user = User::create($data);
        $token = $user->createToken("authToken")->accessToken;
        return response(["token" => $token, "user" => $user]);
    }


    public function login(Request $request)
    {
        $data = $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);

        if (!auth()->attempt($data))
            return response(["message", "sorry"], 422);

        $token = auth()->user()->createToken("authToken")->accessToken;
        return response(["token" => $token]);
    }

}
