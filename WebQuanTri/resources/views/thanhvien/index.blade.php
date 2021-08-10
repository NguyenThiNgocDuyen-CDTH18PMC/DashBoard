@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Thành Viên </h1>
<body>
	<div class="container">
		<a href="{{route('thanhvien.add')}}" class="btn btn-primary">ADD</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Họ Tên</th>
                        <th>Mật Khẩu</th>
                        <th>Giới tính</th>
						<th>Ngày sinh</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					{{-- biến $todos được controller trả cho view
						chứa dữ liệu tất cả các bản ghi trong bảng students. Dùng foreach để hiển
						thị từng bản ghi ra table này. --}}

						@foreach($thanhvien as $item)
						<tr>
							<td id="{{$item->id}}">{{$item->id}}</td>
							<td id="hoten-{{$item->id}}">{{$item->hoten}}</td>
                            <td id="matkhau-{{$item->id}}">{{$item->matkhau}}</td>
                            <td id="gioitinh-{{$item->id}}">{{$item->gioitinh}}</td>
							<td id="ngaysinh-{{$item->id}}">{{$item->ngaysinh}}</td>
							<td id="email-{{$item->id}}">{{$item->email}}</td>
							<td id="sdt-{{$item->id}}">{{$item->sdt}}</td>
							<td>
								<button data-url=""​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button>
								<a href="{{route('thanhvien.edit',$item)}}"​  class="btn btn-warning btn-edit">Edit</a>
								<a href="{{route('thanhvien.destroy',$item->id)}}" class="btn btn-danger ">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection