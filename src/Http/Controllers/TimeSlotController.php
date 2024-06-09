
<?php

namespace YourNamespace\TimeSlotManager\Http\Controllers;

use App\Http\Controllers\Controller;
use YourNamespace\TimeSlotManager\Models\TimeSlot;
use YourNamespace\TimeSlotManager\Services\TimeSlotService;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    protected $timeSlotService;

    public function __construct(TimeSlotService $timeSlotService)
    {
        $this->timeSlotService = $timeSlotService;
    }

    public function index(Request $request)
    {
        return $this->timeSlotService->list($request);
    }

    public function store(Request $request)
    {
        return $this->timeSlotService->store($request);
    }

    public function destroy(TimeSlot $timeSlot)
    {
        return $this->timeSlotService->destroy($timeSlot);
    }
}
