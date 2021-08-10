@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý CN </h1>
<body>
	<div class="container">
    <form action="{{ route('phong.store')}}" id="form-add" method="POST" role="form">
				{{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Thêm Phòng</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Ten Phong</label>
						<input name="tenphong" type="text" class="form-control" id="tenphong-add" placeholder="Nhập vào tên phong">
					</div>

					
					<div class="form-group">
						<label for="">So luong ghe</label>
						<input name="soluongghe" type="text" class="form-control" id="soluongghe-add" placeholder="Nhập vào sl">
					</div>
					<div class="form-group">
						<label for="">Chi Nhanh ID</label>
						<input name="chinhanh_id" type="text" class="form-control" id="chinhanh_id-add" placeholder="Nhập vào chi nhánh">
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
				</div>
					</tbody>
				</table>
                
			</div>
            </form>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection