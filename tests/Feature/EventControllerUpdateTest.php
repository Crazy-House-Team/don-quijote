<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventControllerUpdateTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_event_can_be_updated_by_admin_user()
    {
        $this->withExceptionHandling();

        $admin = User::factory()->create([
            'is_admin' => true,
        ]);

        $event = Event::factory()->create([
            "title" => "title-test",
        ]);

        $this->assertCount(1, Event::all());

    }
}
