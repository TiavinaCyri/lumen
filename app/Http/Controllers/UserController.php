<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Client\Request;

class UserController extends Controller
{
    public function showAllUsers()
    {
        return User::with('devices','devices.state','devices.device_action')->get()->toJson();
    }

    public function showOneUser($id)
    {
        $data = User::with('devices','devices.state','devices.device_action')->find($id);
        if($data){
            return response()->json($data, 200);
        }else{ 
            return response()->json("Pas de donnée", 404);
        }
    }

    public function create(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return response('Suppression réussie', 200);
    }

    public function update($id , Request $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }
}