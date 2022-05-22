<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckNewsIndex(): void
    {
        $response = $this->get(route('news.index'));

        $response->assertStatus(200);
    }

    public function testCheckNewsShow(): void
    {
        $response = $this->get(route('news.show'));

        $response->assertStatus(200);
    }
}
