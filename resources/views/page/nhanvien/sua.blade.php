@extends('master')
@section('content')
<div class="col-lg-12">
	<div class="card">
	  <div class="card-header"><strong>SỬA</strong><small> Nhân viên</small></div>
	  <div class="card-body card-block">
	  	<form action="sua_submit" method="get" accept-charset="utf-8">  
		    <div class="form-group"><label for="company" class=" form-control-label">Company</label><input type="text" id="company" placeholder="Enter your company name" class="form-control"></div>
		    <div class="form-group"><label for="vat" class=" form-control-label">VAT</label><input type="text" id="vat" placeholder="DE1234567890" class="form-control"></div>
		    <div class="form-group"><label for="street" class=" form-control-label">Street</label><input type="text" id="street" placeholder="Enter street name" class="form-control"></div>
		    <div class="row form-group">
		      <div class="col-8">
		        <div class="form-group"><label for="city" class=" form-control-label">City</label><input type="text" id="city" placeholder="Enter your city" class="form-control"></div>
		      </div>
		      <div class="col-8">
		        <div class="form-group"><label for="postal-code" class=" form-control-label">Postal Code</label><input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>
		      </div>
		    </div>
		    <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>
		  	<button type="submit" class="btn btn-primary btn-sm">
	           <i class="fa fa-dot-circle-o"></i> Xác nhận
	        </button>
	        <button type="reset" class="btn btn-danger btn-sm">
              <i class="fa fa-ban"></i> Hủy
            </button>

		  </div>
		</form>
	</div>
</div>
@endsection