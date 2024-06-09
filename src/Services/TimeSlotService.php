
<?php

namespace YourNamespace\TimeSlotManager\Services;

use YourNamespace\TimeSlotManager\Models\TimeSlot;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class TimeSlotService
{
    public function list(Request $request)
    {
        // Your listing logic here
    }

    public function store(Request $request)
    {
        // Your store logic here
    }

    public function destroy(TimeSlot $timeSlot)
    {
        // Your destroy logic here
    }
}
