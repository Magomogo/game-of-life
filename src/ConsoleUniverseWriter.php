<?php

namespace Acme\Life;


class ConsoleUniverseWriter
{
    public function write(Universe $universe)
    {
        $res = '';
        foreach ($universe->yIterator() as $y) {
            foreach ($universe->xIterator() as $x) {
                $res .= $universe->hasCell($x, $y) ? '#' : ".";
            }
            $res .= "\n";
        }

        return $res;
    }
}
