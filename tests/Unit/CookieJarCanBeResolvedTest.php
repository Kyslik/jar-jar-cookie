<?php

namespace Tests\Unit;

use Tests\TestCase;

class CookieJarCanBeResolvedTest extends TestCase
{

    /**
     * Our CookieJar extends stock one, stock CookieJar implements Illuminate\Contracts\Cookie\Factory,
     * so if it ever changes this test will fail with following PHP Fatal error:
     * Declaration of Illuminate\Cookie\CookieJar::make(...) must be compatible with Illuminate\Contracts\Cookie\Factory::make()
     */
    public function test_custom_cookie_jar_can_be_resolved()
    {
        resolve(\App\Foundation\Cookie\CookieJar::class);
        $this->assertTrue(true);
    }
}
