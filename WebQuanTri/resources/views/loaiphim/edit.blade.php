@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý CN </h1>
<body>
	<div class="container">
		<form action="{{ route('loaiphim.update',$theloai->id)}}"method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Chỉn sửa Loại Phim</h4>
					
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">loại phim</label>
						<input name="loaiphim" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$theloai->loaiphim}}">
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