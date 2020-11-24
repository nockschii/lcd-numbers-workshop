<?php

namespace CodeRetreatTests;

use CodeRetreat\ExampleClass;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGreetYou()
    {
        $exampleClass = new ExampleClass();

        $this->assertEquals("Hallo", $exampleClass->greetings());
    }
}
