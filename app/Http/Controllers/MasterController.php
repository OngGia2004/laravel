<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Cart;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\Bill_detail;


use Illuminate\Support\Facades\Session;


class MasterController extends Controller
{
    public function getIndex()
    {   $slide = Slide::all();
        $new_product  = Product::where('new','=',0)->paginate(4,["*"],"newp");
        $pro_product  = Product::where('new','=',1)->paginate(4,["*"],"prop");

        return view('page.index',compact('slide',"new_product","pro_product"));
    }
    public function product_type($type)
    {
        $loai = ProductType::where('id','=',$type)->first();
        $danhsach_loai  = ProductType::all();
        $sp_theloai = Product::where('id_type','=',$type)->get();
        $sp_khac =Product ::where('id_type','!=',$type)->paginate(5);
        return view('page.product_type',compact('sp_theloai','loai','danhsach_loai','sp_khac'));
    }
    public function  product(Request $request) 
    {
        $sanpham =Product::where('id','=',$request->id)->first();
        $sp_tuongtu = Product::where('id_type','=',$sanpham->id_type)->get();
        $new_product =Product::where('new','=',0)->simplePaginate(3);
        return view('page.product',compact('sanpham',"sp_tuongtu","new_product"));
    }
    public function addCart(Request $request, $id) 
    {
        $product  = Product::find($id);
        $oldcart = Session('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldcart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);

        return redirect()->back();
    }

    public function deleteCart($id)
    {
        $oldcart = Session('cart') ? Session::get('cart')  :null;

        $cart  =  new Cart($oldcart);
        $cart->reduceByOne($id);
        
        if (count($cart->items) > 0)
            {
                Session::put('cart',$cart);
            }
        else
            {
                Session::forget('cart');
            }
        return redirect()->back();
    }

    public function getXoahet($id)
    {
        $oldcart = Session('cart') ? Session::get('cart')  :null;

        $cart  =  new Cart($oldcart);
        $cart->removeItem($id);
        if (count($cart->items) > 0)
            {
                Session::put('cart',$cart);
            }
        else
            {
                Session::forget('cart');
            }
        return redirect()->back();
    }

    public function getContact()
    {
        return view('page.contacts');
    }

    public function getAbout()
    {
        return view('page.about');
    }

    public function getcheckout()
    {
        return view('page.checkout');
    }
    public function postcheckout(Request $request )
    {
        $cart = session::get('cart');
        $cus = new Customer;
        $cus->name = $request->name;
        $cus->gender = $request->gender;
        $cus->email = $request->email;
        $cus->address = $request->address;
        $cus->phone_number =$request->phone_number;
        $cus->save();

        $bill = new Bill;
        $bill->id_customer = $cus->id;
        $bill->date_order =date('Y-m-d');
        $bill->total  =  $cart->totalPrice;
        $bill->payment = $request->payment;
        $bill->note = $request->note;
        $bill->save();

        foreach  ($cart->items as $key =>$value) 
        {
                $bd  =  new Bill_detail;
                $bd->id_bill = $bill->id;
                $bd->id_product  = $key;
                $bd->quantity = $value['qty'];
                $bd->unit_price = ($value['price']  / $value ["qty"]);
                $bd->save();
        }
        Session::forget('cart');
        return view('page.alert');

    }
    public function getAlert()
    {
        return view('page.alert');
    }
 
}
