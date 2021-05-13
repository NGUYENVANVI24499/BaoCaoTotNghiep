<center>
	<form action="loginadmin" method="post">
		@csrf
		<input type="" name="name">
		<input type="" name="pass">
		<button type="submit">Đăng nhập</button>
	</form>  
	<button onclick='window.location.href="logoutadmin"'>Đăng xuất</button>
	@if(Auth::guard('admin')->check())
	<h1>{{Auth::guard('admin')->user()->name}}</h1>
	<h1>{{Auth::guard('admin')->user()->email}}</h1>
	<h1>{{Auth::guard('admin')->user()->password}}</h1>
	@endif
</center>