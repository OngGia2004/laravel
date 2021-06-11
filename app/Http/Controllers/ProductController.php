<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getList()
    {
        $product = Product::orderBy('id', 'ASC')->paginate(5);
        return view('type.listProduct',compact('product'));
    }
    public function getProduct()
    {
        $list_type = ProductType::all();

        return view('type.addProduct',compact('list_type'));
    }
    public function postProduct(Request $request)
    {
        

      
        $product = Validator::make($request->all(), 
         [
            
             'name'=>"required|unique:Product|min:10|max:20",
             "productType"=>'required',
           'id_type'=>'required|unique:product',
            'description'=>'required',
             'unit_price'=>"required|numeric",
             'promotion_price'=>"required|numeric",
            'new'=>"required|numeric",
            'unit'=>"required",
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ],
         [
             'name.required'=>"Bạn chưa nhập tên sản phẩm",
             'name.unique'=>'Tên sản phẩm đã bị trùng',
             'name.min'=>"Tên sản phẩm không được ngắn hơn 10 kí tự",
             'name.max'=>'Tên sản phẩm không được dài hơn 20 kí tự',
             'productType.required'=>"Bạn chưa chọn thể loại sản phẩm",
             'id_type.required'=>"Bạn chưa nhập id sản phẩm",
             "id_type.unique"=>"Id sản phẩm bị trùng",
             "description.required"=>"Bạn chưa nhập kí tự",
             "unit_price.required"=>"Bạn nên nhập giá gốc của sản phẩm",
             "unit_price.numeric"=>"Gía sản phẩm phải là số",
             "promotion_price.required"=>"Bạn nên nhập giá khuyến mại của sản phẩm",
             "promotion_price.numeric"=>"Gía sản phẩm phải là số",
             "new.required"=>"Bạn nên nhập kí tự",
            "new.numeric"=>"kí tự nên là con số",
            "unit.required"=>"Bạn nên Nhập kí tự",
              "image.required"=>"Chưa chọn hình ảnh loại sản phẩm",
              "image.mines"=>"Chọn tập tin:jpg,png,git,svg"
             ]);
            // dd($request->all());
             $filename = $request->file('image')->getClientOriginalName();
            $product = new Product;
            $product->name = $request->name;
            $product->id_type = $request->id_type;
            $product->description = $request->description;
            $product->unit_price = $request->unit_price;
            $product->promotion_price = $request->promotion_price;
            $product->new = $request->new;
            $product->unit = $request->unit;
             $product->image =$filename;
            
            $product->save();
             $path = $request->file('image')->move('source/image/image',$filename);
            return redirect()->back()->with('alert',"Thêm thành công");
     }
      public function deleteProduct($id)
    {
        if(Auth::check())
        {
            $product = Product::find($id);      
            $product->delete();   
            return redirect('type/listProduct')->with('alert',"Xóa  Thành Công");
        }else
        {
            return  redirect('admin.login');
        }
        
    }

    public function getUpdateProduct($id)
    {
        {
          
            $product = Product::find($id);
            $list_type = ProductType::all();
            return view('type.updateProduct',compact('list_type','product'));
          
        }
    }
    public function postUpdateProduct(Request $request,$id)

    {
        $product = Product::find($id);
        $this->validate($request, 
                  [
                         'name'=>"required",
                         'id_type'=>'required',
                          'description'=>'required',
                         'unit_price'=>"required|numeric",
                         'promotion_price'=>"required|numeric",
                         'new'=>"required|numeric",
                          'unit'=>"required",
                         "image"=>"required|image|mimes:jpg,png,jpeg,git,svg|max:2048"
            
                     ],
                     [
                          'name.required'=>"Bạn chưa nhập tên sản phẩm",
                          'name.unique'=>'Tên sản phẩm đã bị trùng',
                          'productType.required'=>"Bạn chưa chọn thể loại sản phẩm",
                         'id_type.required'=>"Bạn chưa nhập id sản phẩm",
                          "id_type.unique"=>"Id sản phẩm bị trùng",
                      "description.required"=>"Bạn chưa nhập kí tự",
                          "unit_price.required"=>"Bạn nên nhập giá gốc của sản phẩm",
                         "unit_price.numeric"=>"Gía sản phẩm phải là số",
                          "promotion_price.required"=>"Bạn nên nhập giá khuyến mại của sản phẩm",
                         "promotion_price.numeric"=>"Gía sản phẩm phải là số",
                          "new.required"=>"Bạn nên nhập kí tự",
                          "new.numeric"=>"kí tự nên là con số",
                          "unit.required"=>"Bạn nên Nhập kí tự",
                         "image.required"=>"Chưa chọn hình ảnh loại sản phẩm",
                          "image.mines"=>"Chọn tập tin:jpg,png,git,svg"
                      ]);
                        if($request->file('image')->getClientOriginalName() != null)
                        {
                           $filename = $request->file('image')->getClientOriginalName();
                        }
                        else
                        {
                            $filename ="";
                        }
                        $product->name = $request->name;
                         $product->id_type = $request->id_type;
                         $product->description = $request->description;
                        $product->unit_price = $request->unit_price;
                        $product->promotion_price = $request->promotion_price;
                        $product->new = $request->new;
                        $product->unit = $request->unit;
                      if($filename!="")
                      {
                          $product->image = $filename;
                         $path = $request->file('image')->move('source/image/image',$filename);

                      }
                        $product->save();
                        //  $path = $request->file('image')->move('source/image/image',$filename);
                        return redirect()->back()->with('alert',"Thêm thành công");
                     }
                    }

