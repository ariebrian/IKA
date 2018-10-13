<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {
        $request->validate(
            [
                'no_identitas' => 'required|string|max:255',
                'nama' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'role' => 'required|string',
            ]
        );

        $user = new User([
            'no_identitas' => $request->no_identitas,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $user->save();  

        return response()->json([
            'message' => 'Successfully registered'
        ],201);

    }
    /**
     * Login and create token
     */
    public function login(Request $request)
    {
        $request->validate([
            'no_identitas'=>'required|string|',
            'password' => 'required|string',
        ]);

        // $credentials = request(['no_identitas,password']);
        $npm = $request->no_identitas;
        // dd($npm);
        $temp_user = User::where('no_identitas',$npm)->first();
        // dd($temp_user);
        $password = Hash::check($request->password,$temp_user->password);
        // dd($password);
        if ($password != true) {
            return response()->json([
                'message' => 'Unauthorized',
            ],401);
        }
        else{
            $user = $temp_user;
            // dd($user);
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;

            $token->save();

            return response()->json([
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString()
            ]);
        }
    }
    /**
     * logout
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get authenticated user
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}