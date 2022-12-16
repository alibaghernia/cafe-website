<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekday extends Model
{
    use HasFactory;

    const SATURDAY = 'Saturday';
    const SUNDAY = 'Sunday';
    const MONDAY = 'Monday';
    const TUESDAY = 'Tuesday';
    const WEDNESDAY = 'Wednesday';
    const THURSDAY = 'Thursday';
    const FRIDAY = 'Friday';

    public function events()
    {
        return $this->hasMany(Event::class);
    }

}
