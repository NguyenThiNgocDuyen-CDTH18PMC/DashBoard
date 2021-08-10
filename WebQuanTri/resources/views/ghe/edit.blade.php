@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý CN </h1>
<body>
	<div class="container">
		<form action="{{ route('ghe.update',$ghe->id)}}"method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
                <div class="modal-header">
					<h4 class="modal-title">Chỉnh sửa ghế</h4>
					
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">số ghế</label>
						<input name="soghe" type="number" class="form-control" id="diachi-add" placeholder="Nhập vào số ghế" value="{{$ghe->soghe}}">
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