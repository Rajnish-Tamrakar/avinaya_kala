<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_name',
        'phone',
        'email',
        'shipping_address',
        'total',
        'status',
    ];

    protected $casts = [
        'shipping_address' => 'array',
        'total' => 'decimal:2',
    ];

    // --- Relationships ---
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // --- Events ---
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->order_number)) {
                $order->order_number = 'ORD-' . strtoupper(uniqid());
            }
        });
    }

    // --- Accessors ---
    public function getFormattedTotalAttribute(): string
    {
        return '₹' . number_format($this->total, 2);
    }

    public function getFormattedAddressAttribute(): string
    {
        return is_array($this->shipping_address)
            ? implode(', ', $this->shipping_address)
            : (string) $this->shipping_address;
    }
}
