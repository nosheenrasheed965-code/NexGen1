<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomepageTest extends TestCase
{
    public function test_homepage_loads_with_nexgen_branding(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('NexGen');
        $response->assertSee("Build what's");
    }
}
