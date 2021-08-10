@extends('master')
@section('title', 'Trang Quản lý Phim')
@section('content')
<h1> Trang Quản lý Phim</h1>
<body>
	<div class="container">
		<a href="{{route('phim.add')}}" class="btn btn-primary">ADD</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Thể loại ID</th>
                        <th>Tên Phim</th>
						<th>Hình ảnh</th>
						<th>Nội Dung Phim</th>
						<th>Quốc Gia</th>
                        <th>Điểm Phim</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				

						@foreach($phim as $item)
						<tr>
							<td id="{{$item->id}}">{{$item->id}}</td>
							<td id="theloai_id-{{$item->id}}">{{$item->theloai_id}}</td>
                            <td id="tenphim-{{$item->id}}">{{$item->tenphim}}</td>
                            <td>
                      <img src="../assets/img/th.png">
                    </td>
							<td id="noidungphim-{{$item->id}}">{{$item->noidungphim}}</td>
							<td id="quocgia-{{$item->id}}">{{$item->quocgia}}</td>
							<td id="diemphim-{{$item->id}}">{{$item->diemphim}}</td>
							<td>
								<button data-url=""​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button>
								<a href="{{route('phim.edit',$item->id)}}"​ type="button"  class="btn btn-warning btn-edit">Edit</a>
								<a href="{{route('phim.destroy',$item->id)}}" class="btn btn-danger ">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{-- {{$items->links()}} --}}
		</div>
		
@endsection