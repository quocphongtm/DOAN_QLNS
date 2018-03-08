@extends('master')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Thêm Nhân Viên</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><button type="button" class="btn btn-danger btn-xl">
            <i class="fa fa-ban"></i> Trở về
        </button></li>
                </ol>
            </div>
        </div>
    </div>
</div>


 <div class="col-lg-12">
	<div class="card">
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
					{{$err}}<br>
				@endforeach
			</div>
		@endif
		@if(session('thongbao'))
			<div class="alert alert-success">
				{{session('thongbao')}}
			</div>
		@endif
		<form action="nhanvien/themnhanvien" method="post" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
	  		<div class="card-body card-block">
		

		  	
		    <div class="form-group"><label for="company" class=" form-control-label">Họ Tên</label>
		    	<input type="text" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên" class="form-control">
		    </div>
		    <div class="form-group"><label for="company" class=" form-control-label">Số điện thoại</label>
		    	<input type="text" id="txtSoDienThoai" name="txtSoDienThoai" placeholder="Nhập số điện thoại" class="form-control">
		    </div>
		    <div class="form-group"><label for="vat" class=" form-control-label">Giới tính</label>
		    	<div class="row form-group">
		            <div class="col-12">
		              <select name="selectGoiTinh" id="selectGoiTinh" class="form-control">
		                <option value="0">Nữ</option>
		                <option value="1">Nam</option>
		              </select>
		            </div>
		        </div>
		    </div>
		    <div class="form-group"><label for="country" class=" form-control-label">Ảnh</label>
		    	<div class="row form-group">
	                <div class="col-12 col-md-9">
	                	<input type="file" id="fileAnh" name="fileAnh" class="form-control-file"></div>
	            </div>
		    </div>
		    <div class="row form-group">
		      <div class="col-12">
		        <div class="form-group"><label for="city" class=" form-control-label">Chức vụ</label>
		        	<div class="row form-group">
			        	<div class="col-12">
			              <select name="selectChucVu" id="selectChucVu" class="form-control">
							@foreach($chucVu as $cv)
			                	<option value="{{$cv->id}}">{{$cv->tencv}}</option>
			                @endforeach
			              </select>
			            </div>
		       		</div>
		        </div>
		      </div>
		      <div class="col-12">
		        <div class="form-group"><label for="postal-code" class=" form-control-label">Phòng</label>
		        	<div class="row form-group">
			        	<div class="col-12">
			              <select name="selectPhong" id="selectPhong" class="form-control">
							@foreach($phong as $p)
			                	<option value="{{$p->id}}">{{$p->tenphong}}</option>
			                @endforeach
			              </select>
			            </div>
		       		</div>
		        </div>
		      </div>
		    </div>
		    <div class="form-group"><label for="street" class=" form-control-label">Ngày sinh</label>
		    	<input type="date" name="dateNgaySinh" id="dateNgaySinh" class="form-control">
		    </div>
		    
		    <div class="form-group"><label for="country" class=" form-control-label">Nơi sinh</label>
		    	<input type="text" name="txtNoiSinh" id="txtNoiSinh" placeholder="Nhập nơi sinh" class="form-control">
		    </div>

		    <div class="form-group"><label for="country" class=" form-control-label">Email</label>
		    	<input type="email" name="txtEmail" id="txtEmail" placeholder="Nhập email" class="form-control">
		    </div>
		  	
		
		  	<div class="form-group"><label for="country" class=" form-control-label">CMND</label>
		  		<input type="text" name="txtCMND" id="txtCMND" placeholder="Nhập CMND" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Nơi cấp CMND</label>
		  		<input type="text" name="txtNoiCapCMND" id="txtNoiCapCMND" placeholder="Nhập nơi cấp CMND" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Ngày cấp CMND</label>
		  		<input type="date" name="dateNgayCapCMND" id="dateNgayCapCMND" placeholder="Nhập ngày cấp CMND" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Nguyên Quán</label>
		  		<input type="text" name="txtNguyenQuan" id="txtNguyenQuan" placeholder="Nhập nguyên quán" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Quốc tịch</label>
		  		<input type="text" name="txtQuocTich" id="txtQuocTich" placeholder="Nhập quốc tịch" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Nơi thường trú</label>
		  		<input type="text" name="txtNoiThuongTru" id="txtNoiThuongTru" placeholder="Nhập thường trú" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Nơi tạm trú</label>
		  		<input type="text" name="txtNoiTamTru" id="txtNoiTamTru" placeholder="Nhập tạm trú" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Dân tộc</label>
		  		<input type="text" name="txtDanToc" id="txtDanToc" placeholder="Nhập Dân tộc" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Tôn giáo</label>
		  		<input type="text" name="txtTonGiao" id="txtTonGiao" placeholder="Nhập tôn giáo" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Tình trạng hôn nhân</label>
		  		<input type="text" name="txtHonNhan" id="txtHonNhan" placeholder="Nhập tình trạng hôn nhân" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Trình độ văn hóa</label>
		  		<input type="text" name="txtTrinhDoVH" id="txtTrinhDoVH" placeholder="Nhập trình độ văn hóa" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Trình độ chuyên môn</label>
		  		<input type="text" name="txtTrinhDoCM" id="txtTrinhDoCM" placeholder="Nhập trình độ chuyên môn" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Ngân hàng đăng ký</label>
		  		<input type="text" name="txtNganHang" id="txtNganHang" placeholder="Nhập ngân hàng đăng ký" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Số tài khoản</label>
		  		<input type="text" name="txtSoTaiKhoan" id="txtSoTaiKhoan" placeholder="Nhập trình độ văn hóa" class="form-control">
		  	</div>
		  	<div class="form-group"><label for="country" class=" form-control-label">Ngày vào làm</label>
		  		<input type="date" name="dateNgayVaoLam" id="dateNgayVaoLam" placeholder="Nhập ngày vào làm" class="form-control">
		  	</div>
	</div>

	</div>
</div>


	<div class="col-lg-6">
		<button type="submit" class="btn btn-primary btn-xl">
			<i class="fa fa-dot-circle-o"></i> Xác Nhận
		</button>
		<button type="button" class="btn btn-danger btn-xl">
            <i class="fa fa-ban"></i> Trở về
        </button>
	</div>
</form>
@endsection