<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Client\Request;
use Tests\TestCase;

class EventControllerCreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_event_form_cannot_be_accesed_by_non_admin_user()
    {
        $this->withExceptionHandling();

        $response = $this->get(\route('createEvent'));

        $response->assertStatus(302);
    }

    public function test_new_event_form_can_be_accesed_by_admin_user()
    {
        $this->withExceptionHandling();

        $admin = User::factory()->create([
            'is_admin' => true,
        ]);

        $response = $this->actingAs($admin)->get(\route('createEvent'));

        $response->assertStatus(200);
    }


    public function test_new_events_cannot_be_created_by_non_admin_users()
    {
        $this->withExceptionHandling();

        $response = $this->post(\route('storeEvent'));
        $response->assertStatus(302);
    }
}
