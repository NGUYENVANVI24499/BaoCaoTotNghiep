@extends('admin/layout/index')

@section('admin_css')
    <!-- tree viewer CSS
        ============================================ -->
    <link rel="stylesheet" href="admin/css/tree-viewer/tree-viewer.css">
@endsection
 
@section('admin_content')
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome" style="margin-top: 60px;     margin-bottom: 6px;">
                            <div class="row">
                                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="quantri/trangchu">My shop</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Tổng quan</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- Loading Start -->
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
        <!-- Loading End -->
        <!-- TreeView Start -->
        <div class="tree-viewer-area mg-b-15" id="hidden-loading" style="display: none;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline9-list shadow-reset responsive-mg-b-30">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>Cây thư mục sản phẩm</h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div class="edu-content res-tree-ov">
                                    <div id="jstree1">
                                        <ul>
                                            @foreach($danh_muc_sp as $danh_muc)
                                            <li> {{$danh_muc->ten}}
                                                <ul>
                                                    @foreach($loai_sp as $loai)
                                                    @if($loai->id_danh_muc_sp == $danh_muc->id)
                                                    <li> {{$loai->ten}}
                                                        <ul>
                                                            @foreach($san_pham as $sp)
                                                            @if($sp->id_loai_sp == $loai->id)
                                                            <li onclick="clickSanPham({{$sp->id }});"> {{$sp->ten}}</li>
                                                            @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline9-list shadow-reset responsive-mg-b-30">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>Cây thư mục dịch vụ</h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div class="edu-content res-tree-ov">
                                    <div id="jstree2">
                                        <ul>
                                            @foreach($danh_muc_sp as $danh_muc)
                                            <li> {{$danh_muc->ten}}
                                                <ul>
                                                    @foreach($loai_sp as $loai)
                                                    @if($loai->id_danh_muc_sp == $danh_muc->id)
                                                    <li> {{$loai->ten}}
                                                        <ul>
                                                            @foreach($san_pham as $sp)
                                                            @if($sp->id_loai_sp == $loai->id)
                                                            <li onclick="clickSanPham({{$sp->id }});"> {{$sp->ten}}</li>
                                                            @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  -->
        <div class="tree-viewer-area mg-b-15" id="hidden-loading1" style="display: none;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline9-list shadow-reset responsive-mg-b-30">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>Mục tiêu: Kinh doanh hợp pháp, Khách hàng là thượng đế !</h1>
                                    <h1>Admin: NGUYỄN VĂN VĨ</h1>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TreeView End -->
@endsection

@section('admin_script')
   <script>
        function clickSanPham(id){
            alert(id)
        }
        window.onload = function () {
            document.getElementById('show-loading').style.display = 'none'
            document.getElementById('hidden-loading').style.display = 'block'
            document.getElementById('hidden-loading1').style.display = 'block'
        };
    </script>
    <!-- Tree Viewer JS
        ============================================ -->
    <script src="admin/js/tree-line/jstree.min.js"></script>
    <script>
        (function ($) {
             "use strict";
                        
                
            $('#jstree1').jstree({
                'core' : {
                    'check_callback' : true
                }
            });

            $('#jstree2').jstree({
                'core' : {
                    'check_callback' : true
                }
            });

            $('#jstree3').jstree({
                'core' : {
                    'check_callback' : true
                }
            });
        })(jQuery);
    </script>
@endsection