<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testPostToGraphQL(): void
    {
        $response = $this->post('/');

        $response->assertStatus(200);
    }
}
