<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppController extends Controller
{
       // Question 1
       function UserName(Request $request):string{
        $name = $request->input('name');
        return $name;
    }

       // Question 2
       function UserAgent(Request $request):string{
        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }

     // Question 3
    function ApiEndpoint(Request $request){
        $page = $request->query('page',null);
        if($page !== null){
            return $page;
        }else{
            return;
        }
    }


       function JsonResponse(Request $request):jsonresponse{
        $data = array(
            "message"=> "Success",
            "data"=>array(
                "name"=> "Shovan Nag",
                "age"=> 32
            )
        );
        return response()->json($data);
    }


      // Question 5
      function FileUploads(Request $request):bool{
        $file=$request->file('photo');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        return true;
    }


        // Question 6
        function SetCookie(Request $request){
            $rememberToken = $request->cookie('remember_token',null);
            return $rememberToken;
        }
    
}
