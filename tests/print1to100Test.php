<?php

use PHPUnit\Framework\TestCase;

class print1to100Test extends TestCase
{
    /**
     * @dataProvider calculateDivisibilityProvider
     */
    public function testCalculateDivisibility($number, $dividers, $expected)
    {
        $this->assertEquals($expected, calculateDivisibility($number, $dividers));
    }

    public function calculateDivisibilityProvider()
    {
        return [
            [1, [3, 5], 0],
            [2, [3, 5], 0],
            [3, [3, 5], 3],
            [4, [3, 5], 0],
            [5, [3, 5], 5],
            [6, [3, 5], 3],
            [7, [3, 5], 0],
            [8, [3, 5], 0],
            [9, [3, 5], 3],
            [10, [3, 5], 5],
            [11, [3, 5], 0],
            [12, [3, 5], 3],
            [13, [3, 5], 0],
            [14, [3, 5], 0],
            [15, [3, 5], 8],
            [16, [3, 5], 0],
            [17, [3, 5], 0],
            [18, [3, 5], 3],
            [19, [3, 5], 0],
            [20, [3, 5], 5]
        ];
    }

    /**
     * @dataProvider getStringByIntProvider
     */
    public function testGetStringByInt($number, $expected)
    {
        $this->assertEquals($expected, getStringByInt($number));
    }

    public function getStringByIntProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, "Linio"],
            [4, 4],
            [5, "IT"],
            [6, "Linio"],
            [7, 7],
            [8, 8],
            [9, "Linio"],
            [10, "IT"],
            [11, 11],
            [12, "Linio"],
            [13, 13],
            [14, 14],
            [15, "Linianos"],
            [16, 16],
            [17, 17],
            [18, "Linio"],
            [19, 19],
            [20, "IT"]
        ];
    }
}
