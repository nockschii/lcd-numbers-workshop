<?php

namespace CodeRetreat;

use CodeRetreat\Characters\BlankCharacter;
use CodeRetreat\Characters\VerticalCharacter;

class OnePattern
{
    private $top;
    private $topRight;
    private $middle;
    private $bottomRight;
    private $bottomLeft;
    private $bottom;

    public function __construct()
    {
        $this->top = new BlankCharacter();
        $this->topRight = new VerticalCharacter();
        $this->middle = new BlankCharacter();
        $this->bottomRight = new VerticalCharacter();
        $this->bottomLeft = new BlankCharacter();
        $this->bottom = new BlankCharacter();
    }

    public function topCharacter()
    {
        return $this->top->value();
    }

    public function topRightCharacter()
    {
        return $this->topRight->value();
    }

    public function middleCharacter()
    {
        return $this->middle->value();
    }

    public function bottomRight()
    {
        return $this->bottomRight->value();
    }

    public function bottomLeft()
    {
        return $this->bottomLeft->value();
    }

    public function bottom()
    {
        return $this->bottom->value();
    }
}
