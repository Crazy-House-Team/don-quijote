<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventControllerIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_homepage_route_is_charging()
    {
        $this->withExceptionHandling();

        $response = $this->get('/');
        $response->assertStatus(200)->assertSee('Asociación Cultural Don Quijote');
    }

    public function test_active_events_are_listed_in_home_page()
    {
        $this->withExceptionHandling();

        $events = Event::factory()->create([
            "title" => "title-test",
            "date" => '2023-01-01',
        ]);
        $response = $this->get('/');
        $response->assertSee('title-test');
    }

    public function test_old_events_are_listed_in_home_page()
    {
        $this->withExceptionHandling();
        
        $events = Event::factory()->create([
            "title" => "title-test",
            "date" => '1991-01-01',
        ]);
        $response = $this->get('/old');
        $response->assertSee('title-test');
    }

}
