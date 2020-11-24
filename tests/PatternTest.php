<?php

namespace CodeRetreatTests;

use CodeRetreat\OnePattern;
use PHPUnit\Framework\TestCase;

class PatternTest extends TestCase
{
    /**
     * @test
     */
    public function oneShouldHaveABlankTopCharacter()
    {
        $onePattern = new OnePattern();
        $top = $onePattern->topCharacter();

        $this->assertEquals(" ", $top);
    }

    /**
     * @test
     */
    public function oneShouldHaveAVerticalTopRightCharacter()
    {
        $onePattern = new OnePattern();
        $topRight = $onePattern->topRightCharacter();

        $this->assertEquals("|", $topRight);
    }
}
