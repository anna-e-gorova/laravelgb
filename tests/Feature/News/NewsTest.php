<?php

namespace Tests\Feature\News;

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

    public function testCheckNewsNewsId(): void
    {
        $response = $this->get(route('news.show', ['id' => '1']));

        $response->assertStatus(200);
    }

    public function testCheckNewsCategory(): void
    {
        $response = $this->get(route('news.category'));

        $response->assertStatus(200);
    }

    public function testCheckNewsCategoryId(): void
    {
        $response = $this->get(route('news.category', ['id' => '1']));

        $response->assertStatus(200);
    }
}
