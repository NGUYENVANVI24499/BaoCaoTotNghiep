@extends('admin/layout/index')

@section('admin_css')
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="admin/css/form/all-type-forms.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="admin/css/datapicker/datepicker3.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="admin/css/summernote/summernote.css">
    <link rel="stylesheet" href="admin/css/data-table/bootstrap-table.css">
<style>
    /*CSS remove icon input[type=number]*/
    input[type="number"]::-webkit-outer-spin-button, 
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }
     
    input[type=file]{
            display: inline;
        }
    .shadow-upload {
        -webkit-border-radius: 0% 0% 100% 100% / 0% 0% 8px 8px;
        -webkit-box-shadow: rgba(0, 0, 0,.30) 0 2px 3px;
    }
    .box-upload {
        margin: 0 auto;
        margin-top: 10px;
        background: #F2F2F2;
        border: 1px solid #ccc;
        box-shadow: 1px 1px 2px #fff inset,
                  -1px -1px 2px #fff inset;
        border-radius: 3px/6px;
    }
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
    .disable-cursor{
        cursor:no-drop;
    }
    .disable-point{
        pointer-events: none;
    }
    .option-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        position: relative;
        top: 8.33333px;
        right: 0;
        bottom: 0;
        left: 0;
        height: 25px;
        width: 25px;
        transition: all 0.15s ease-out 0s;
        background: #cbd1d8;
        border: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        margin-right: 0.5rem;
        outline: none;
        position: relative;
        z-index: 1000;
    }
    .option-input:hover {
        background: #9faab7;
    }
    .option-input:checked {
        background: #40e0d0;
    }
    .option-input:checked::before {
        height: 25px;
        width: 25px;
        position: absolute;
        content: '???';
        display: inline-block;
        font-size: 20.66667px;
        text-align: center;
        line-height: 25px;
    }
    .option-input:checked::after {
        -webkit-animation: click-wave 0.65s;
        -moz-animation: click-wave 0.65s;
        animation: click-wave 0.65s;
        background: #40e0d0;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
    }
    .option-input.radio {
        border-radius: 50%;
        margin-right: 5px;
    }
    .option-input.radio::after {
        border-radius: 50%;
    }
    .ml-15{
        margin-left: 15px;
    }
    .ml-10{
        margin-left: 10px;
    }
  </style>
@endsection
 
