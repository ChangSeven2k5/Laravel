<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillsModel extends Model
{
    use HasFactory;

    protected $table = 'bills';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_customer', 'date_order', 'total', 'payment', 'note', 'created_at', 'updated_at'
    ];

    public function customer()
    {
        return $this->belongsTo(CustomerModel::class,'id_customer','id');
    }

    public function billDetails()
    {
        return $this->hasMany(BillDetailModel::class,'id_bill','id');
    }
}
