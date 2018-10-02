<?php

namespace Mahm\Hundra;

use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    public function testIsInstance()
    {
        $dice = new Dice();
        $this->assertInstanceOf("\Mahm\Hundra\Dice", $dice);
    }
    public function testThrowDice()
    {
        $dice = new Dice();

        $dice->throwDice();
        $this->assertLessThan(7, $dice->getDice());
    }
}
