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

        $this->assertEquals(" ", $top->value());
    }

    /**
     * @test
     */
    public function oneShouldHaveAVerticalTopRightCharacter()
    {
        $onePattern = new OnePattern();
        $topRight = $onePattern->topRightCharacter();

        $this->assertEquals("|", $topRight->value());
    }

    /**
     * @test
     */
    public function oneShouldHaveABlankTopLeftCharacter()
    {
        $onePattern = new OnePattern();
        $topRight = $onePattern->topRightCharacter();

        $this->assertEquals("|", $topRight->value());
    }

    /**
     * @test
     */
    public function oneShouldHaveABlankMiddleCharacter()
    {
        $onePattern = new OnePattern();
        $middle = $onePattern->middleCharacter();

        $this->assertEquals(" ", $middle->value());
    }

    /**
     * @test
     */
    public function oneShouldHaveABlankBottomRightCharacter()
    {
        $onePattern = new OnePattern();
        $bottomRight = $onePattern->bottomRight();

        $this->assertEquals("|", $bottomRight->value());
    }

    /**
     * @test
     */
    public function oneShouldHaveABlankBottomLeftCharacter()
    {
        $onePattern = new OnePattern();
        $bottomLeft = $onePattern->bottomLeft();

        $this->assertEquals(" ", $bottomLeft->value());
    }

    /**
     * @test
     */
    public function oneShouldHaveABlankBottomCharacter()
    {
        $onePattern = new OnePattern();
        $bottom = $onePattern->bottom();

        $this->assertEquals(" ", $bottom->value());
    }
}
