<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.layouts.app_admin');
    }
    
    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();
        
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $success['token'] = $admin->createToken('MyApp')->accessToken;
                return response()->json(['success' => $success], 200);
            } else {
                return response()->json(['error' => 'Password missmatch'], 422);
            }
        } else {
            return response()->json(['error' => 'User does not exist'], 422);
        }

    }

    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'job_title' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()], 401);
        }
        
        $request['password'] = Hash::make($request['password']);
        $admin = Admin::create($request->toArray());
        
        $success['token'] = $admin->createToken('MyApp')->accessToken;
        $success['name'] = $admin->name;

        return response()->json(['success' => $success], 200);
    }
    
    /**
     * Logout admin (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        
        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
    }
    
    public function currentUser(Request $request) {
        //$user = Auth::guard('admin-api')->user();
        //$success['token'] = $user->createToken('MyApp')->accessToken;
        $success['user'] = $request->user()->name;
        return response()->json(['success' => $success], 200);
    }
}