@section('admin_content')
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome" style="margin-top: 60px;     margin-bottom: 6px;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="T??m ki???m..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="/quantri/trangchu">Admin</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><a href="/quantri/sanpham/danhsach">S???n ph???m</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Ch???nh s???a</span>
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
                            <div class="pt-5" style="min-height: 65vh;">
                                <div class="loading-spinner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Loading End -->
        <!-- Content Start -->
        <div class="single-pro-review-area mt-t-30 mg-b-15" id="hidden-loading" style="display: none;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <h3>{{$san_pham->ten}}<span><button class="btn btn-success pull-right" onclick="showSP({{$san_pham->id}})">Xem k???t qu???</button></span></h3>
                            <hr>
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#thongtin">Th??ng tin</a></li>
                                <li><a href="#thongso">Th??ng s??? k??? thu???t</a></li>
                                <li><a href="#thongtinchitiet">Th??ng tin chi ti???t</a></li>
                                <li><a href="#hinhanh">H??nh ???nh</a></li>
                                <li><a href="#phanhoi">Ph???n h???i</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="thongtin">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <form id="form-thongtin" method="POST" enctype="application/x-www-form-urlencoded">
                                    @csrf
                                    <input type="text" value="{{$san_pham->id}}" class="hidden" name="id">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ch???n danh m???c s???n ph???m</label>
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="id_danh_muc_sp" required="" onchange="changeDanhMuc(this.value)" oninvalid="this.setCustomValidity('Vui l??ng ch???n danh m???c')" oninput="setCustomValidity('')">
                                                            <option value="">Ch???n danh m???c</option>
                                                        @foreach($danh_muc_sp as $danh_muc)
                                                        @if($danh_muc->id == $danh_muc_sp_hien_tai->id)
                                                            <option value="{{$danh_muc->id}}" selected="">{{ $danh_muc->ten }}</option>
                                                        @else
                                                            <option value="{{$danh_muc->id}}">{{ $danh_muc->ten }}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ch???n lo???i</label>
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="id_loai_sp" required="" id="chonloai" oninvalid="this.setCustomValidity('Vui l??ng ch???n lo???i s???n ph???m')" oninput="setCustomValidity('')">
                                                            <option value="">Ch???n lo???i</option>
                                                        @foreach($loai_sp_hien_tai as $loai_sp)
                                                        @if($loai_sp->id == $san_pham->id_loai_sp)
                                                            <option value="{{$loai_sp->id}}" selected="">{{ $loai_sp->ten }}</option>
                                                        @else
                                                            <option value="{{$loai_sp->id}}">{{ $loai_sp->ten }}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>T??n s???n ph???m</label>
                                                <input type="text" class="form-control" placeholder="T??n lo???i s???n ph???m" required="" name="ten" oninvalid="this.setCustomValidity('Vui l??ng nh???p t??n lo???i s???n ph???m')" oninput="setCustomValidity('')" value="{{$san_pham->ten}}" maxlength="191">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Ch???n l??m s???n ph???m m???i</label>
                                                <div class="form-check">
                                                @if($san_pham->moi)
                                                    <input class="form-check-input" type="radio" name="moi" value="1" checked>
                                                    <label class="form-check-label">C??</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="moi" value="0">
                                                    <label class="form-check-label">Kh??ng</label>
                                                @else
                                                    <input class="form-check-input" type="radio" name="moi" value="1">
                                                    <label class="form-check-label">C??</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="moi" value="0" checked="">
                                                    <label class="form-check-label">Kh??ng</label>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Ch???n l??m s???n ph???m n???i b???t</label>
                                                <div class="form-check">
                                                @if($san_pham->noi_bat)
                                                    <input class="form-check-input" type="radio" name="noi_bat" value="1" checked>
                                                    <label class="form-check-label">C??</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="noi_bat" value="0">
                                                    <label class="form-check-label">Kh??ng</label>
                                                @else
                                                    <input class="form-check-input" type="radio" name="noi_bat" value="1">
                                                    <label class="form-check-label">C??</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="noi_bat" value="0" checked="">
                                                    <label class="form-check-label">Kh??ng</label>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gi?? g???c</label>
                                                <input type="number" class="form-control" placeholder="Nh???p gi?? g???c" required="" name="gia_goc" onkeyup="changeGiaGoc(this)" id="giagoc" oninvalid="onValidateGiaGoc(this)" oninput="setCustomValidity('')" value="{{$san_pham->gia_goc}}" min="0" max="100000000000">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Khuy???n m??i (%)</label>
                                                <input type="number" class="form-control" placeholder="Nh???p khuy???n m??i" required="" name="khuyen_mai" onkeyup="changeKhuyenMai(this)" id="khuyenmai" oninvalid="onValidateKhuyenMai(this)" oninput="setCustomValidity('')" min="0" max="100" value="{{$san_pham->khuyen_mai}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gi?? b??n</label>
                                                <input type="number" class="form-control" placeholder="Nh???p gi?? b??n" required="" name="gia_ban" id="giaban" value="{{$san_pham->gia_ban}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>M?? t??? v??? s???n ph???m</label>
                                                <textarea class="form-control" placeholder="Nh???p m?? t???" style="min-height: 300px;" name="mo_ta">{{$san_pham->mo_ta}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            @if($san_pham->khuyen_mai > 0)
                                            <div class="form-group data-custon-pick data-custom-mg" id="data_5" style="display: block;">
                                                <label><b>Ch???n ng??y khuy???n m??i</b></label>
                                                <div class="input-daterange input-group" id="datepicker">
                                                    <input type="text" class="form-control" name="ngay_bat_dau_khuyen_mai" id="datefrom" oninvalid="this.setCustomValidity('Vui l??ng nh???p ng??y b???t ?????u khuy???n m??i')" oninput="setCustomValidity('')" required="" value="{{date('d/m/Y' , strtotime($san_pham->ngay_bat_dau_khuyen_mai))}}">
                                                    <span class="input-group-addon">to</span>
                                                    <input type="text" class="form-control" name="ngay_ket_thuc_khuyen_mai" id="dateto" oninvalid="this.setCustomValidity('Vui l??ng nh???p ng??y k???t th??c khuy???n m??i')" oninput="setCustomValidity('')" required="" value="{{date('d/m/Y' , strtotime($san_pham->ngay_ket_thuc_khuyen_mai))}}">
                                                </div>
                                            </div>
                                            @else
                                            <div class="form-group data-custon-pick data-custom-mg" id="data_5" style="display: none;">
                                                <label><b>Ch???n ng??y khuy???n m??i</b></label>
                                                <div class="input-daterange input-group" id="datepicker">
                                                    <input type="text" class="form-control" name="ngay_bat_dau_khuyen_mai" id="datefrom" oninvalid="this.setCustomValidity('Vui l??ng nh???p ng??y b???t ?????u khuy???n m??i')" oninput="setCustomValidity('')" required="" value="{{date('d/m/Y' , strtotime($san_pham->ngay_bat_dau_khuyen_mai))}}">
                                                    <span class="input-group-addon">to</span>
                                                    <input type="text" class="form-control" name="ngay_ket_thuc_khuyen_mai" id="dateto" oninvalid="this.setCustomValidity('Vui l??ng nh???p ng??y k???t th??c khuy???n m??i')" oninput="setCustomValidity('')" required="" value="{{date('d/m/Y' , strtotime($san_pham->ngay_ket_thuc_khuyen_mai))}}">
                                                </div>
                                            </div>
                                            @endif
    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary pull-right">L??u l???i</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-danger" onclick="destroy()">H???y b???</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="thongso">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <form id="form-thongso" method="POST" enctype="application/x-www-form-urlencoded">
                                    @csrf
                                        <input type="text" value="{{$san_pham->id}}" name="id" class="hidden">
                                        <div class="tinymce-single responsive-mg-b-30">
                                            <div>
                                                 <textarea id="summernote1" name="thong_so">{!! $san_pham->thong_so !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary pull-right">L??u l???i</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-danger" onclick="destroy()">H???y b???</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="thongtinchitiet">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <form id="form-thongtinchitiet" method="POST" enctype="application/x-www-form-urlencoded">
                                    @csrf
                                        <input type="text" value="{{$san_pham->id}}" name="id" class="hidden">
                                        <div class="tinymce-single responsive-mg-b-30">
                                            <div>
                                                 <textarea id="summernote2" name="thong_tin_chi_tiet">{!! $san_pham->thong_tin_chi_tiet !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary pull-right">L??u l???i</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-danger" onclick="destroy()">H???y b???</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="hinhanh">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <form method="post" enctype="multipart/form-data" id="form-hinhanh" name="form_hinhanh">
                                                            @csrf
                                                            <input type="text" value="{{$san_pham->id}}" name="id" class="hidden">
                                                            <input type="file" id="upload-image" name="upload_image[]" multiple/>
                                                            <button class="btn btn-success" type="button" onclick="uploadImg()">T???i ???nh l??n</button>
                                                            <button class="btn btn-success" type="button" onclick="uploadImgView()">T???i ???nh l??n v?? xem th??ng tin s???n ph???m</button>
                                                        </form>
                                                        <br/>
                                                        <div class="box-upload">
                                                            <div id="image_preview"></div>
                                                        </div>
<div id="uploaded">
    <h1 style="margin-top: 50px;">H??nh ???nh ???? t???i l??n</h1>
    <div id="image_preview-upload">
        <div class="box-upload" style="margin-top: 10px; padding: 20px;">
            <div class="row">
                @for ($i = 0; $i < count($hinh_anh_sp); $i++)
                <div class="col-md-3">
                    <img src="uploads/images/products/{{$hinh_anh_sp[$i]->ten}}" alt="" class="img-thumbnail">
                    <label class="ml-15">
                    @if($hinh_anh_sp[$i]->hinh_chinh)
                    <input type="radio" class="option-input radio" name="hinh_chinh" onclick="changeHinhChinh({{$hinh_anh_sp[$i]->id}}, this, {{$i}})" checked="" />
                    @else
                    <input type="radio" class="option-input radio" name="hinh_chinh" onclick="changeHinhChinh({{$hinh_anh_sp[$i]->id}}, this, {{$i}})" />
                    @endif
                    Ch???n l??m h??nh ch??nh
                    </label>
                    <button class="btn btn-default btn-xs ml-10" onclick="deleteImg({{$hinh_anh_sp[$i]->id}}, {{$i}}, {{$hinh_anh_sp[$i]->hinh_chinh}})">X??a</button>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="phanhoi">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline13-graph">
                                <table class="table hover-table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>T??n kh??ch h??ng</th>
                                                <th>Email</th>
                                                <th>N???i dung</th>
                                                <th>Tr???ng th??i</th>
                                                <th>X??a</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($phan_hoi_sp as $phan_hoi)
                                            <tr id="delete-phan-hoi{{$phan_hoi->id }}">
                                                <td>{{ $phan_hoi->id}}</td>
                                                <td>{{ $phan_hoi->ten_hien_thi}}</td>
                                                <td>{{ $phan_hoi->email}}</td>
                                                <td>{{ $phan_hoi->noi_dung}}</td>
                                                <td id="change-duyet{{$phan_hoi->id }}">
                                                    @if($phan_hoi->duyet)
                                                    <button title="Click ????? ?????i tr???ng th??i" class="btn btn-secondary btn-sm" onclick="changePhanHoiDuyet({{$phan_hoi->id}}, {{$phan_hoi->duyet}})">???? duy???t
                                                    </button>
                                                    @else
                                                    <button title="Click ????? ?????i tr???ng th??i" class="btn btn-warning btn-sm" onclick="changePhanHoiDuyet({{$phan_hoi->id}}, {{$phan_hoi->duyet}})">
                                                        Ch??a duy???t
                                                    </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button title="X??a" class="pd-setting-ed" onclick="deletePhanHoiID({{$phan_hoi->id }})">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>                 
                                                       <!--  <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name">T??n kh??ch h??ng</th>
                                                <th data-field="email">Email</th>
                                                <th data-field="phone">N???i dung</th>
                                                <th data-field="task">Tr???ng th??i</th>
                                                <th data-field="delete">X??a</th> -->
                                
                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->
@endsection

@section('admin_script')
    <!-- datapicker JS
        ============================================ -->
    <script src="admin/js/datapicker/bootstrap-datepicker.js"></script>
    <!-- summernote JS
        ============================================ -->
    <script src="admin/js/summernote/summernote.min.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="admin/js/data-table/bootstrap-table.js"></script>
    <script src="admin/js/data-table/tableExport.js"></script>
    <script src="admin/js/data-table/data-table-active.js"></script>
    <script src="admin/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="admin/js/data-table/colResizable-1.5.source.js"></script>
    <script src="admin/js/data-table/bootstrap-table-export.js"></script>
   <script>
        window.onload = function () {
            document.getElementById('show-loading').style.display = 'none'
            document.getElementById('hidden-loading').style.display = 'block'
        };

        // Remove event input[type=number]
jQuery(document).ready( function($) {
    // Disable scroll when focused on a number input.
    $('form').on('focus', 'input[type=number]', function(e) {
        $(this).on('wheel', function(e) {
            e.preventDefault();
        });
    });
 
    // Restore scroll on number inputs.
    $('form').on('blur', 'input[type=number]', function(e) {
        $(this).off('wheel');
    });
 
    // Disable up and down keys.
    $('form').on('keydown', 'input[type=number]', function(e) {
        if ( e.which == 38 || e.which == 40 )
            e.preventDefault();
    });  
});

$("#upload-image").change(function(){
    $('#image_preview').html("");
    var total_file=document.getElementById("upload-image").files.length;
    for(var i=0;i<total_file;i++){
        $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
    }
});

function changeDanhMuc(str){
    if (str == "") {
        $('#chonloai').html('<option value="">Ch???n lo???i</option>')
        return
    }
    $.ajax({
        type: 'POST',
        url:'quantri/sanpham/changedanhmuc',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id_danh_muc_sp: str
        },
        success: function(response){
            $('#chonloai').html(response)
        }
    })
}

function changeGiaGoc(input){
    if(Number(input.value) != 0){
        input.value = Number(input.value)
        var giaban = Number(input.value) - Number(input.value) * Number(document.getElementById('khuyenmai').value) / 100
        document.getElementById('giaban').value =  Math.round(giaban/1000)*1000
    }
    else {
        input.value = ''
        document.getElementById('giaban').value = '0'
    }
}

function onValidateGiaGoc(input){
    if(input.validity.rangeOverflow){
        input.setCustomValidity('Gi?? g???c v?????t qu?? 100.000.000.000')
    } else input.setCustomValidity('Vui l??ng nh???p gi?? g???c cho s???n ph???m')
}

function changeKhuyenMai(input){
    if(Number(input.value) != 0){
        input.value = Number(input.value)
        var giaban = document.getElementById('giagoc').value - Number(input.value) * Number(document.getElementById('giagoc').value) / 100
        document.getElementById('giaban').value =  Math.round(giaban/1000)*1000 
    }
    else {
        input.value = '0'
        document.getElementById('giaban').value = '0'
    }
    if(0 == input.value) {
        document.getElementById('data_5').style.display = 'none'
        var giaban = document.getElementById('giagoc').value - Number(input.value) * Number(document.getElementById('giagoc').value) / 100
        document.getElementById('giaban').value =  Math.round(giaban/1000)*1000 
    }
    else {
        document.getElementById("datefrom").value = new Date().toJSON().slice(0,10).split('-').reverse().join('/')
        document.getElementById("dateto").value = new Date().toJSON().slice(0,10).split('-').reverse().join('/')
        document.getElementById('data_5').style.display = 'block'
    }
}

function onValidateKhuyenMai(input){
    if(input.validity.rangeOverflow){
        this.setCustomValidity('Khuy???n m??i gi???i h???n t??? 0 - 100')
    } else {
        this.setCustomValidity('Vui l??ng nh???p khuy???n m??i')
    }
}


(function ($) {
    "use strict";
    // document.getElementById("datefrom").value = new Date().toJSON().slice(0,10).split('-').reverse().join('/')
    // document.getElementById("dateto").value = new Date().toJSON().slice(0,10).split('-').reverse().join('/')
    $('#data_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: "dd/mm/yyyy"
    });
    $('#summernote1').summernote({
        height: 400,
    });
    $('#summernote2').summernote({
        height: 400,
    });
})(jQuery);

function destroy(){
    window.location.href="quantri/sanpham/danhsach"
}

var indexBefore = -1;

$('#form-thongtin').submit(function() {
    $.ajax({
        type: 'POST',
        url:'quantri/sanpham/chinhsua',
        data: $('#form-thongtin').serialize(),
        success: function(response){
            if(response.status){
                Lobibox.notify('success', {
                    size: 'mini',
                    msg: "Ch???nh s???a s???n ph???m th??nh c??ng."
                });
                scrollToTopAnimate(1000)
            } else {
                Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'Ch???nh s???a s???n ph???m th???t b???i.'
                });
            }
        }
    })
    return false;
})

