<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatModel extends Model
{
    use HasFactory;

    protected $table = 'obat';
    protected $primaryKey = 'id';

    protected $fillable = [
        'item_code',
        'description',
        'uom',
        'stock',
    ];
}
