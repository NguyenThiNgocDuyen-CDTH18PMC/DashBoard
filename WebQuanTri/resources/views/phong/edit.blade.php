@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Phòng </h1>
<body>
	<div class="container">
		<form action="{{ route('phong.update',$phong->id)}}"method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Chỉn sửa Phòng</h4>
					
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Tên Phòng</label>
						<input name="tenphong" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào tên phòng" value="{{$phong->tenphong}}">
					</div>
					<div class="form-group">
						<label for="">Số lượng ghế</label>
						<input name="soluongghe" type="number" class="form-control" id="diachi-add" placeholder="Nhập vào số lượng ghế" value="{{$phong->soluongghe}}">
					</div>
					<div class="form-group">
						<label for="">Chi nhánh ID</label>
						<input name="chinhanh_id" type="number" class="form-control" id="diachi-add" placeholder="Nhập vào chi nhánh" value="{{$phong->chinhanh_id}}">
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