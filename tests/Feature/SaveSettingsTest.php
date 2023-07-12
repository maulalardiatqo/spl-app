<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SaveSettingsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_settings()
    {
        $response = $this->postJson('/settings', ['key' => 'overtime_method', 'value' => '1']);

        $response->assertStatus(201);
    }
}
