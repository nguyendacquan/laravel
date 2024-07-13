@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh sách sản phẩm</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá </th>
                                        <th>Số lượng</th>
                                        <th>Ngày nhập</th>
                                        <th>Mô tả</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listSanPham as $item)
                                        <tr>
                                            <td> {{ $item->id }} </td>
                                            <td> {{ $item->ma_san_pham }} </td>
                                            <td> {{ $item->ten_san_pham }} </td>
                                            <td> {{ $item->gia }} </td>
                                            <td> {{ $item->so_luong }} </td>
                                            <td> {{ $item->ngay_nhap }} </td>
                                            <td> {{ $item->mo_ta == null ? 'Trống' : $item->mo_ta }} </td>
                                            <td> {{ $item->trang_thai == 1 ? 'Hiển Thị' : 'Ẩn' }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('san_pham.create') }}"><button class="btn btn-dark">Thêm</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
