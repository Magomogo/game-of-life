<?php

namespace Acme\Life;


class ConsoleUniverseWriterTest extends \PHPUnit_Framework_TestCase
{
    public function testOutputsTheUniverse()
    {
        $this->assertEquals(<<<TXT
........
.#......
......#.
........

TXT
            ,
            (new ConsoleUniverseWriter())->write(
                new Universe([
                    [0, 0],
                    [5, 1],
                ])
            )
        );
    }
}
