
<?php

namespace YourNamespace\TimeSlotManager\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use YourNamespace\TimeSlotManager\Models\TimeSlot;
use Tests\TestCase;

class TimeSlotTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_time_slot()
    {
        $response = $this->post('/admin/time-slots', [
            'opening_time' => '09:00',
            'closing_time' => '17:00',
            'day' => 1,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('time_slots', [
            'opening_time' => '09:00',
            'closing_time' => '17:00',
            'day' => 1,
        ]);
    }
}
