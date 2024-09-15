<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'image', 'price', 'sale_price', 'description', 'quantity_sold', 'status_id'];
    // Nếu bảng trong DB có tên khác "products", bạn cần khai báo
    protected $table = 'products';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
