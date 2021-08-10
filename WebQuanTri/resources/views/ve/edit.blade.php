@extends('master')
@section('title', 'Trang Quản lý vé')
@section('content')
<body>
	<div class="container">
		<form action="{{route('ve.update',$ve->id)}}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		   <div class="table-responsive">
			<table class="table table-hover">
				<tbody>
				<div class="modal-header">
					<h4 class="modal-title">Cập nhật</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
 
				<div class="form-group">
						<label for="">Ngày bán vé</label>
						<input name="ngaybanve" type="date" class="form-control" id="diachi-add" placeholder="Nhập vào ngày" value="{{$ve->ngaybanve}}">
					</div>
					<div class="form-group">
						<label for="">Giá vé</label>
						<input name="giave" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào giá" value="{{$ve->giave}}">
					</div>
				<div class="form-group">
						<label for="">Suất chiếu ID</label>
						<input name="suatchieu_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$ve->suatchieu_id}}">
					</div>

					<div class="form-group">
						<label for="">Phòng ID</label>
						<input name="phong_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$ve->phong_id}}">
					</div>
					<div class="form-group">
						<label for="">Thành viên id</label>
						<input name="thanhvien_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$ve->thanhvien_id}}">
					</div>
					<div class="form-group">
						<label for="">Phim ID</label>
						<input name="phim_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$ve->phim_id}}">
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Edit</button>

				</div>
				</tbody>
				</table>
                
			</div>
            </form>
			{{-- {{$items->links()}} --}}
		</div>
@endsection