<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHT_khoacontroller extends Controller
{
    //đọc dũ liệu từ database
    public function NHTgetallkhoa()
    {
        //truy vấn dư liệu từ bảng khoa 
        $khoa = DB::select("select * from khoa")->get();
        //chuyễn dữ liệu sang view để hiển thị
        return view('NHT_khoa.NHT_list', ['khoa' => $khoa]);//biến khoa là biến để truyền dữ liệu sang view
    }
    //truy vấn dữ liệu từ bảng khoa theo id
    //public function NHTgetkhoabyid($makhoa)
    //{
        //truy vấn dư liệu từ bảng khoa
      //  $khoa = DB::select("select * from khoa where makhoa = ?", [$makhoa])[0];
        //chuyễn dữ liệu sang view để hiển thị
      //  return view('NHT_khoa.NHT_detail', ['khoa' => $khoa]);
    //}
    
    //edit
    public function NHTeditkhoa($MaKhoa)
    {
        //truy vấn dư liệu từ bảng khoa
        $khoa = DB::select("select * from khoa where makhoa = ?", [$MaKhoa])[0];
        return view('NHT_khoa.NHT_edit', ['khoa' => $khoa]);

    }
    //delete
    public function NHTdeletekhoa($MaKhoa)
    {
        //truy vấn dư liệu từ bảng khoa
        $khoa = DB::select("select * from khoa where makhoa = ?", [$MaKhoa])[0];
        return view('NHT_khoa.NHT_delete', ['khoa' => $khoa]);
    }
    //update
    public function NHTupdatekhoa(Request $request)
    {
        //lấy dữ liệu từ form
        $MaKhoa = $request->input('makhoa');
        $TenKhoa = $request->input('tenkhoa');
        //truy vấn dữ liệu từ bảng khoa
        DB::update("update khoa set tenkhoa = ?", [$TenKhoa,$MaKhoa]);
        return redirect('NHT_listkhoa');
    }
    //tao khoa
    public function NHTcreatekhoa()
    {
        return view('NHT_khoa.NHT_create');
    }

     // CreateSubmit - them du lieu khoa
    // public function createSubmit(Request $request)
     //{
    // DB::insert('insert into khoa(MaKH, TenKH) values(?,?)',
     //[$request->MaKH,$request->TenKH]);
     //return redirect('/khoa');
    // }


    //them du lieu khoa
    public function NHTinsertkhoa(Request $request)
    {
        //lấy dữ liệu từ form
        $MaKhoa = $request->input('MaKhoa');
        $TenKhoa = $request->input('TenKhoa');
        //truy vấn dữ liệu từ bảng khoa
        DB::insert("insert into khoa (MaKhoa,TenKhoa') values (?,?)", [$MaKHoa,$TenKhoa]);
        return redirect('NHT_listkhoa');

    }
   
}

    