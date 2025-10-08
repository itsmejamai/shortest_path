<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'start_point',
        'end_point',
        'shortest_path',
        'distance',
        'travel_time',
    ];

    /**
     * Get the deliveries for the route.
     */
    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}