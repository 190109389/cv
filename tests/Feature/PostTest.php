<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_get_posts(){
        $response = $this->get('/post');
        $response->assertStatus(200);
    }

    public function test_title_get_request(){
        $response = $this->get('/post/title');
        $response->assertStatus(404);
    }

    public function test_add_post(){
        $response = $this->get(route('add-post'));

        $response->assertStatus(200);
        $response->assertViewIs('create');
    }

    public function test_get_id(){
        $response = $this->get('/post/1');
        $response->assertStatus(200);
    }
}
