<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginpage(){
        return view('login');
    }
    public function createpage(){
        return view('join',['error'=>'']);
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        if(sizeof(User::where('email',$email)->get())<1) {
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password)
            ]);

            return redirect('login');
        }else{
            return view('join',['error'=>'이미 등록된 email입니다']);
        }

    }

    public function login(Request $request){
        $email = $request -> email;
        $password = $request -> password;
        $credentials = ['email'=>$email,'password'=>$password];
//        $isLogin = User::where([['email','=',$email],['password','=',$password],])->get();
//        if(sizeof($isLogin)>=1){
//           View::share(['isLogin'=>$isLogin[0]]);
//            $rows = Article::paginate(3);
//            return view('index',['rows'=>$rows]);
//        }else{
//            return redirect('login');
//        }
        if(! auth()->attempt($credentials)){
            return "로그인정보가 정확하지 않습니다.";
        }
        $rows=Article::paginate(3);
        return view('index',['rows'=>$rows,'login'=>auth()->user()]);
    }

    public function logout(){
        auth()->logout();

        return redirect('login');
    }
}
