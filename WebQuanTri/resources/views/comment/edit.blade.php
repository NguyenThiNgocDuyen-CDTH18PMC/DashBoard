@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Binh luan</h1>
<body>
	<div class="container">
		<form action="{{ route('comment.update',$comment->id)}}"method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Chỉn sửa bình luận</h4>
					
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Thành viên ID</label>
						<input name="thanhvien_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$comment->thanhvien_id}}">
					</div>

					
					<div class="form-group">
						<label for="">phim ID</label>
						<input name="phim_id" type="text" class="form-control" id="tenchinhanh-add" placeholder="Nhập vào tên chi nhánh"value="{{$comment->phim_id}}">
					</div>
					<div class="form-group">
						<label for="">cmt nội dung</label>
						<input name="cmt_noidung" type="text" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào sđt chi nhánh"value="{{$comment->cmt_noidung}}">
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