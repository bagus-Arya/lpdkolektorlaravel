<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use \App\Models\Staff;
use \App\Models\Nasabah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \App\Models\Token;

class ProfileMobileController extends Controller
{
    public function index(Request $request,Token $token){
        return $request->get('login_user');
    }

    public function update(Request $request,Token $token){
        if($request->get('login_user')->token_type=="Staff"){
            $validate = $request->validate([
                'fullname'=>'required|string',
                'no_telepon'=>'required|string',
                'password'=>'required|string',
                'jenis_kelamin'=>[
                    'required',
                    'string',
                    Rule::in(['Laki-Laki','Perempuan'])
                ]
            ]);
            return Staff::where('id','=',$request->get('login_user')->id)->update($validate);
        }
        return response()->json(['message' => 'Forbiden'], 403);
    }
}