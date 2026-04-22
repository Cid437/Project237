<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'phone',
        'addressline',
        'zipcode',
        'image_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'customer_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'customer_id', 'customer_id');
    }
}
