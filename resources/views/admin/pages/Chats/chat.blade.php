@extends('admin/layout/index')

@section('admin_css')

    <link rel="stylesheet" href="admin/css/form/all-type-forms.css">
    
@endsection


@section('admin_content')
<httpProtocol>
    <customHeaders>
        <add name="Access-Control-Allow-Origin" value="*" />
    </customHeaders>
</httpProtocol>
<?php header('Access-Control-Allow-Origin: *'); ?>


<div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome" style="margin-top: 60px;     margin-bottom: 6px;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="quantri/trangchu">Admin</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Chat</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <div class="data-table-area mg-b-15" id="show-loading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="pt-5" style="min-height: 50vh;">
                                <div class="loading-spinner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <div class="basic-form-area mg-b-15" id="hidden-loading" style="display: none;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Chat ...</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">

                            	<div id="data" class="row">
                            		@foreach($chats as $chat)

                            		<p><strong>{{$chat->author}}: </strong>{{$chat->content}}</p>
                            		@endforeach
                            	</div>
                                 <div class="row">
										 <form method="post" action="{{route('chats.store')}}">
										  @csrf
										  <div class="form-group">
										    <label for="exampleInputPassword1">Nội dung</label>
										    <input type="text" name="noidung" class="form-control" id="exampleInputPassword1" placeholder="nội dung">
										  </div>
										  
										  <button type="submit" class="btn btn-primary">gửi</button>
										</form>
										</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('admin_script')
   <script>
        window.onload = function () {
            document.getElementById('show-loading').style.display = 'none'
            document.getElementById('hidden-loading').style.display = 'block'
        };
    </script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.1/socket.io.min.js" integrity="sha512-eVL5Lb9al9FzgR63gDs1MxcDS2wFu3loYAgjIH0+Hg38tCS8Ag62dwKyH+wzDb+QauDpEZjXbMn11blw8cbTJQ==" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	
    	var socket = io('http://localhost:6001')
    	socket.on('demo_database_chat:message',function(data){
    		console.log(data)
    		if($('#'+data.id).length==0){
    			$('#data').append('<p><strong>'+data.author+'</strong:'+ data.content + '</p>')
    		}
    		else {
    			console.log('da co tn')
    		}
    	})

    		
    </script> -->
@endsection

