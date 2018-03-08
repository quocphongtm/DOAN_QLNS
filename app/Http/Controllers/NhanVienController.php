<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\chucvu;
use App\phong;
use App\ca;
class NhanVienController extends Controller
{
    //public $timestamps = false;
    
    public function getNhanVien(){
        $nhanVien = nhanvien::all();

    	return view('page.nhanvien.nhanvien',compact('nhanVien'));
    }
    public function getProfile($id){ 
    	$nhanVien = nhanvien::find($id);
    	return view('page.nhanvien.profile',compact('nhanVien'));
    }
    public function getThemNhanVien(){
        $chucVu = chucvu::all();
        $nhanvien = nhanvien::all();
        $phong = phong::all();
        return view('page.nhanvien.them',compact('chucVu','phong'));
    }
    public function postThemNhanVien(Request $request){
       
        $this->validate($request,[
            
            'txtHoTen'=>'required|max:30',
            'txtSoDienThoai'=>'required|max:13',
            
            'fileAnh'=>'required|max:50',
            'dateNgaySinh'=>'required',
            'txtNoiSinh'=>'required|max:50',
            'txtEmail'=>'required|max:50',
            
            'txtCMND'=>'required|max:13',
            'txtNoiCapCMND'=>'required|max:50',
            'dateNgayCapCMND'=>'required|date|after_or_equal:dateNgaySinh',
            'txtNguyenQuan'=>'required|max:50',
            'txtQuocTich'=>'required|max:15',
            'txtNoiThuongTru'=>'required|max:50',
            'txtNoiTamTru'=>'required|max:50',
            'txtDanToc'=>'required|max:15',
            'txtTonGiao'=>'required|max:15',
            'txtHonNhan'=>'required|max:15',
            'txtTrinhDoVH'=>'required|max:15',
            'txtTrinhDoCM'=>'required|max:15',
            'txtNganHang'=>'required|max:20',
            'txtSoTaiKhoan'=>'required|max:20',
            'dateNgayVaoLam'=>'required|date|after_or_equal:dateNgayCapCMND',
        ],[
            'dateNgayVaoLam.after_or_equal'=>'Ngày vào làm phải sau ngày cấp CMND',
            'dateNgayCapCMND.after_or_equal'=>'Ngày cấp CMND phải sau ngày sinh',
            'txtSoDienThoai.required'=>'Bạn chưa nhập số điện thoại',
            'txtSoDienThoai.max'=>'Số điện thoại không quá 13 ký tự',
            'txtMaNV.unique'=>'Mã nhân viên đã tồn tại',
            'txtHoTen.required'=>'Bạn chưa nhập họ tên nhân viên',
            'txtHoTen.max'=>'Họ tên không quá 30 ký tự',
            'fileAnh.required'=>'Bạn chưa chọn ảnh nhân viên',
            'fileAnh.max'=>'Tên file không quá 50 ký tự',
            'dateNgaySinh.required'=>'Bạn chưa chọn ngày sinh',
            'txtNoiSinh.required'=>'Bạn chưa nhập nơi sinh',
            'txtNoiSinh.max'=>'Nơi sinh không quá 50 ký tự',
            'txtEmail.required'=>'Bạn chưa nhập email',
            'txtEmail.max'=>'Email không quá 50 ký tự',
            'txtCMND.required'=>'Bạn chưa nhập CMND',
            'txtCMND.max'=>'CMND không quá 13 ký tự',
            'txtNoiCapCMND.required'=>'Bạn chưa nhập nơi cấp CMND',
            'txtNoiCapCMND.max'=>'Nơi cấp CMND không quá 50 ký tự',
            'dateNgayCapCMND.required'=>'Bạn chưa chọn ngày cấp CMND',
            'txtNguyenQuan.required'=>'Bạn chưa nhập nguyên quán',
            'txtNguyenQuan.max'=>'Nguyên quán không quá 50 ký tự',
            'txtQuocTich.required'=>'Bạn chưa nhập quốc tịch',
            'txtQuocTich.max'=>'Quốc tịch không quá 15 ký tự',
            'txtNoiThuongTru.required'=>'Bạn chưa nhập nơi thường trú',
            'txtNoiThuongTru.max'=>'Nơi thường trú không quá 50 ký tự',
            'txtNoiTamTru.required'=>'Bạn chưa nhập nơi tạm trú',
            'txtNoiTamTru.max'=>'Nơi tạm trú không quá 50 ký tự',
            'txtDanToc.required'=>'Bạn chưa nhập dân tộc',
            'txtDanToc.max'=>'Dân tộc không quá 15 ký tự',
            'txtTonGiao.required'=>'Bạn chưa nhập tôn giáo',
            'txtTonGiao.max'=>'Tôn giáo không quá 15 ký tự',
            'txtHonNhan.required'=>'Bạn chưa nhập trình trạng hôn nhân',
            'txtHonNhan.max'=>'Tình trạng hôn nhân không quá 15 ký tự',
            'txtTrinhDoVH.required'=>'Bạn chưa nhập trình độ văn hóa',
            'txtTrinhDoVH.max'=>'Trình độ văn hóa không quá 15 ký tự',
            'txtTrinhDoCM.required'=>'Bạn chưa nhập trình độ chuyên môn',
            'txtTrinhDoCM.max'=>'Trình độ chuyên môn không quá 15 ký tự',
            'txtNganHang.required'=>'Bạn chưa nhập ngân hàng đăng ký',
            'txtNganHang.max'=>'Tên ngân hàng không quá 20 ký tự',
            'txtSoTaiKhoan.required'=>'Bạn chưa nhập số tài khoản',
            'txtSoTaiKhoan.max'=>'Số tài khoản không quá 20 ký tự',
            'dateNgayVaoLam.required'=>'Bạn chưa chọn ngày vào làm',


        ]);
        $nhanvien = new nhanvien;
        $nhanvien->id = $request->txtMaNV;
        $nhanvien->hoten = $request->txtHoTen;
        $nhanvien->gioitinh = $request->selectGoiTinh;
        $nhanvien->ngaysinh = $request->dateNgaySinh;
        $nhanvien->noisinh = $request->txtNoiSinh;
        $nhanvien->email = $request->txtEmail;
        $nhanvien->socmnd = $request->txtCMND;
        
        if($request->hasFile('fileAnh'))
        {
            $file = $request->file('fileAnh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'PNG' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('nhanvien/themnhanvien')->with('thongbao','Bạn chỉ được chọn file có đuôi ipg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while (file_exists("upload/".$Hinh)) 
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("upload/",$Hinh);
            $nhanvien->hinh = $Hinh;

        }
        else
        {
            $nhanvien->hinh = "";
        }

        $nhanvien->noicapcmnd = $request->txtNoiCapCMND;
        $nhanvien->ngaycapcmnd = $request->dateNgayCapCMND;
        $nhanvien->nguyenquan = $request->txtNguyenQuan;
        $nhanvien->quoctich = $request->txtQuocTich;
        $nhanvien->noithuongtru = $request->txtNoiThuongTru;
        $nhanvien->noitamtru = $request->txtNoiTamTru;
        $nhanvien->dantoc = $request->txtDanToc;
        $nhanvien->tongiao = $request->txtTonGiao;
        $nhanvien->tinhtranghonnhan = $request->txtHonNhan;
        $nhanvien->trinhdovanhoa = $request->txtTrinhDoVH;
        $nhanvien->trinhdochuyenmon = $request->txtTrinhDoCM;
        $nhanvien->dienthoai = $request->txtSoDienThoai;
        $nhanvien->nganhangdangky = $request->txtNganHang;
        $nhanvien->sotaikhoan = $request->txtSoTaiKhoan;
        $nhanvien->ngayvaolam = $request->dateNgayVaoLam;
        $nhanvien->idcv = $request->selectChucVu;
        $nhanvien->idphong = $request->selectPhong;
        $nhanvien->save(); 
        return redirect('nhanvien/themnhanvien')->with('thongbao','Thêm thành công');

    }
    public function getSuaNhanVien(){
        $phong = new phong;
        
        return view('page.nhanvien.sua');
    }
}
