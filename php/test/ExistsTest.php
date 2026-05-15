<?php
declare(strict_types=1);

// Insult SDK exists test

require_once __DIR__ . '/../insult_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = InsultSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
