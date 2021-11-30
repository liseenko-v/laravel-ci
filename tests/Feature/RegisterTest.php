<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIsRegisterPage()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testExistRegisterTitle()
    {
        $response = $this->get('/register');

        $response->assertSee('Register');
    }
}
