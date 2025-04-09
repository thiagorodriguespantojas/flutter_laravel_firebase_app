<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AgendamentoTest extends TestCase
{
    use RefreshDatabase;

    public function test_api_status()
    {
        $response = $this->get('/api');
        $response->assertStatus(200);
    }
}
