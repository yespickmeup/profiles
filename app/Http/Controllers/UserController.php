<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

    public function getUsers() {
        $users = User::All();
        return response()->json(['users' => $users]);
    }
    
    public function postRegister(Request $request) {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        if ($user->save()) {
            return response()->json(['message:' => $user]);
        }
        return response()->json(['message:' => 'error']);
    }

}
