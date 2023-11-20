<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'name',
        'description',
        'price',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function bookingDishKeys()
    {
        return $this->hasMany(BookingDishKey::class, 'dish_id', 'id');
    }

    public function addOns()
    {
        return $this->belongsTo(AddOn::class, 'dish_id', 'id');
    }
}