$('#form-thongso').submit(function() {
    $.ajax({
        type: 'POST',
        url:'quantri/sanpham/chinhsuathongso',
        data: $('#form-thongso').serialize(),
        success: function(response){
            if(response.status){
                Lobibox.notify('success', {
                    size: 'mini',
                    msg: "Ch???nh s???a th??ng s??? k??? thu???t cho s???n ph???m th??nh c??ng."
                });
                    scrollToTopAnimate(1000)

            } else {
                Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'Ch???nh s???a th??ng s??? k??? thu???t cho s???n ph???m th???t b???i.'
                });
            }
        }
    })                
    return false;
})

$('#form-thongtinchitiet').submit(function() {
    $.ajax({
        type: 'POST',
        url:'quantri/sanpham/chinhsuathongtinchitiet',
        data: $('#form-thongtinchitiet').serialize(),
        success: function(response){
            if(response.status){
                Lobibox.notify('success', {
                    size: 'mini',
                    msg: "Ch???nh s???a th??ng s??? k??? thu???t cho s???n ph???m th??nh c??ng."
                });
                    scrollToTopAnimate(1000)

            } else {
                Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'Ch???nh s???a th??ng s??? k??? thu???t cho s???n ph???m th???t b???i.'
                });
            }
        }
    })                
    return false;
})

 function changeHinhChinh(id, input, index){
    var id_sp = document.forms.form_hinhanh.id.value
    
    $.ajax({
        type: 'POST',
        url: 'quantri/hinhanhsanpham/changehinhchinh',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: id,
            id_sp: id_sp,
        },
        success: function(response){
            if(response.status){
                indexBefore = index
                Lobibox.notify('success', {
                    size: 'mini',
                    msg: "Thay ?????i h??nh ???nh l??m h??nh ???nh ch??nh th??nh c??ng."
                });
            } else {
                input.checked = false;
                document.forms.form_loadajaxhinhanh.hinh_chinh[indexBefore].checked = true
                Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'Thay ?????i h??nh ???nh l??m h??nh ???nh ch??nh th???t b???i.'
                });
            }
        }
    })
    return false
}

function uploadImg() {
    let image_upload = new FormData();
    let totalImages = $('#upload-image')[0].files.length;
    if(totalImages <= 0){
        Lobibox.notify('warning', {
            size: 'mini',
            msg: "Vui l??ng ch???n h??nh ???nh tr?????c khi t???i ???nh l??n"
        });
        return false
    }
    for(let i = 0; i < totalImages; i++){
        image_upload.append('images[]', $('#upload-image')[0].files[i])
    }
    image_upload.append('totalImages', totalImages)
    image_upload.append('id', document.forms.form_hinhanh.id.value)

    image_upload.append("_token",$('meta[name="csrf-token"]').attr('content'))

    $.ajax({
        type: 'POST',
        url:'quantri/hinhanhsanpham/them',
        data: image_upload,
        contentType: false,
        processData: false,
        success: function(response){
            if(response.status){
                $('#image_preview').html('')
                $('#uploaded').html('')
                $('#uploaded').append('<h1 style="margin-top: 50px;">???nh c???a s???n ph???m ???? t???i l??n</h1>');
                $('#uploaded').append('<div id="image_preview-upload"></div>');
                
                let str = '';
                str +='<div class="box-upload" style="margin-top: 10px; padding: 20px;"><form name="form_loadajaxhinhanh"><div class="row">';

                for(var i = 0; i < response.hinh_anh.length; i++){
                    
                    str += '<div class="col-md-3" style="margin-bottom: 10px;">';
                    str += '<img src="uploads/images/products/' + response.hinh_anh[i].ten +'" alt="" class="img-thumbnail">';
                    str += '<label class="ml-15">';
                    if(response.hinh_anh[i].hinh_chinh){
                        str += '<input type="radio" class="option-input radio" name="hinh_chinh" onchange="changeHinhChinh('+ response.hinh_anh[i].id +', this, '+ i + ')" checked="" />';
                        indexBefore = i;
                    }else str += '<input type="radio" class="option-input radio" name="hinh_chinh" onchange="changeHinhChinh('+ response.hinh_anh[i].id +', this, '+ i + ')" />';
                    str += 'Ch???n l??m h??nh ch??nh';
                    str += '</label>';
                    str += '<button class="btn btn-default btn-xs ml-10" onclick="deleteImg(' +response.hinh_anh[i].id + ','+ i + ')" type="button">X??a</button>';
                    str += '</div>';
                    if((i % 4) == 3) str += '</div><div class="row">';
                }
                str += '</div></form></div>';
                $('#image_preview-upload').append(str);
                Lobibox.notify('success', {
                    size: 'mini',
                    msg: "Th??m h??nh ???nh th??nh c??ng.\nTi???p t???c th??m h??nh ???nh cho s???n ph???m."
                });
            } else {
                Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'Th??m h??nh ???nh th???t b???i.'
                });
            }
        }
    })
     return false
}

function uploadImgView() {
    let image_upload = new FormData();
    let totalImages = $('#upload-image')[0].files.length;
    if(totalImages <= 0){
        Lobibox.notify('warning', {
            size: 'mini',
            msg: "Vui l??ng ch???n h??nh ???nh tr?????c khi t???i ???nh l??n"
        });
        return false
    }
    for(let i = 0; i < totalImages; i++){
        image_upload.append('images[]', $('#upload-image')[0].files[i])
    }
    image_upload.append('totalImages', totalImages)
    image_upload.append('id', document.forms.form_hinhanh.id.value)

    image_upload.append("_token",$('meta[name="csrf-token"]').attr('content'))

    $.ajax({
        type: 'POST',
        url:'quantri/hinhanhsanpham/them',
        data: image_upload,
        contentType: false,
        processData: false,
        success: function(response){
            if(response.status){
                $('#image_preview').html('')
                $('#uploaded').html('')
                $('#uploaded').append('<h1 style="margin-top: 50px;">H??nh ???nh ???? t???i l??n</h1>');
                $('#uploaded').append('<div id="image_preview-upload"></div>');
                
                let str = '';
                str +='<div class="box-upload" style="margin-top: 10px; padding: 20px;"><form name="form_loadajaxhinhanh"><div class="row">';

                for(var i = 0; i < response.hinh_anh.length; i++){
                    
                    str += '<div class="col-md-3" style="margin-bottom: 10px;">';
                    str += '<img src="uploads/images/products/' + response.hinh_anh[i].ten +'" alt="" class="img-thumbnail">';
                    str += '<label class="ml-15">';
                    if(response.hinh_anh[i].hinh_chinh){
                        str += '<input type="radio" class="option-input radio" name="hinh_chinh" onchange="changeHinhChinh('+ response.hinh_anh[i].id +', this, '+ i + ')" checked="" />';
                        indexBefore = i;
                    }else str += '<input type="radio" class="option-input radio" name="hinh_chinh" onchange="changeHinhChinh('+ response.hinh_anh[i].id +', this, '+ i + ')" />';
                    str += 'Ch???n l??m h??nh ch??nh';
                    str += '</label>';
                    str += '<button class="btn btn-default btn-xs ml-10" onclick="deleteImg(' +response.hinh_anh[i].id + ','+ i + ')" type="button">X??a</button>';
                    str += '</div>';
                    if((i % 4) == 3) str += '</div><div class="row">';
                }
                str += '</div></form></div>';
                $('#image_preview-upload').append(str);
                Lobibox.notify('success', {
                    size: 'mini',
                    msg: "Th??m h??nh ???nh th??nh c??ng.\nTi???p t???c th??m h??nh ???nh cho s???n ph???m."
                });
                window.location.href = 'quantri/sanpham/xem/' + document.forms.form_hinhanh.id.value
            } else {
                Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'Th??m h??nh ???nh th???t b???i.'
                });
            }
        }
    })
     return false
}

function deleteImg(id, index, hinhchinh){
    if($('input[name*="hinh_chinh"]').length == 1){
        swal({
            title: "Ch??? c??n h??nh ???nh duy nh???t. B???n c?? ch???c ch???n mu???n x??a?",
            text: "Sau khi x??a, h??nh ???nh s??? kh??ng th??? kh??i ph???c!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((isConfirm) => {
            if (isConfirm) {
                $.ajax({
                    type: 'GET',
                    url: 'quantri/hinhanhsanpham/xoa/' + document.forms.form_hinhanh.id.value + '/' + id,
                    success: function(response){
                        if(response.status){
                            $('#uploaded').html('')
                            $('#uploaded').append('<h1 style="margin-top: 50px;">???nh c???a s???n ph???m ???? t???i l??n</h1>');
                            $('#uploaded').append('<div id="image_preview-upload"></div>');
                            
                            let str = '';
                            str +='<div class="box-upload" style="margin-top: 10px; padding: 20px;"><form name="form_loadajaxhinhanh"><div class="row">';

                            for(var i = 0; i < response.hinh_anh.length; i++){
                                
                                str += '<div class="col-md-3" style="margin-bottom: 10px;">';
                                str += '<img src="uploads/images/products/' + response.hinh_anh[i].ten +'" alt="" class="img-thumbnail">';
                                str += '<label class="ml-15">';
                                if(response.hinh_anh[i].hinh_chinh){
                                    str += '<input type="radio" class="option-input radio" name="hinh_chinh" onchange="changeHinhChinh('+ response.hinh_anh[i].id +', this, '+ i + ')" checked="" />';
                                    indexBefore = i;
                                }else str += '<input type="radio" class="option-input radio" name="hinh_chinh" onchange="changeHinhChinh('+ response.hinh_anh[i].id +', this, '+ i + ')" />';
                                str += 'Ch???n l??m h??nh ch??nh';
                                str += '</label>';
                                str += '<button class="btn btn-default btn-xs ml-10" onclick="deleteImg(' +response.hinh_anh[i].id + ','+ i + ')" type="button">X??a</button>';
                                str += '</div>';
                                if((i % 4) == 3) str += '</div><div class="row">';
                            }
                            str += '</div></form></div>';
                            $('#image_preview-upload').append(str); 
                            Lobibox.notify('success', {
                                size: 'mini',
                                msg: 'X??a h??nh ???nh th??nh c??ng.'
                            });
                        } else {
                            Lobibox.notify('error', {
                                size: 'mini',
                                msg: 'X??a h??nh ???nh th???t b???i.'
                            });
                        }
                    }
                })
            } else {
                swal("D??? li???u kh??ng thay ?????i!")
            }
        });
    } else if(index == indexBefore || hinhchinh) {
        Lobibox.notify('warning', {
            size: 'mini',
            msg: 'H??y ch???n h??nh ???nh kh??c l??m h??nh ch??nh tr?????c khi x??a h??nh ???nh n??y'
        });
    } else {
        $.ajax({
            type: 'GET',
            url: 'quantri/hinhanhsanpham/xoa/' + document.forms.form_hinhanh.id.value + '/' + id,
            success: function(response){
                if(response.status){
                    $('#uploaded').html('')
                    $('#uploaded').append('<h1 style="margin-top: 50px;">???nh c???a s???n ph???m ???? t???i l??n</h1>');
                    $('#uploaded').append('<div id="image_preview-upload"></div>');
                    
                    let str = '';
                    str +='<div class="box-upload" style="margin-top: 10px; padding: 20px;"><form name="form_loadajaxhinhanh"><div class="row">';

                    for(var i = 0; i < response.hinh_anh.length; i++){
                        
                        str += '<div class="col-md-3" style="margin-bottom: 10px;">';
                        str += '<img src="uploads/images/products/' + response.hinh_anh[i].ten +'" alt="" class="img-thumbnail">';
                        str += '<label class="ml-15">';
                        if(response.hinh_anh[i].hinh_chinh){
                            str += '<input type="radio" class="option-input radio" name="hinh_chinh" onchange="changeHinhChinh('+ response.hinh_anh[i].id +', this, '+ i + ')" checked="" />';
                            indexBefore = i;
                        }else str += '<input type="radio" class="option-input radio" name="hinh_chinh" onchange="changeHinhChinh('+ response.hinh_anh[i].id +', this, '+ i + ')" />';
                        str += 'Ch???n l??m h??nh ch??nh';
                        str += '</label>';
                        str += '<button class="btn btn-default btn-xs ml-10" onclick="deleteImg(' +response.hinh_anh[i].id + ','+ i + ')" type="button">X??a</button>';
                        str += '</div>';
                        if((i % 4) == 3) str += '</div><div class="row">';
                    }
                    str += '</div></form></div>';
                    $('#image_preview-upload').append(str); 
                    Lobibox.notify('success', {
                        size: 'mini',
                        msg: 'X??a h??nh ???nh th??nh c??ng.'
                    });
                } else {
                    Lobibox.notify('error', {
                        size: 'mini',
                        msg: 'X??a h??nh ???nh th???t b???i.'
                    });
                }
            }
        })
    }
    return false;
}

function showSP(id){
    window.location.href = 'quantri/sanpham/xem/' + id
}

function deletePhanHoiID(id){
    $.ajax({
        type: 'GET',
        url: 'quantri/phanhoisanpham/xoa/' + id,
        success: (response)=>{
            if(response.status){
                removeElement('delete-phan-hoi' + id)
                Lobibox.notify('success', {
                    size: 'mini',
                    msg: 'X??a d??? li???u th??nh c??ng.'
                });
            } else {
                Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'X??a d??? li???u th???t b???i.'
                });
            }
        }
    })        
}

function changePhanHoiDuyet(id, trangthai){
    $.ajax({
        type: 'POST',
        url: 'quantri/phanhoisanpham/changeduyet',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: id,
            duyet: trangthai
        },
        success: (response) => {
            if(response.status){
                str = ''
                if(response.duyet){
                    str += '<button title="Click ????? ?????i tr???ng th??i" class="btn btn-secondary btn-sm" onclick="changePhanHoiDuyet(' + id + ', ' + response.duyet + ')"> ???? duy???t</button>'
                } else {
                    str += '<button title="Click ????? ?????i tr???ng th??i" class="btn btn-warning btn-sm" onclick="changePhanHoiDuyet(' + id + ', ' + response.duyet + ')"> Ch??a duy???t</button>'
                }
                $('#change-duyet' + id).html(str)
                Lobibox.notify('success', {
                    size: 'mini',
                    msg: 'Thay ?????i tr???ng th??i th??nh c??ng.'
                });
            } else {
                Lobibox.notify('error', {
                    size: 'mini',
                    msg: 'Thay ?????i tr???ng th??i th???t b???i.'
                });
            }                        
        }

    })
}
    </script>
@endsection