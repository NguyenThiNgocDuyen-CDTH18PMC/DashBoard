@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý CN </h1>
<body>
	<div class="container">
    <form action="{{ route('loaiphim.store')}}" id="form-add" method="POST" role="form">
				{{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Thêm Thể Loại</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Loại Phim</label>
						<input name="loaiphim" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào loại phim">
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