@extends('master')
@section('title', 'Trang Quản lý phim')
@section('content')
<h1> Trang Quản lý phim </h1>
<body>
	<div class="container">
    <form action="{{ route('phim.store')}}" id="form-add" method="POST" role="form">
				{{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Thêm Phim</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="id">Thể Loại</label>
						<input name="theloai_id" type="text" class="form-control" id="tenphim-add" placeholder="Nhập vào id thể loại">
					</div>
					<div class="form-group">
						<label for="">Tên Phim</label>
						<input name="tenphim" type="text" class="form-control" id="tenphim-add" placeholder="Nhập vào tên chi nhánh">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Hình Ảnh: </strong>
						<input type="file" name="hinhanh" value="" class="form-control">
					</div>
				   </div>
					<div class="form-group">
						<label for="">Nội dung Phim</label>
						<input name="noidungphim" type="text" class="form-control" id="ndphim-add" placeholder="Nhập vào nội dung">
					</div>
					<div class="form-group">
						<label for="">Quốc gia</label>
						<input name="quocgia" type="text" class="form-control" id="quocgia-add" placeholder="Nhập vào quốc gia">
					</div>
					<div class="form-group">
					<label for="">Traier:</label>
						<input name="trailer" type="file" name="image" value="" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Điểm</label>
						<input name="diemphim" type="text" class="form-control" id="diem-add" placeholder="Nhập vào điểm">
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