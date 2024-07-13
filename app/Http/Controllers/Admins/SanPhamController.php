<?php


namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //su dung cho 2 cach raw query va query builder
    public $sanpham;

    public function __construct()
    {
        $this->sanpham = new SanPham();
    }
    public function index()
    {
        //
        // lay du lieu ra
        return view('admins.index');

        // dd($listSanPham);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admins.sanpham.create');

        // dd("day la crate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // kiểm tra dữ liệu
        // dd($request->post());
        if ($request->isMethod('POST')) {
            // Lấy dữ liệu ra
            // vì có trường csrf sinh ra nên 
            // trước khi gửi dữ liệu ta cần loại bỏ token csrf
            // Cách 1
            // $params = $request->post();
            // unset($params['_token']);
            // Cách 2
            // Loại bỏ _token
            $params = $request->except('_token');
            // Thêm sản phẩm
            // $this->sanpham->createProduct($params);
            SanPham::create($params);
            // Sau khi thêm thành công và quay lại trang hiển thị thông báo
            return redirect()->route('san_pham.form')->with('success', 'Mày đã thêm thành công !');
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
        //
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
    public function form()
    {
        //
        $listSanPham = SanPham::get();
        return view('admins.sanpham.list',compact('listSanPham'));
       
    }
}
