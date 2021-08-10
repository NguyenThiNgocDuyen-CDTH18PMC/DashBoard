@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Suat Chieu </h1>
<body>
	<div class="container">
    <form action="{{ route('suatchieu.store')}}" id="form-add" method="POST" role="form">
				{{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Thêm Suat chieu</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Gio Bat Dau</label>
						<input name="giobatdau" type="time" class="form-control" id="giobatdau-add" placeholder="Nhập vào gio bat dau">
					</div>

					
					<div class="form-group">
						<label for="">Gio ket thuc</label>
						<input name="gioketthuc" type="time" class="form-control" id="gioketthuc-add" placeholder="Nhập vào tên chi nhánh">
					</div>
					<div class="form-group">
						<label for="">Ngay Chieu</label>
						<input name="ngaychieu" type="Date" class="form-control" id="ngaychieu-add" placeholder="Nhập vào sđt chi nhánh">
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