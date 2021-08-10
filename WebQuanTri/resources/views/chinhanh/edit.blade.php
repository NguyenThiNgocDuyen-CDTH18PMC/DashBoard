@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý CN </h1>
<body>
	<div class="container">
		<form action="{{ route('chinhanh.update',$chinhanh->id)}}"method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Chinh Sua Chi Nhánh</h4>
					
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Địa Chỉ</label>
						<input name="diachi" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ" value="{{$chinhanh->diachi}}">
					</div>

					
					<div class="form-group">
						<label for="">tenchinhanh</label>
						<input name="tenchinhanh" type="text" class="form-control" id="tenchinhanh-add" placeholder="Nhập vào tên chi nhánh"value="{{$chinhanh->tenchinhanh}}">
					</div>
					<div class="form-group">
						<label for="">sdtchinhanh</label>
						<input name="sdtchinhanh" type="text" class="form-control" id="sdtchinhanh-add" placeholder="Nhập vào sđt chi nhánh"value="{{$chinhanh->sdtchinhanh}}">
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