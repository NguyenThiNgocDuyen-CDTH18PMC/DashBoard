@extends('master')
@section('title', 'Trang Quản lý chi nhánh')
@section('content')
<h1> Trang Quản lý Chi Nhánh </h1>
<body>
	<div class="container">
		<a href="{{route('chinhanh.add')}}" class="btn btn-primary">ADD</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Địa Chỉ</th>
                        <th>Tên Chi Nhánh</th>
                        <th>SĐT Chi Nhánh</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					{{-- biến $todos được controller trả cho view
						chứa dữ liệu tất cả các bản ghi trong bảng students. Dùng foreach để hiển
						thị từng bản ghi ra table này. --}}

						@foreach($chinhanh as $item)
						<tr>
							<td id="{{$item->id}}">{{$item->id}}</td>
							<td id="diachi-{{$item->id}}">{{$item->diachi}}</td>
                            <td id="tenchinhanh-{{$item->id}}">{{$item->tenchinhanh}}</td>
                            <td id="sdtchinhanh-{{$item->id}}">{{$item->sdtchinhanh}}</td>
							<td>
								<button data-url=""​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button>
								<a href="{{route('chinhanh.edit',$item->id)}}"​  class="btn btn-warning btn-edit">Edit</a>
								<a href="{{route('chinhanh.destroy',$item->id)}}" class="btn btn-danger ">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection