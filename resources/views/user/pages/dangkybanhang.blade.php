<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 
<!-- <section class="login-block">
    <div class="container">
    <div class="row">
        <div class="col-md-4 login-sec">
            <h2 class="text-center">Đăng ký Bán hàng</h2>
<form class="login-form" action="{{route('postdangky')}}" method="post">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Tên người dùng</label>
    <input name="name" type="text" class="form-control" placeholder="Nhập tên...">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input name="email" type="text" class="form-control" placeholder="Nhập email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Mật khẩu</label>
    <input name="password" type="password" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase"> nhập lại Mật khẩu</label>
    <input type="password" class="form-control" placeholder="">
  </div>
  
  <div class="form-check">
   
    <a href="{{route('trangchu')}}" type="submit" class="btn btn-login float-right">đăng nhập</a>
  </div>
    <div class="form-check">
   
    <button type="submit" class="btn btn-login float-right">Đăng ký</button>
  </div>
  
</form>

     
</div>
</section> -->

@extends('user/layout/index')

@section('title')

@endsection

@section('content') 
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">  
           
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <form method="post" id="form_singin">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Đăng ký</h4>
                        <div class="alert alert-danger" id="error_post_singin" style="display: none;">
                            <center>
                                <strong>Đăng ký tài khoản thất bại!</strong> Vui lòng kiểm tra lại thông tin.
                            </center>
                        </div> 
                        <div class="alert alert-danger" id="error_exist_user" style="display: none;">
                            <center>
                                <strong>Tài khoản đã tồn tại!</strong> Vui lòng kiểm tra lại thông tin.
                            </center>
                        </div> 
                        <div class="alert alert-success" id="success_singin" style="display: none;">
                            <center>
                                <strong>Đăng ký thành công!</strong> Vui lòng đăng nhập để sử dụng.
                            </center>
                        </div>
                        <div class="row"> 
                            <div class="col-md-12 col-12 mb-20">
                                <label>Tên shop hiển thị *</label>
                                <input name="ten_hien_thi" class="mb-0" type="text" placeholder="Nhập tên hiển thị" maxlength="30">
                            </div>
                            <div class="col-md-12 col-12">
                                <label id="loi_tai_Khoan" class="error"></label>
                            </div>
                            <div class="col-md-12 col-12 mb-20">
                                <label>Tên tài khoản *</label>
                                <input id="ten_tai_khoan" name="ten_tai_khoan" class="mb-0" type="text" placeholder="Nhập tên tài khoản">
                            </div>
                            <div class="col-md-12 col-12">
                                <label id="loi_email" class="error"></label>
                            </div>  
                            <div class="col-md-12 mb-20">
                                <label>Email *</label>
                                <input id="mail_tai_khoan" name="mail_tai_khoan" class="mb-0" type="email" placeholder="Nhập địa chỉ Email">
                            </div>
                            <div class="col-md-12 col-12">
                                <label id="loi_mat_khau" class="error"></label>
                            </div>  
                            <div class="col-md-6 mb-20">
                                <label>Mật khẩu</label>
                                <input id="mat_khau_tai_khoan" name="mat_khau_tai_khoan" class="mb-0" type="password" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Xác nhận mật khẩu</label>
                                <input id="xac_nhan_tai_khoan" name="xac_nhan_tai_khoan" class="mb-0" type="password" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="form-check">
   
                            <a href="{{route('trangchu')}}" type="submit" class="btn btn-login float-right">đăng nhập</a>
                          </div>
                            <div class="col-12">
                                <button type="button" id="sub_form_singin" class="register-button mt-0">Đăng ký</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login Content Area End Here -->
@endsection

@section('script')
<script>

    $('#sub_form_login').click(function() { 
        $('#error_name').text("");
        $('#error_pass').text(""); 
        $('#loi_tai_Khoan').text(""); 
        $('#loi_email').text(""); 
        $('#loi_mat_khau').text(""); 
        $("#success_singin").css("display", "none");   

        var check_name = /^[A-Za-z0-9@.]{6,80}$/;
        if(!$('#name_login').val().match(check_name)){
            $('#error_name').text("Tên đăng nhập không hợp lệ");  
            return false;  
        }
        var check_pass = /^([a-zA-Z0-9@*#]{6,30})$/;
        if(!$('#pass_login').val().match(check_pass)){
            $('#error_pass').text("Mật khẩu không hợp lệ"); 
            return false; 
        }  
        $.ajax({
            type: "POST",
            url: 'dang-nhap',
            data: $('#form_login').serialize(),
            success: function( msg ) {
                if(msg != "false"){
                    location.href = msg; 
                } 
                else{
                    $("#error_post_login").css("display", "block"); 
                }  
            }
        });
        return false; 
    }); 

    $('#sub_form_singin').click( function(){
        $('#error_name').text("");
        $('#error_pass').text(""); 
        $('#loi_tai_Khoan').text(""); 
        $('#loi_email').text(""); 
        $('#loi_mat_khau').text(""); 
        $("#success_singin").css("display", "none");  

        var ten_tai_khoan = /^[A-Za-z0-9@.]{6,80}$/;
        if(!$('#ten_tai_khoan').val().match(ten_tai_khoan)){
            $('#loi_tai_Khoan').text("Tên tài khoản không hợp lệ");  
            return false;
        }
        var email_dang_ky = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!$('#mail_tai_khoan').val().match(email_dang_ky)){
            $('#loi_email').text("Email không hợp lệ");  
            return false;
        }
        var mat_khau_dang_ky = /^([a-zA-Z0-9@*#]{6,30})$/;
        if(!$('#mat_khau_tai_khoan').val().match(mat_khau_dang_ky)){
            $('#loi_mat_khau').text("Mật khẩu không hợp lệ");  
            return false;
        }  
        if($('#mat_khau_tai_khoan').val() != $('#xac_nhan_tai_khoan').val()){
            $('#loi_mat_khau').text("Không khớp mật khẩu");  
            return false;
        }
        $.ajax({
            type: "POST",
            url: 'postdangky',
            data: $('#form_singin').serialize(),
            success: function( msg ) {
                switch(msg){
                    case 'exist': 
                        $("#error_exist_user").css("display", "block");
                        setTimeout(function(){ 
                            $("#error_exist_user").css("display", "none");
                        }, 5000);
                        break;
                    case 'true': 
                        $("#success_singin").css("display", "block");  
                        $('#form_singin').trigger("reset");
                    break;
                    case 'false':
                        $("#error_post_singin").css("display", "block");
                        setTimeout(function(){ 
                            $("#error_post_singin").css("display", "none");
                        }, 5000);
                    break;  
                }
            }
        });
        return false; 
    });

</script>
@endsection