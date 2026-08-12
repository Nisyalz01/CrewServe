<?php
/**
 * Tests for CrewServe
 */

use PHPUnit\Framework\TestCase;
use Crewserve\Crewserve;

class CrewserveTest extends TestCase {
    private Crewserve $instance;

    protected function setUp(): void {
        $this->instance = new Crewserve(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewserve::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
