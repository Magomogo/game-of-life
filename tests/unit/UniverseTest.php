<?php

namespace Acme\Life;

class UniverseTest extends \PHPUnit_Framework_TestCase
{
    public function testReportsCells()
    {
        $u = new Universe([
            [1, 1]
        ]);

        $this->assertTrue($u->hasCell(1, 1));
        $this->assertFalse($u->hasCell(0, 0));
    }

    public function testInitiallyEmpty()
    {
        $this->assertEquals(
            [],
            iterator_to_array((new Universe([]))->xIterator())
        );

        $this->assertEquals(
            [],
            iterator_to_array((new Universe([]))->yIterator())
        );
    }

    public function testNotEmptyIteratorsIncludeAllNeighbours()
    {
        $universe = new Universe([
            [0, 0]
        ]);

        $this->assertEquals(
            [-1, 0, 1],
            iterator_to_array($universe->xIterator())
        );

        $this->assertEquals(
            [-1, 0, 1],
            iterator_to_array($universe->yIterator())
        );
    }

    public function testTwoAdjacentCells()
    {
        $universe = new Universe([
            [1, 0],
            [0, 0]
        ]);

        $this->assertEquals(
            [-1, 0, 1, 2],
            iterator_to_array($universe->xIterator())
        );

        $this->assertEquals(
            [-1, 0, 1],
            iterator_to_array($universe->yIterator())
        );

    }
}
