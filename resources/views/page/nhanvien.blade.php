@extends('master')
@section('content')

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">DANH SÁCH NHÂN VIÊN</strong>
                        </div>
                        <div class="card-body">
                  <table id="mydata" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Mã NV</th>
                        <th>Họ tên</th>
                        <th>Giới tính</th>
                        <th>email</th>
                        <th>Chức vụ</th>
                        <th>Phòng ban</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($nhanVien as $nv)
                      <tr>
                        <td>{{$nv->idnv}}</td>
                        <td>{{$nv->hoten}}</td>
                        <td>
                          @if($nv->gioitinh == 0) Nữ @else Nam @endif 
                        </td>
                        <td>{{$nv->email}}</td>
                        <td>{{$nv->idcv}}</td>
                        <td>{{$nv->idphong}}</td>
                        <td><a href="{{$nv->idnv}}"><i class="fa fa-edit"></i>  Sửa</a></td>
                        <td><a href="{{$nv->idnv}}"><i class="fa fa-times-circle"></i>  Xóa</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection