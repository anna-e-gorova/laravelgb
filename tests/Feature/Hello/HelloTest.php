<?php

namespace Tests\Feature\Hello;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testCheckIndex(): void
    {
        $response = $this->get(route('hello'));

        $response->assertStatus(200);
    }

    public function testCheckInfo(): void
    {
        $response = $this->get(route('info'));

        $response->assertStatus(200);
    }

    public function testCheckFeedback(): void
    {
        $response = $this->get(route('feedback'));

        $response->assertStatus(200);
    }

    public function testCheckOrder(): void
    {
        $response = $this->get(route('order'));

        $response->assertStatus(200);
    }

}
