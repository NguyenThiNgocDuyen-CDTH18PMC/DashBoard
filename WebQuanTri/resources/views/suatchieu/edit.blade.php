@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Suất Chiếu </h1>
<body>
	<div class="container">
		<form action="{{ route('suatchieu.update',$suatchieu->id)}}"method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Chỉnh sửa suất chiếu</h4>
					
				</div>
				<div class="modal-body">

              
					<div class="form-group">
						<label for="">Suất chiếu ID</label>
						<input name="suatchieu_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$lichchieu->suatchieu_id}}">
					</div>

					<div class="form-group">
						<label for="">Phòng ID</label>
						<input name="phong_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$lichchieu->phong_id}}">
					</div>
					<div class="form-group">
						<label for="">Phim ID</label>
						<input name="phim_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$lichchieu->phim_id}}">
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