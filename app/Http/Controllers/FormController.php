<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Auth;

class FormController extends Controller
{
    public function getLogin()
    {
        return view('page.login');
    }
   public function  postLogin(Request $request)
    {
         $this->validate($request, 
        [
             'email' =>  "required|email",
             "password" => 'required|min:6|max:20'     
         ],
        [
            'email.required' => "Chưa nhập địa chỉ mail",
             'email.email' => "Địa chỉ mail không  đúng định dạng",
            'password.required' => "Chưa  nhập mật khẩu",
            'password.min' => 'Mật  khẩu tối thiểu  6 kí tự',
            'password.max' => 'Mật khẩu  tối đa 20 kí tự'
        ]);
        $chungthuc = array('email'=>$request->email, 'password'=>$request->password);
         if(Auth::attempt($chungthuc))
        {
            return  redirect('index');
        }else
         {
            return redirect()->back()->with(['matb' => '0','noidung' =>"Đăng  nhập thất bại"]);
        }       
     }
     public function getSignup()
    {
        return view('page.signup');
   }
     public  function postSignup(Request $request)
     {
        $validate = $request->validate(
             [
                 'email' => 'required|email|unique:users',
                'password'  => 'required|min:6|max:20',
                'repassword' => 'required|same:password',
                'name' =>'required'
            ],
            [
                'email.required'=>'Vui  lòng  nhập  địa chỉ thư',
                'email.email'=>"Địa chỉ thư không đúng  định dạng",
                'email.unique' =>'Email này đã có người đăng kí',
                'password.required'=>"Chưa nhập mật  khẩu",
                'password.min'=>"Mật khẩu tối thiểu 6 kí  tự",
                'password.max'=>'Mật  khẩu  tối đa 20 kí Tự',
                'repassword.same'=>'Mật khẩu không  giống nhau',
               'repassword.required'=>"Chưa nhập lại mật khẩu",
               'name.required'=>'Chưa nhập họ và tên'
            ]
        );
        $user = new User;
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('alert','Đăng kí thành công');
     }
     public function getDangxuat()
    {
        Auth::logout();
         return redirect('index');
     }

     public function getTimKiem(Request $request)
     {
         $product = Product::where('name','like',"%".$request->key."%")
                                    ->orWhere('unit_price',$request->key)
                                    ->get();
            return view('page.timkiem',compact('product'));
     }
 }