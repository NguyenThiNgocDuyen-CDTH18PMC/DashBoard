@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Bình Luận </h1>
<body>
	<div class="container">
    <form action="{{ route('comment.store')}}" id="form-add" method="POST" role="form">
				{{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Thêm Bình Luận</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Thành viên ID</label>
						<input name="thanhvien_id" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào thành viên">
					</div>

					
					<div class="form-group">
						<label for="">phim ID</label>
						<input name="phim_id" type="text" class="form-control" id="tenchinhanh-add" placeholder="Nhập vào ID phim">
					</div>
					<div class="form-group">
						<label for="">cmt_noidung</label>
						<input name="cmt_noidung" type="text" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào bình luận">
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