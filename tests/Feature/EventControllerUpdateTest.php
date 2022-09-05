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

        $event = Event::factory()->create();

        $this->assertCount(1, Event::all());

        $response = $this->actingAs($admin)->patch(\route('updateEvent', $event->id), ['title' => 'title-upload']);

        $response->assertStatus(200);

        $this->assertEquals('title-upload', Event::first()->title);
    }

    public function test_event_cannot_be_updated_by_non_admin_user()
    {
        $this->withExceptionHandling();

        $user = User::factory()->create([
            'is_admin' => false,
        ]);

        $event = Event::factory()->create();

        $this->assertCount(1, Event::all());

        $response = $this->actingAs($user)->patch(\route('updateEvent', $event->id), ['title' => 'title-upload']);

        $updatedEvent = Event::find($event->id);

        $this->assertEquals('title-test', $updatedEvent->title);
    }
}
