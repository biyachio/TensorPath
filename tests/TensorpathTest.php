<?php
/**
 * Tests for TensorPath
 */

use PHPUnit\Framework\TestCase;
use Tensorpath\Tensorpath;

class TensorpathTest extends TestCase {
    private Tensorpath $instance;

    protected function setUp(): void {
        $this->instance = new Tensorpath(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tensorpath::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
