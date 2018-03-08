@extends('master')
@section('content')
 <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="upload/{{$nhanVien->hinh}}" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">{{$nhanVien->hoten}}</h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{$nhanVien->noithuongtru}}</div>
            </div>
            <div class="card-text text-sm-center">
                <a href="nhanvien/sua/{{$nhanVien->id}}"><i class="fa fa-edit"></i>  Sửa</a>&nbsp;&nbsp;&nbsp;
                <a href="nhanvien/xoa/{{$nhanVien->id}}"><i class="fa fa-times-circle"></i>  Xóa</a>
                
            </div>
            <hr>
            
        </div>
       
    </div>
</div>
<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Thông Tin</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                              
                                <tr>
                                  <th scope="row">Chức vụ</th>
                                  <td>{{$nhanVien->chucvu->tencv}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">Phòng</th>
                                  <td>{{$nhanVien->phong->tenphong}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="col">Giới tính</th>
                                  <td scope="col"> @if($nhanVien->gioitinh == 0) {{"Nữ"}} @else {{"Nam"}} @endif </td>                                 
                                </tr>
                              
                             
                                <tr>
                                  <th scope="row">Ngày sinh</th>
                                  <td>{{$nhanVien->ngaysinh}}</td>
                                 
                                </tr>
                                <tr>
                                  <th scope="row">Nơi sinh</th>
                                  <td>{{$nhanVien->noisinh}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">Email</th>
                                  <td>{{$nhanVien->email}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">Điện thoại</th>
                                  <td>{{$nhanVien->dienthoai}}</td>
                                  
                                </tr>

                                 <tr>
                                  <th scope="row">CMND</th>
                                  <td>{{$nhanVien->socmnd}}</td>
                                  
                                </tr>
                                 <tr>
                                  <th scope="row">Nơi cấp CMND</th>
                                  <td>{{$nhanVien->noicapcmnd}}</td>
                                  
                                </tr>
                                 <tr>
                                  <th scope="row">Ngày cấp CMND</th>
                                  <td>{{$nhanVien->ngaycapcmnd}}</td>
                                  
                                </tr>
                                 <tr>
                                  <th scope="row">Nguyên quán</th>
                                  <td>{{$nhanVien->nguyenquan}}</td>
                                  
                                </tr>
                                 <tr>
                                  <th scope="row">Quốc tịch</th>
                                  <td>{{$nhanVien->quoctich}}</td>
                                  
                                </tr>
                                 <tr>
                                  <th scope="row">Nơi thường trú</th>
                                  <td>{{$nhanVien->noithuongtru}}</td>
                                  
                                </tr>
                                 <tr>
                                  <th scope="row">Nơi tạm trú</th>
                                  <td>{{$nhanVien->noitamtru}}</td>
                                  
                                </tr>
                                </tr>
                                 <tr>
                                  <th scope="row">Dân tộc</th>
                                  <td>{{$nhanVien->dantoc}}</td>
                                  
                                </tr>
                                </tr>
                                 <tr>
                                  <th scope="row">Tôn giáo</th>
                                  <td>{{$nhanVien->tongiao}}</td>
                                  
                                </tr>
                                </tr>
                                 <tr>
                                  <th scope="row">Trình trạng hôn nhân</th>
                                  <td>{{$nhanVien->tinhtranghonnhan}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">Trình độ văn hóa</th>
                                  <td>{{$nhanVien->trinhdovanhoa}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">Trình độ chuyên môn</th>
                                  <td>{{$nhanVien->trinhdochuyenmon}}</td>
                                  
                                </tr>
                                
                                <tr>
                                  <th scope="row">Ngân hàng đăng ký</th>
                                  <td>{{$nhanVien->nganhangdangky}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">Số tài khoản</th>
                                  <td>{{$nhanVien->sotaikhoan}}</td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">Ngày vào làm</th>
                                  <td>{{$nhanVien->ngayvaolam}}</td>
                                  
                                </tr>
                              
                            </table>
                        </div>
                    </div>
                </div>

@endsection