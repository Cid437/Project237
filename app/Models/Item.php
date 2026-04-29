<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    use HasFactory;

    protected $table = 'items';

    protected $primaryKey = 'item_id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'image_path',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'item_id', 'item_id');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'item_id', 'item_id');
    }
}
