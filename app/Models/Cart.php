<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jasa_id',
        'quantity',
        'price',
    ];

    /**
     * Get the user that owns the cart item.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the jasa (service) for this cart item.
     */
    public function jasa()
    {
        return $this->belongsTo(Jasa::class);
    }
}