<?php

namespace Acme\Life;

class Universe
{
    private $ceils;

    public function __construct(array $ceils)
    {
        $this->ceils = $ceils;
    }

    public function hasCell($x, $y)
    {
        foreach ($this->ceils as $cell) {
            if ($cell[0] === $x && $cell[1] === $y) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return \Generator
     */
    public function xIterator()
    {
        if (empty($this->ceils)){
            return;
        }

        $xCeils = array_column($this->ceils, 0);

        $min = min($xCeils) - 1;
        $max = max($xCeils) + 1;

        for ($i = $min; $i <= $max; $i++) {
            yield $i;
        }
    }

    /**
     * @return \Generator
     */
    public function yIterator()
    {
        if (empty($this->ceils)){
            return;
        }

        $yCeils = array_column($this->ceils, 1);

        $min = min($yCeils) - 1;
        $max = max($yCeils) + 1;

        for ($i = $min; $i <= $max; $i++) {
            yield $i;
        }
    }
}
