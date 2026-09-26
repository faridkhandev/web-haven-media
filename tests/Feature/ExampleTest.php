<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_homepage_displays_the_web_haven_academy(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Web Haven Academy')
            ->assertSee('Learn. Create.')
            ->assertSee('Digital Marketing');
    }
}
