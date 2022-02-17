<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;
    
    protected $table = "inventories";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'harga',
        'stok',
    ];
}
