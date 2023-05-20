<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Validator,Auth};
use App\Models\User;


class UserApiController extends Controller
{
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required_with:password|same:password'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status'=>422,
                    'message'=>$validator->messages()
                ]);
            } else { 
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->address = $request->address;
                $user->password = bcrypt($request->password);
                $user->save();
    
                return response()->json([
                 'status'=>200,
                 'message'=>'Data inserted successfully'
                ], 200);
            }
    }
    public function login(Request $request){
         if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]) ){
            $user = Auth::user();
            return response()->json([
                'status'=>1,
                'user'=>$user->email,
                'message'=>'user login successfully'
            
            ]);
         } else {
            return response()->json([
                'status'=>2,
                'message'=>'anauthrized user'
            ]);
            
            
         }
    }
    public function resetpassword(Request $request)
    {
       $user = User::where('email',$request->email)->first();
       if (! $user) {
         return response()->json([
            'status'=>2,
            'messsage'=>'invalid user',
         ]);
       } else {
        $user->password=bcrypt($request->password);
        $user->update();

        return response()->json([
            'status'=>1,
            'message'=>'password reset successfully'
        ]);
       }

       
    }
}
