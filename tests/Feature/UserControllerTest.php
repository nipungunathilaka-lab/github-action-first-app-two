<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function test_users_api_returns_successful_response(): void
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);

        $response->assertJson([
            'message' => 'Users API is working',
        ]);
    }
}
