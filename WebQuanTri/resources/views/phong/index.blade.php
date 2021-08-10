@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Phòng </h1>
<body>
	<div class="container">
		<a href="{{route('phong.create')}}" class="btn btn-primary">ADD</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
					<th>ID</th>
						<th>Tên Phòng </th>
						<th>Số Lượng Ghế</th>
						<th>Chi Nhánh</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					{{-- biến $todos được controller trả cho view
						chứa dữ liệu tất cả các bản ghi trong bảng students. Dùng foreach để hiển
						thị từng bản ghi ra table này. --}}

						@foreach($list as $item)
						<tr>
						<td id="{{$item->id}}">{{$item->id}}</td>
							<td id="tenphong-{{$item->id}}">{{$item->tenphong}}</td>
							<td id="soluongghe-{{$item->id}}">{{$item->soluongghe}}</td>
							<td id="chinhanh_id-{{$item->id}}">{{$item->chinhanh_id}}</td>
							<td>
								<a hreft="{{ route('phong.show',$item->id) }}"​  class="btn btn-info btn-show">Detail</a>
								<a href="{{ route('phong.edit',$item->id) }}"​  class="btn btn-warning btn-edit">Edit</a>
								<a href="{{ route('phong.destroy',$item->id) }}" class="btn btn-danger ">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection