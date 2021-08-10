@extends('master')
@section('title', 'Trang Quản lý lịch chiếu')
@section('content')
<h1> Trang Quản lý lịch chiếu </h1>
<body>
	<div class="container">
		<a href="{{route('lichchieu.add')}}" class="btn btn-primary">ADD</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Suất Chiếu ID</th>
                        <th>Phòng ID</th>
                        <th>Phim ID</th>
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
							<td id="suatchieu-{{$item->id}}">{{$item->suatchieu_id}}</td>
                            <td id="phong-{{$item->id}}">{{$item->phong_id}}</td>
                            <td id="phim-{{$item->id}}">{{$item->phim_id}}</td>
							<td>
								<button data-url=""​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button>
								<a href="{{route('lichchieu.edit',$item->id)}}"​  class="btn btn-warning btn-edit">Edit</a>
								<a href="{{route('lichchieu.destroy',$item->id)}}" class="btn btn-danger ">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection