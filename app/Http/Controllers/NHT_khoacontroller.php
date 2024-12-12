<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NHT_khoacontroller extends Controller
{
    //đọc dũ liệu từ database
    public function NHTgetallkhoa()
    {
        //truy vấn dư liệu từ bảng khoa 
        $khoa = DB::select("select * from khoa");
        //chuyễn dữ liệu sang view để hiển thị
        return view('NHT_khoa.NHT_list', ['khoa' => $khoa]);//biến khoa là biến để truyền dữ liệu sang view
    }
    public function NHTgetkhoa($MaKhoa)
    {
        //truy vấn dư liệu từ bảng khoa
        $khoa = DB::select("select * from khoa where makhoa = ?", [$MaKhoa])[0];
        //chuyễn dữ liệu sang view đ
        return view('NHT_khoa.NHT_detail', ['khoa' => $khoa]);
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
        //truy vấn dư liệu từ bảng MH
        $MH = DB::select("select * from khoa where MaKhoa = ?", [$MaKhoa])[0];
        //xóa dữ liệu từ bảng MH
        DB::delete("delete from khoa where MaKhoa = ?", [$MaKhoa]);
        return redirect('NHT_list');
    }
    //update
    public function NHTupdatekhoa(Request $request)
    {
        //lấy dữ liệu từ form
        $MaKhoa = $request->input('MaKhoa');
        $TenKhoa = $request->input('TenKhoa');
        //truy vấn dữ liệu từ bảng khoa
        DB::update("update khoa set tenkhoa = ?", [$TenKhoa,$MaKhoa]);
        return redirect('NHT_list');
    }
    
    //insert -post data from form
    public function NHTinsert(Request $request)
    {
        //kiem tra du lieu nhap
        $request->validate([
            'MaKhoa' => 'required|max:10',
            'TenKhoa' => 'required|max:255'],
            ['MaKhoa.requited'=>'vui long nhap ma khoa', 
            'TenKhoa.requited'=>'vui long nhap ten khoa']);
        //lấy dữ liệu từ form
        $MaKhoa = $request->input('MaKhoa');
        $TenKhoa = $request->input('TenKhoa');
        //truy vấn dữ liệu từ bảng khoa
        DB::insert("insert into khoa (MaKhoa,TenKhoa') values (?,?)", [$MaKHoa,$TenKhoa]);
        //chuyển hướng đến trang list
        return redirect('NHT_list')->with('success', 'Thêm khoa thành công!');

    }


    //tao khoa
    //public function NHTcreatekhoa()
    //{
    //    return view('NHT_khoa.NHT_create');
    //}

     // CreateSubmit - them du lieu khoa
    // public function createSubmit(Request $request)
     //{
    // DB::insert('insert into khoa(MaKH, TenKH) values(?,?)',
     //[$request->MaKH,$request->TenKH]);
     //return redirect('/khoa');
    // }


    //them du lieu khoa
    //public function NHTinsertkhoa(Request $request)
    //{
       //lấy dữ liệu từ form
       // $MaKhoa = $request->input('MaKhoa');
       // $TenKhoa = $request->input('TenKhoa');
        //truy vấn dữ liệu từ bảng khoa
       // DB::insert("insert into khoa (MaKhoa, TenKhoa) values (?, ?)", [$MaKhoa, $TenKhoa]);
        //return redirect('NHT_list');

    //}
    //insert - get data from form
    //public function NHTinsert(Request $request)
    //{
    //    $MaKhoa = $request->input('MaKhoa');
    //    $TenKhoa = $request->input('TenKhoa');
    //    DB::insert('insert into khoa (MaKhoa, TenKhoa) values
    //    (?,?)', [$MaKhoa, $TenKhoa]);
    //    return redirect('NHT_list');
    //}
    
   
















   
}

    