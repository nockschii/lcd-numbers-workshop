<?php

namespace CodeRetreatTests;

use CodeRetreat\Patterns\OnePattern;
use PHPUnit\Framework\TestCase;

class PatternTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProviderForOnePattern
     */
    public function testPatternOneCharacters($expectedCharacter, $functionName)
    {
        $onePattern = new OnePattern();

        $this->assertEquals($expectedCharacter, $onePattern->$functionName());
    }

    public function dataProviderForOnePattern()
    {
        return [
            "topLeft" => [" ", "topLeftCharacter"],
            "top" => [" ", "topCharacter"],
            "topRight" => ["|", "topRightCharacter"],
            "middle" => [" ", "middleCharacter"],
            "bottomLeft" => [" ", "bottomLeftCharacter"],
            "bottom" => [" ", "bottomCharacter"],
            "bottomRight" => ["|", "bottomRightCharacter"],
        ];
    }
}
