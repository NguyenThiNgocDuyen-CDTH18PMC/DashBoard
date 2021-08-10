@extends('master')
@section('title', 'Trang quản lý suất chếu')
@section('content')
<h1> Trang Quản lý Suất Chiếu </h1>
<body>
	<div class="container">
		<a href="{{route('suatchieu.add')}}" class="btn btn-primary">Add</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Giờ Bất Đầu</th>
                        <th>Giờ Kết Thúc</th>
                        <th>Ngày Chiếu</th>
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
							<td id="giobatdau-{{$item->id}}">{{$item->giobatdau}}</td>
                            <td id="gioketthuc-{{$item->id}}">{{$item->gioketthuc}}</td>
                            <td id="ngaychieu-{{$item->id}}">{{$item->ngaychieu}}</td>
							<td>
								<button data-url=""​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button>
								<a href="{{route('suatchieu.edit',$item->id)}}"​  class="btn btn-warning btn-edit">Edit</a>
								<a href="{{route('suatchieu.destroy',$item->id)}}"​   class="btn btn-danger btn-delete">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{-- {{$items->links()}} --}}
		</div>
		<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
		></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script type="text/javascript" charset="utf-8">
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>
@endsection