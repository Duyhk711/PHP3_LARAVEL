<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{

    public $san_phams;

    public function __construct()
    {
        $this->san_phams = new SanPham();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // lấy dữ liệu ra
        $listSanPham = SanPham::orderByDesc('id')->get();
        $title = "Danh Sách Sản Phẩm";
        return view('admins.contents.sanpham', compact('title', 'listSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $listSanPham = SanPham::orderByDesc('id')->get();
        $title = "Thêm Mới Sản Phẩm";
        return view('admins.contents.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Lấy dữ liệu ra
        if($request->isMethod('POST')){
            // vì có trường '_token' do csrf sinh ra nên trước khi gửi dữ liệu ta cần loại bỏ _toker
            // cách 1
            $params = $request->post();       
            // unset($params['_token']);
            // thêm dữ liệu
            $params = $request->except('_token');
            // $this->san_phams->createProduct($params);

            if($request->hasFile('img_san_pham')){
                $filename = $request->file('img_san_pham')->store('uploads/sanpham', 'public');
                $params['hinh_anh'] = $filename;
            }else {
                $filename = null;
                $params['hinh_anh'] = $filename;
            }

            SanPham::create($params);
            // sau khi thêm thành công sẽ quay trở về trang danh sách 
            // và hiển thị thông báo
            return redirect()->route('sanpham.index')->with('success','Thêm sản phẩm thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        

        $title = "Chỉnh sửa Sản Phẩm";

        $sanPham = $this->san_phams->getDetailProduct($id);
        // $sanPham = SanPham::findOrFail($id);

        // sử dụng eloquent

        if(!$sanPham){
            return redirect()->route('sanpham.index')->with('error', "sản Phẩm không tồn tại");
        }

        return view('admins.contents.update', compact('title','sanPham'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // viết 1 phương thức mới 
    
}
