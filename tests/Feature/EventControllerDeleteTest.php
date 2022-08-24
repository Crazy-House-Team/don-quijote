<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventControllerDeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_events_can_be_deleted()
    {
        $event = Event::factory()->create();

        $this->assertCount(1, Event::all());

        $response = $this->delete(\route('delete', $event->id));

        $this->assertCount(0, Event::all());

    }
}
