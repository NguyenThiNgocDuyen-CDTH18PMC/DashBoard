@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Thành viên </h1>
<body>
	<div class="container">
		<form action="{{ route('thanhvien.update',$thanhvien->id)}}"method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Chỉnh sửa Thành Viên</h4>
					
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Họ Tên</label>
						<input name="hoten" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào họ tên" value="{{$thanhvien->hoten}}">
					</div>

					
					<div class="form-group">
						<label for="">Mật Khẩu</label>
						<input name="matkhau" type="password" class="form-control" id="tenchinhanh-add" placeholder="Nhập vào tên chi nhánh"value="{{$thanhvien->matkhau}}">
					</div>
					<div class="form-group">
						<label for="">Giới tính</label>
						<input name="gioitinh" type="sex" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào sđt chi nhánh"value="{{$thanhvien->gioitinh}}">
					</div>
					<div class="form-group">
						<label for="">Ngày Sinh</label>
						<input name="ngaysinh" type="date" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào sđt chi nhánh"value="{{$thanhvien->ngaysinh}}">
					</div>
					<div class="form-group">
						<label for="">email</label>
						<input name="email" type="email" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào sđt chi nhánh"value="{{$thanhvien->email}}">
					</div>
					<div class="form-group">
						<label for="">số điện thoại</label>
						<input name="sdt" type="sex" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào sđt chi nhánh"value="{{$thanhvien->sdt}}">
					</div>
                    <div class="modal-footer">
					<button type="button" class="btn btn-default" chinhanh-dismiss="modal">Close</button>
					
					<button type="submit" name="btnregister"class="btn btn-primary">Thực Hiện</button>
				</div>
					</tbody>
				</table>
                
			</div>
            </form>
			{{-- {{$items->links()}} --}}
		</div>
@endsection