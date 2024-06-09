
<?php

namespace YourNamespace\TimeSlotManager\Models;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    protected $fillable = ['opening_time', 'closing_time', 'day'];
}
