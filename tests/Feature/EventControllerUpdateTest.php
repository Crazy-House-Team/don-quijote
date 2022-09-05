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

        $response = $this->actingAs($admin)->patch(\route('updateEvent', $event->id), [
            'title' => 'title-upload',
            'resume' => 'Festival.',
            'description' => 'Se llevan a cabo diferentes actividades para todos los públicos, entre las que destaca su famosa exposición de manzanas, el mercado de otoño o el tren de la manzana.',
            'place' => 'Villaviciosa.',
            'address' => 'Villaviciosa - Asturias.',
            'date' =>'2023-10-12',
            'time' => '19:00 ',
            'img' => '/img/img_10.jpg',
            'favorite' => false,
        ]);

        $this->assertEquals('title-upload', Event::first()->title);
    }

    public function test_event_cannot_be_updated_by_non_admin_user()
    {
        $this->withExceptionHandling();

        $event = Event::factory()->create([
            'title' => 'TestCase'
        ]);

        $this->assertCount(1, Event::all());

        $response = $this->patch(\route('updateEvent', $event->id), ['title' => 'title-upload']);

        $updatedEvent = Event::find($event->id);

        $this->assertEquals('TestCase', $updatedEvent->title);
    }
}
