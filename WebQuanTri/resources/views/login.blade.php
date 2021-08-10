@extends('masterlogin')
@section('title', 'Trang chủ')
@section('content')

<div class="col-md-12 home_style">


		<div class="login-screen">
			<div class="app-title">
				<h1>Đăng Nhập</h1>
			</div>
			<form action="/login" method="post">
				{{ csrf_field() }}	
				<div class="login-form" >
					@if(session('notice'))
   			 		<p style="color:red">
   		    		 {{session('notice')}}
    				</p>
   				 @endif
				<div class="control-group">
				
					<input type="text" class="login-field" value="" placeholder="Tài Khoản"  name="username">
					<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
					<input type="password" class="login-field" value="" placeholder="Mật khẩu" name="password">
					<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<button type="submit" class="btn btn-primary btn-large btn-block">Đăng nhập</button> 
				
			</div>
		</div>
	</form>
</div>
@endsection