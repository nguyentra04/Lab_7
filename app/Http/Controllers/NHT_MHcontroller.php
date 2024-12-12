<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHT_MHcontroller extends Controller
{
    //đoc dũ liệu từ database
    public function NHTgetallMH()
    {
        //truy vấn dư liệu từ bảng MH
        $MH = DB::select("select * from monhoc")->get();
        //chuyễn dữ liệu sang view để hiển thị
        return view('NHT_MH.NHT_list', ['monhoc' => $MH]);//biến MH là biến để truyền dữ liệu sang view
    }
    //truy vấn dữ liệu từ bảng MH theo id
    public function NHTgetMHbyid($MaMH)
    {
        //truy vấn dư liệu từ bảng MH
      $MH = DB::select("select * from monhoc where MaMH = ?", [$MaMH])[0];
        //chuyễn dữ liệu sang view để hiển thị
    return view('NHT_MH.NHT_detail', ['monhoc' => $MH]);
    }

    //edit
    public function NHTeditMH($MaMH)
    {
        //truy vấn dư liệu từ bảng MH
        $MH = DB::select("select * from monhoc where MaMH = ?", [$MaMH])[0];
        return view('NHT_MH.NHT_edit', ['monhoc' => $MH]);

    }
    //delete
    public function NHTdeleteMH($MaMH)
    {
        //truy vấn dư liệu từ bảng MH
        $MH = DB::select("select * from monhoc where MaMH = ?", [$MaMH])[0];
        //xóa dữ liệu từ bảng MH
        DB::delete("delete from monhoc where MaMH = ?", [$MaMH]);
        return redirect('NHT_listMH');
    }
    //update
    public function NHTupdateMH(Request $request)
    {
        //lấy dữ liệu từ form
        $MaMH = $request->input('MaMH');
        $TenMH = $request->input('TenMH');
        $SoTiet = $request->input('SoTiet');
        //truy vấn dữ liệu từ bảng MH
        DB::update("update monhoc set TenMH = ?, SoTiet = ? where MaMH = ?", [$TenMH, $SoTiet, $MaMH]);
        return redirect('NHT_listMH');
    }
    //insert -post data from form
    public function NHTinsert(Request $request)
    {
        //kiem tra du lieu nhap
        $request->validate([
            'MaMH' => 'required|max:10',
            'TenMH' => 'required|max:255',
            'SoTiet' => 'required|max:45'],
            ['MaMH.requited'=>'vui long nhap ma khoa', 
            'TenMH.requited'=>'vui long nhap ten khoa',
            'SoTiet.requited'=>'vui long nhap so tiet']);
        //lấy dữ liệu từ form
        $MaMH = $request->input('MaMH');
        $TenMH = $request->input('TenMH');
        $SoTiet = $request->input('SoTiet');
    
        //truy vấn dữ liệu từ bảng MH
        DB::insert("insert into monhoc ('MaMH','TenMH','SoTiet') values (?,?)", [$MaMH,$TenMH,$SoTiet]);
        //chuyển hướng đến trang list
        return redirect('NHT_list')->with('success', 'Thêm môn học thành công!');

    }
}