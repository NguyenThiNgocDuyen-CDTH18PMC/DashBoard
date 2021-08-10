@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý VÉ </h1>
<body>
	<div class="container">
		<a href="{{route('ve.add')}}" class="btn btn-primary">ADD</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Ngày Bán vé</th>
                        <th>GIá</th>
                        <th>Suất Chiếu ID</th>
						<th>Phòng ID</th>
						<th>Thành viên ID</th>
						<th>Phim ID</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					{{-- biến $todos được controller trả cho view
						chứa dữ liệu tất cả các bản ghi trong bảng students. Dùng foreach để hiển
						thị từng bản ghi ra table này. --}}

						@foreach($ve as $item)
						<tr>
							<td id="{{$item->id}}">{{$item->id}}</td>
							<td id="ngaybanve-{{$item->id}}">{{$item->ngaybanve}}</td>
                            <td id="giave-{{$item->id}}">{{$item->giave}}</td>
                            <td id="suatchieu_id-{{$item->id}}">{{$item->suatchieu_id}}</td>
							<td id="phong_id-{{$item->id}}">{{$item->phong_id}}</td>
							<td id="thanhvien_id-{{$item->id}}">{{$item->thanhvien_id}}</td>
							<td id="phim_id-{{$item->id}}">{{$item->phim_id}}</td>
							<td>
								<button data-url=""​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button>
								<a href="{{route('ve.edit',$item->id)}}"​  class="btn btn-warning btn-edit">Edit</a>
								<a href="{{route('ve.destroy',$item->id)}}" class="btn btn-danger ">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection