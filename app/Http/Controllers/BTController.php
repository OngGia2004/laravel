<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BTController extends Controller
{
    //Hiện phần tính
    public function hinhchunhat($cd=null, $cr=null)
    {
        
        
        if($cd == null ||  $cr== null)
            {
                $kq="";
            }
            else
            {   
                
                //$chuvi =((int)$chieurong + (int)$chieudai) * 2;
                $dt = $cd * $cr;
               // $tinh = "Chu vi hình chữ nhật la:".$chuvi;
                $kq =  "Dien  tích  hình chữ nhật là:" .$dt;
                
            }
            return view("buoi3.hinh",compact("kq"));
            
        
    }

    


    //Hiện câu chào
    public function chucmung($nam = null,$ten = null)
    {
        if($nam == null && $ten == null)
        {
            $cauchao="";
        }
        else
        {
            $tuoi = 2021- $nam;
            $cauchao = "Chúc mừng sinh nhật lần thứ".$tuoi."của".$ten;
        }
        return view("buoi3.vidu01",compact("cauchao"));
    }
  

    //Giari phương trình bâc 1
    public  function giaiptbac1($a = null,$b = null)
        {
            if($a == null && $b == null)
            {
                $kq = "";
            }
            else
            {
                if($a == 0)
                {
                    if($b == 0)
                        $kq = "Phương trình vô nghiệm";
                    else
                        $kq = "Phương trình có vô số nghiệm";
                }
                else
                {
                    $x = -$b/$a;
                    $kq = "Phương trình có nghiệm kép x = ". number_format($x,2);
                }
            }
            return view('buoi3.vidu2',compact("kq"));
        }

//buổi 4
 public function get_xemketqua()
        {
            return view('buoi4.form');
        }
 public function post_xemketqua(request $tt)
 {
      $ht = $tt->hoten;
      $lt = $tt-> lythuyet;
      $th = $tt-> thuchanh;
      
      //xem
      if ($ht == null || $lt == null || $th == null)
      {
       $kq = "Ban chưa nhập thông tin cần điền";
      }
       else
       
         {  $kq =($lt + $th) / 2;
                switch ($kq){
                    case ($kq > 8):
                        $kq = "Họ và Tên:" . $ht . "có kết quả là:" .$kq . "được học sinh xuất sắc";
                        break;
                    case ($kq < 8):
                        $kq  ="Họ và Tên" .$ht . "có kết quả là:". $kq . "được học sinh tiên tiến";
                        break;
                            }

        return view("buoi4.form",compact('ht','lt','th','kq'));
                        }
 }



//Buổi 5
public function layout(){
        return view("buoi5.layout");
    }
 public function get_tiendien()
    {
        return view("buoi5.tiendien");
    }
public function post_tiendien(request $dien)
{
    $csc= $dien->csc;
    $csm = $dien->csm;
    $dg = $dien->dongia;

    if (is_numeric($csc) && is_numeric($csm) && is_numeric($dg))
        {
            if($csm > $csc)
            {
                $tieuthu = $csm - $csc;
                $tien = $tieuthu * $dg;
            }
            else
            {
                $tien = "chỉ số mới phải lớn hơn chỉ số cũ";
            }
        }
    else
        {
            $tien ="Chưa nhập giá trị hoặc nhập không hợp lệ";
        }
    return view("buoi5.tiendien", compact("csm","csc","dg","tien"));
}

//thi đai học
 public function get_thidaihoc()
 {
     return view("buoi5.thidaihoc");
 }
 public function post_thidaihoc(Request $d)
 {
        $t = $d->toan;
        $l =$d->ly;
        $h = $d->hoa;
        $dc= $d->diemchuan;
        $td = $d->tongdiem;
        $x = $d->xet;
     if(is_numeric($t)  &&  is_numeric($l) && is_numeric($h) && is_numeric($dc))
        {
            $td = $t + $l + $h;
         if($td > $dc)
            {
                
               $x = "Đỗ Đại học" ;
            }
        else 
            {
                $x = "trượt đại hoc";
            }
         }
     else
     {
         $x ="bạn nên nhập giá trị ";
     }
        return view("buoi5.thidaihoc",compact("t","l","h","dc","x","td"));
 }
 //ketquathi
 public function get_ketquathi(){
     return view('buoi5.ketquathi');
 }
 public function post_ketquathi(request $d)
 {
    $dhk1 = $d->diemhk1;
    $dhk2 = $d->diemhk2;
    $dtb = $d ->diemtb;
    $kq = $d->ketqua;
    $xl = $d->xeploai;
        if (is_numeric($dhk1) && is_numeric($dhk2))
        {
            $dtb = ($dhk1 + $dhk2)/2;
        
            if($dtb > 8)
            {               
                 $xl = "là học sinh giỏi";
                $kq = "được lên lớp";
            }
            elseif($dtb < 8)
            {
                $xl = "là học sinh khá";
                $kq ="được lên lớp";
            }
            else
            {
                $xl = "là học sinh kém";
                $kq= "ở lại lớp";
            }
        }
        else
        {
            $kq = "bạn phải nhập giá trị";
        }
    return view("buoi5.ketquathi",compact("dhk1","dhk2","dtb","xl","kq"));
 }

 //tính cạnh huyền
 public function xemketqua(){
     return view("buoi5.canhhuyen");
 }
 public function xemketqua1(request $a)
 {
     $ca = $a->canha;
     $cb = $a->canhb;
     if(is_numeric($ca) && is_numeric($cb))
     {
        $ch =sqrt(pow(($ca),2) + pow(($cb),2));
     }
    else
    {
        $ch = "Bạn không nên bỏ trống";
    }
    return view('buoi5.canhhuyen',compact("ch","ca","cb"));
    }

    //upload file to
    public function get_taifile()
        {
            return view("buoi5.taifile");
        }
    public function post_taifile(request $tai)
    {
        if($tai->hasFile('taptin')) {
            $file = $tai->file('taptin');
            $fn = $file->getClientOriginalName();
            $ex = $file->getClientOriginalExtension();

            if ($ex == "jpg" || $ex == "png" || $ex == "gif") {
                //di chuyền file vào thư mục
                $tentaptin =  time() . "." .$ex;
                $file->move("img",$tentaptin);
                $kq = "Đã tải file thành công";
            }
            else
            {
                $kq = $fn . "Không la tin hinh";
            }
        }
    else
    {
        $fn = "";
        $ex = "";
        $kq = "Bạn chưa chon tập tin";
    }
    return view("buoi5.taifile",compact("tentaptin","kq","ex"));
    }
 };

