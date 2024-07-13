<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;
    // cách 1: sử dụng Raw Query (SQL thuần) 
    // public function getlist(){
    //     $listSanPham = DB::select('SELECT * FROM san_phams ORDER BY id DESC');
    //     return $listSanPham;
    // }

    // cách 2: Sử dụng Query Builer
    public function getlist(){
        $listSanPham = DB::table('san_phams');
        return $listSanPham;
    }

    public function createProduct($datas){
        DB::table('san_phams')->insert($datas);
    }


    // cách 3: sử dụng Eloquent
    protected $table = 'san_phams';

    protected $fillable = ['ma_san_pham','ten_san_pham','gia','so_luong','ngay_nhap','mo_ta','trang_thai'];
    
}
