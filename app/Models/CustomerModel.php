<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    protected $table='customer';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'gender', 'email', 'address', 'phone_number', 'note', 'created_at', 'updated_at'
    ] ;

    public function bills()
    {
        return $this->hasMany(BillsModel::class, 'id_customer','id');
    }
}
