<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'id_type', 'description', 'unit_price', 'promotion_price', 'image', 'unit', 'created_at', 'updated_at'
    ];

    public function typeProduct()
    {
        return $this->belongsTo(TypeProductsModel::class, 'id_type','id');
    }

    public function billDetails()
    {
        return $this->hasMany(BillDetailModel::class, 'id_product','id');
    }
}
