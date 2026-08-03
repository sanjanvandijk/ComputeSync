<?php
/**
 * Tests for ComputeSync
 */

use PHPUnit\Framework\TestCase;
use Computesync\Computesync;

class ComputesyncTest extends TestCase {
    private Computesync $instance;

    protected function setUp(): void {
        $this->instance = new Computesync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Computesync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
