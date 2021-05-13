        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="https://via.placeholder.com/250x140" alt="" />
                                                             @if(Auth::guard('admin')->check())
                                                        <span class="admin-name">{{Auth::guard('admin')->user()->display_name}} -  {{Auth::guard('admin')->user()->id}} -{{Auth::guard('admin')->user()->role}}</span>
                                                        @endif
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                     
                                                        <li><a href="quantri/dangxuat"><span class="edu-icon edu-locked author-log-ic"></span>Đăng xuất</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->

            
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                       
                                        <li><a href="javascript:void(0)">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="javascript:void(0)">Sản phẩm <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="quantri/danhmucsanpham/danhsach">Danh mục sản phẩm</a>
                                                </li>
                                                <li><a href="quantri/loaisanpham/danhsach">Loại sản phẩm</a>
                                                </li>
                                                <li><a href="quantri/sanpham/danhsach">Sản phẩm</a>
                                                </li>
                                                <li><a href="quantri/phanhoisanpham/danhsach">Phản hồi sản phẩm</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#hoadon" href="javascript:void(0)">Hóa đơn <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="hoadon" class="collapse dropdown-header-top">
                                                <li><a href="quantri/hoadon/danhsach">Danh sách hóa đơn</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#taikhoan" href="javascript:void(0)">Tài khoản <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="quantri/quantrivien/danhsach">Quản trị viên</a>
                                                </li>
                                                <li><a href="quantri/nguoidung/danhsach">Người dùng</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        </div>