@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Bình Luận </h1>
<body>
	<div class="container">
		<a href="{{route('comment.add')}}" class="btn btn-primary">ADD</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Thành Viên ID</th>
                        <th>Phim ID</th>
                        <th>CMT Nội Dung</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					{{-- biến $todos được controller trả cho view
						chứa dữ liệu tất cả các bản ghi trong bảng students. Dùng foreach để hiển
						thị từng bản ghi ra table này. --}}

						@foreach($comment as $item)
						<tr>
							<td id="{{$item->id}}">{{$item->id}}</td>
							<td id="thanhvien_id-{{$item->id}}">{{$item->thanhvien_id}}</td>
                            <td id="phim_id-{{$item->id}}">{{$item->phim_id}}</td>
                            <td id="cmt_noidung-{{$item->id}}">{{$item->cmt_noidung}}</td>
							<td>
								<button data-url=""​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button>
								<a href="{{route('comment.edit',$item->id)}}"​  class="btn btn-warning btn-edit">Edit</a>
								<a href="{{route('comment.destroy',$item->id)}}" class="btn btn-danger ">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection