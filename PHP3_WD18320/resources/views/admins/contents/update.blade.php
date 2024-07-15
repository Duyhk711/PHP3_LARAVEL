@extends('layouts.admin')

@section('content')

<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">

      <div class="row">
          <div class="col-12">
              <div class="page_title_box d-flex align-items-center justify-content-between">
                  <div class="page_title_left">
                      <h3 class="f_s_30 f_w_700 text_white">{{$title}}</h3>
                      
                  </div>
                  
              </div>
          </div>
      </div>
     
      <div class="row ">
          <div class="col-lg">
              <div class="white_card card_height_100 mb_30 ">
                  <div class="white_card_header">
                      <div class="box_header m-0">
                          
                          <div class="header_more_tool">
                              <div class="dropdown">
                                  <span class="dropdown-toggle" id="dropdownMenuButton"
                                      data-bs-toggle="dropdown">
                                      <i class="ti-more-alt"></i>
                                  </span>
                                  <div class="dropdown-menu dropdown-menu-right"
                                      aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                          Action</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                          Delete</a>
                                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                          Edit</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                          Print</a>
                                      <a class="dropdown-item" href="#"> <i
                                              class="fa fa-download"></i> Download</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="white_card_body QA_section">
                      <form action="sanpham.update" method="PUT" enctype="multipart/form-data">
                        {{-- CSRF FIELD: là  --}}
                        @csrf
                        
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                            <label for="" >MÃ SẢN PHẨM </label>
                            <input
                              id="" name="ma_san_pham" type="text" class="form-control " value="{{$sanPham->ma_san_pham}}"  
                            />
                          </div>

                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                            <label for="" >TÊN SẢN PHẨM </label>
                            <input
                              id="" name="ten_san_pham" type="text" class="form-control "value="{{$sanPham->ten_san_pham}}" 
                            />
                          </div>

                        {{-- <div class="mb-3">
                            <label for=""  class="form-label">TÊN SẢN PHẨM</label>
                            <input type="text" name="ten_san_pham" class="form-control" placeholder="Nhập tên sản phẩm" id="">
                        </div> --}}

                        <div class="mb-3">
                            <label for=""  class="form-label">HÌNH ẢNH</label>
                            <input type="file" class="form-control" name="img_san_pham" placeholder="" id="" onchange="showImage(event)" >
                            
                        </div>
                        <img src="" id="img_product" alt="hình ảnh sản phẩm"  style="width: 200px; display: none;">

                        <div class="mb-3">
                            <label for=""  class="form-label">GIÁ</label>
                            <input type="text" name="gia" class="form-control" value="{{$sanPham->gia}}" id="">
                        </div>

                        <div class="mb-3">
                            <label for=""  class="form-label">SỐ LƯỢNG</label>
                            <input type="number" min="1" class="form-control" name="so_luong"  value="{{$sanPham->so_luong}}" id="">
                        </div>

                        
                        <div class="mb-3">
                            <label for=""  class="form-label">MÔ TẢ SẢN PHẨM</label>
                            <textarea name="mo_ta" class="form-control id="" cols="30" rows="10">{{$sanPham->mo_ta}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for=""  class="form-label">NGÀY NHẬP</label>
                            <input type="date" name="ngay_nhap" class="form-control" value="{{$sanPham->ngay_nhap}}" id="">
                        </div>

                        <div class="mb-3">
                            <label for=""  class="form-label">TRẠNG THÁI</label>
                            <select name="trang_thai" class="form-control">
                                <option selected>CHỌN TRẠNG THÁI</option>
                                <option value="0">{{$sanPham->trang_thai == '0' ? 'selected' : ''}}Ẩn</option>  
                                <option value="1">{{$sanPham->trang_thai == '1' ? 'selected' : ''}}HIỂN THỊ</option>  
                            </select>    
                        </div>

                        <div class="mb-3">
                            <button type="reset" class="btn btn-outline-secondary me-3">NHẬP LẠI</button>
                            <button type="submit" class="btn btn-success">THÊM MỚI</button>
                        </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection

@section('js-icon')
    <script src="{{asset('assets/admins/js/font-fontawesome-ae333ffef2.js')}}"></script>
    <script src="{{asset('assets/admins/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/admins/css/bootstrap2.css')}}">
    
@endsection


@section('js')
    <script>
        function showImage(event){
                const img_product = document.getElementById('img_product');

                const file = event.target.files[0];

                const reader = new FileReader();

                reader.onload = function () {

                img_product.src = reader.result;
                img_product.style.display = 'block';

                if(file){
                    reader.readAsDataURL(file);
                }
            }
        }
    </script>
@endsection

