<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'room_id', 'hotel_id', 'check_in', 'check_out', 'guests', 'total_price', 'status', 'number_of_rooms'];

    

    public function hotelBookingRooms()
    {
        return $this->hasMany(HotelBookingRoom::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}