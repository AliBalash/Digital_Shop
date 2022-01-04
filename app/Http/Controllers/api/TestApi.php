<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Response;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TestApi extends Controller
{
    private $password;
    public function testApi()
    {
        return response()->json(User::paginate(2), 200);
//        return User::paginate(2);

    }

    public function show(User $user)
    {
        return response()->json(User::find($user),200);
    }

    public function createUser(Request $request)
    {
        $this->password = Hash::make($request->password);

        $valid = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'role' => 'required|in:ADM,USR',
            'password' => 'required|min:8',
        ]);
        if ($valid->fails()){
            return Response()->json($valid->errors(), 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $this->password,
            'role' => $request->role,
        ]);
        return response()->json($user, 201);
    }

    public function updateUser(Request $request,User $user)
    {
        $user->update($request->all());

        return response()->json($user,200);
    }

    public function deleteUser(Request $request, User $user)
    {
        $user->delete();
        return response()->json('DELETED USER',200);

    }
}
