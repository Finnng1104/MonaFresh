<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Nếu bạn có các cột cần thêm vào fillable, liệt kê chúng ở đây
    protected $fillable = ['name', 'category_id', 'image', 'price', 'sale_price', 'description', 'quantity_sold', 'status_id'];

    // Nếu bảng trong DB có tên khác "products", bạn cần khai báo
    // protected $table = 'tên_bảng';

    // Quan hệ với bảng Category (nếu có)
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
