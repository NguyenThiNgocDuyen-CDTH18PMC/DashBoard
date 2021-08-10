@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý CN </h1>
<body>
	<div class="container">
    <form action="{{ route('ve.store')}}" id="form-add" method="POST" role="form">
				{{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Thêm vé</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Ngày Bán vé </label>
						<input name="ngaybanve" type="date" class="form-control" id="diachi-add" placeholder="Nhập vào ngày">
					</div>

					
					<div class="form-group">
						<label for="">Giá Vé</label>
						<input name="giave" type="money" class="form-control" id="tenchinhanh-add" placeholder="Nhập vào giá vé">
					</div>
					<div class="form-group">
						<label for="">Suất chiếu Id</label>
						<input name="suatchieu_id" type="number" class="form-control" id="diachi-add" placeholder="Nhập vào suất chiếu">
					</div>

					
					<div class="form-group">
						<label for="">Phòng ID</label>
						<input name="phong_id" type="number" class="form-control" id="tenchinhanh-add" placeholder="Nhập vào Id phong">
					</div>
					<div class="form-group">
						<label for="">Thành viên ID</label>
						<input name="thanhvien_id" type="number" class="form-control" id="tenchinhanh-add" placeholder="Nhập vào thành viên id">
					</div>
					<div class="form-group">
						<label for="">Phim ID</label>
						<input name="phim_id" type="number" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào phim id ">
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