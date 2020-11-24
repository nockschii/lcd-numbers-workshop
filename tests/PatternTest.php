<?php

namespace CodeRetreatTests;

use CodeRetreat\OnePattern;
use PHPUnit\Framework\TestCase;

class PatternTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProver
     */
    public function oneShouldHaveABlankBottomCharacter($expectedCharacter, $functionName)
    {
        $onePattern = new OnePattern();
        $bottom = $onePattern->$functionName();

        $this->assertEquals($expectedCharacter, $bottom->value());
    }

    public function dataProver()
    {
        return  [
            [" ", "topCharacter"],
            [" ", "topLeftCharacter"],
            ["|", "topRightCharacter"],
            [" ", "middleCharacter"],
            [" ", "bottomLeftCharacter"],
            ["|", "bottomRightCharacter"],
            [" ", "bottomCharacter"],
        ];
    }
}
