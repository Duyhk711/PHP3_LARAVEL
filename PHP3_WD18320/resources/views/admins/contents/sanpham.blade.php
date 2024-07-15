@extends('layouts.admin')


@section('content')

<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">

      <div class="row">
          <div class="col-12">
              <div class="page_title_box d-flex align-items-center justify-content-between">
                  <div class="page_title_left">
                      <h3 class="f_s_30 f_w_700 text_white">Danh Sách Sản Phẩm</h3>
                      
                  </div>
                  <a href="{{route('sanpham.create')}}" class="white_btn3 text-decoration-none">Thêm Mới Sản Phẩm</a>
              </div>
          </div>
      </div>
      <div class="row ">
          
 
          <div class="col-lg">
              <div class="white_card card_height_100 mb_30 ">
                  <div class="white_card_header">
                      <div class="box_header m-0">
                          <div class="main-title">
                              <h3 class="m-0">Bảng Sản Phẩm
                                @if (session('success'))
                                    
                                <b class="text-success">, {{ session('success') }}</b>
                           
                                @endif
                              </h3>
                               
                          </div>


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
                      <div class="QA_table ">

                          <table class="table  p-0">
                              <thead>
                                  <tr>
                                      <th scope="col">MÃ SP</th>
                                      <th scope="col">TÊN SP</th>
                                      <th scope="col">GIÁ</th>
                                      <th scope="col">HÌNH ẢNH</th>
                                      <th scope="col">SỐ LƯỢNG</th>
                                      <th scope="col">MÔ TẢ</th>
                                      <th scope="col">NGÀY NHẬP</th>
                                      <th scope="col">TRẠNG THÁI</th>
                                      <th>&nbsp;</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($listSanPham as $item)
                                    <tr>
                                        <td>
                                            <div class=" d-flex align-items-center">
                                                
                                                <span class="f_s_14 f_w_400 color_text_1">{{$item->ma_san_pham}}</span>
                                            </div>
                                        </td>
                                        <td class="f_s_14 f_w_400 color_text_2">{{$item->ten_san_pham}}</td>
                                        <td class="f_s_14 f_w_400 color_text_3">{{$item->gia}}</td>
                                        <td class="f_s_14 f_w_400 color_text_3"><img src="{{Storage::url($item->hinh_anh)}}" style="width: 100px" alt=""></td>
                                        <td class="f_s_14 f_w_400 color_text_4">{{$item->so_luong}}</td>
                                        <td class="f_s_14 f_w_400 color_text_4">{{$item->mo_ta}}</td>
                                        <td class="f_s_14 f_w_400 color_text_4">{{$item->ngay_nhap}}</td>
                                        <td class="f_s_14 f_w_400 color_text_4">{{$item->trang_thai}}</td>
                                        
                                        <td>
                                          <a href="{{route('sanpham.edit', $item->id)}}" class="text-warning fa-xl"><i class="fa-solid fa-pen-to-square"></i></a>
                                          <a href="" class="text-danger fa-xl"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                  
                              </tbody>
                          </table>
                      </div>
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

