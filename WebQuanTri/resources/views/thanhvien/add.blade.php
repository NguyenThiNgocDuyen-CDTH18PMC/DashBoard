@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý CN </h1>
<body>
	<div class="container">
    <form action="{{ route('thanhvien.store')}}" id="form-add" method="POST" role="form">
				{{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Thêm Thành Viên</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Họ Tên</label>
						<input name="hoten" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào họ tên">
					</div>

					
					<div class="form-group">
						<label for="">Mật Khẩu</label>
						<input name="matkhau" type="password" class="form-control" id="tenchinhanh-add" placeholder="Nhập vào mật khẩu">
					</div>
					<div class="form-group">
						<label for="">Giới Tính</label>
						<input name="gioitinh" type="text" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào giới tính">
					</div>
					<div class="form-group">
						<label for="">Ngày sinh</label>
						<input name="ngaysinh" type="date" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào ngày sinh">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" type="email" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào email">
					</div>
					<div class="form-group">
						<label for="">số điện thoại</label>
						<input name="sdt" type="phone" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào số điện thoại">
					</div>

                    <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
					</tbody>
				</table>
                
			</div>
            </form>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection