<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Delivery extends Model 
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'route_id',
        'pickup_location',
        'dropoff_location',
        'delivery_status',
    ];

    /**
     * Get the route that owns the delivery.
     */
    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    /**
     * Get the user that owns the delivery.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}