@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý CN </h1>
<body>
	<div class="container">
		<form action="{{ route('phim.update',$phim->id)}}"method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Chỉn sửa Phim</h4>
					
				</div>
				<div class="modal-body">

				<div class="form-group">
						<label for="id">Thể Loại</label>
						<select name="theloai_id" class="form-control">
						    
								<option >hanh động</option>
								<option >hài hước</option>
						<select>
					</div>
					<div class="form-group">
						<label for="">Tên Phim</label>
						<input name="tenphim" type="text" class="form-control" id="tenphim-add" placeholder="Nhập vào tên chi nhánh"value="{{$phim->tenphim}}">
					</div>
					<div class="form-group">
						<strong>Hình ảnh: </strong>
						<input type="file" name="image" value="" class="form-control"value="{{$phim->hinhanh}}">
					</div>
					<div class="form-group">
						<label for="">Nội dung Phim</label>
						<input name="noidungphim" type="text" class="form-control" id="ndphim-add" placeholder="Nhập vào nội dung"value="{{$phim->noidungphim}}">
					</div>
					<div class="form-group">
						<label for="">Quốc gia</label>
						<input name="quocgia" type="text" class="form-control" id="quocgia-add" placeholder="Nhập vào quốc gia"value="{{$phim->quocgia}}">
					</div>
					<div class="form-group">
						<label for="">Điểm</label>
						<input name="diemphim" type="text" class="form-control" id="diem-add" placeholder="Nhập vào điểm"value="{{$phim->diemphim}}">
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