<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductType;
use Auth;
use Validator;
use App\Models\Bill;
use  App\Models\Customer;
use  App\Models\Bill_detail;


class AdminController extends Controller
{
    public function getLoginAdmin()
    {
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $request->validate(
            [
                "email" =>"required|email",
                'password' =>"required|min:6|max:20"
            ],
            [
                "email.required" =>"Chưa  nhập địa chỉ mail",
                "email.email" =>"Địa chỉ mail không đúng định dạng",
                "password.required" =>"Chưa nhập mật  khẩu",
                "password.min"=>"Mật khẩu tối thiểu 6 kí tự",
                "password.max"=>"Mật khẩu tối đa 20 kí tự"
            ]
            );
            $chungthuc = array('email'=>$request->email, 'password'=>$request->password);
            if (Auth::attempt($chungthuc)) {
                return redirect('admin/listbill');
            }else{
                return  redirect()->back(['matb'=>'0','alert'=>"Đăng nhập thất bại"]);
            }
    }

    public function getLogoutAdmin()
    {
            Auth::logout();
            return redirect('admin/login');
    }

    public function getUserInfo()
     {
        if(Auth::check())
        {
            return view('admin.information');
        }
        return redirect('admin/login');
     }

    public function getListType()
    {
        if (Auth::check()) {
        $list_type = ProductType::all();
        return view('type.listType',compact('list_type'));
        }else
        {
            return view('admin.login');
        }
    }

    public function getAdd()
    {
        if (Auth::check()) {
        return view('type.add');
        }else{
        return view('admin.login');
        }
    }

    public function postAdd(Request $request)
    {
      $validate = Validator::make($request->all(),
       
        [   "name" =>"require",
           "description" =>"require"
        ],
       [
           'name.required' =>'Phải nhập tên thể  loại',
           'description.required' =>"Phải nhập description",
       ]);
        $productType = new ProductType;
        $productType->name = $request->name;
        
        $productType->description = $request->description;
        $productType->image = 'null';
        $productType->save();
        return redirect()->back()->with('alert','Đã Thêm thành công');

    }

    public function getDelete($id)
    {
        
        if(Auth::check())
        {
       $list_type = ProductType::find($id);     
        $list_type->delete();      
        return redirect("type/listType")->with('alert','Đã xóa  thành công');
         }else{ 
             return view('admin.login');
         }
        }
   

    public function getUpdate($id)
    {
       if(Auth::check())
       {      
        $list_type = ProductType::find($id);
        return view('type.update',compact('list_type'));
       }else{
           return view('admin.login');
       }
        
    }

    public  function  postUpdate(Request $request, $id)
    {
        $list_type = ProductType::find($id);
        $this->validate($request,
        [
            "name" =>"required",
            "description" =>"required"
        ],
        [
            
    			"name.required" => "Phải nhập tên thể loại",
                "description.required" => "Phải nhập description"
    			
        ]);
        $list_type->name = $request->name;
        $list_type->description = $request->description;
        $list_type ->image = 'null';
        $list_type->save();
       return redirect()->back()->with('alert','Đã cập nhật thành công');
    }

    public function getBills() {
        if(Auth::check()) {
            $bill = Bill::join('customer','customer.id','=','bill.id_customer')->get(['bill.id','bill.date_order','customer.name','bill.total','bill.payment','bill.note','bill.state']);
            return view('admin.listBill',compact('bill'));
        }
        else
        {
            return view('admin.login');
        }
    }
    public function getEditBills($id) 
    {
        $dhg =Bill::find($id);
        $cus =Customer::find($dhg->id_customer);
        $ct_dhg = Bill_detail::where('id_bill','=',$dhg->id)
                                ->join('products','products.id','=','Bill_Detail.id_product')
                                ->get(['products.name','bill_detail.quantity','bill_Detail.unit_price']);
        return  view('admin.detailbill',compact('dhg',"cus",'ct_dhg'));
    }
    public function postEditBills(Request $request, $id)
    {
        $dhg =  Bill::find($id);
        $dhg->state =$request->state;
        $dhg->save();
        return  redirect()->back()->with('alert',"Đã  câp nhập thành công");
    }
    public function getCustomer()
    {
        if(Auth::check())
        {
            $customer = Customer::all();
            return view('admin.listCustomer',compact('customer'));
        }
        else
        {
            return view('admin.login');
        }
    }
        public function deleteCustomer($id)
    {
        $cusnum = Bill::where('id_customer','=',$id)->count();
        if($cusnum == 0)
        {
            $cus = Customer::find($id);
            $cus->delete();
            return redirect()->back()->with('alert','Đã xóa  khách  hàng thành công');
        }
        else
        {
            return redirect()->back()->with('alert','Khách hàng  đã có đơn đặt hàng,không xóa được');
        }
    }
   
    
}
