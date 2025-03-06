<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetailModel extends Model
{
    use HasFactory;
    protected $table = 'bill_detail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_bill', 'id_product', 'quantity', 'unit_price', 'created_at', 'updated_at'
    ];

    public function bill()
    {
        return $this->belongsTo(BillsModel::class, 'id_bill','id');
    }

    public function product()
    {
        return $this->belongsTo(ProductsModel::class, 'id_product','id');
    }
}
