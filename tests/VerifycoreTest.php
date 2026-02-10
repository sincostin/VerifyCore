<?php
/**
 * Tests for VerifyCore
 */

use PHPUnit\Framework\TestCase;
use Verifycore\Verifycore;

class VerifycoreTest extends TestCase {
    private Verifycore $instance;

    protected function setUp(): void {
        $this->instance = new Verifycore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Verifycore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
