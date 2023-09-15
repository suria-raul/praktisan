<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_random_route_returns_a_successful_response(): void
    {
        $response = $this->get('random-route');

        $response->assertStatus(200);
    }

    public function test_random_route_content(): void
    {
        $response = $this->get('random-route');

        $response->assertContent('The Test Route!');
    }
}
