<?php

namespace CodeRetreat;

use CodeRetreat\Characters\BlankCharacter;
use CodeRetreat\Characters\Character;
use CodeRetreat\Characters\VerticalCharacter;

class OnePattern
{
    private $top;
    private $topLeft;
    private $topRight;
    private $middle;
    private $bottomLeft;
    private $bottomRight;
    private $bottom;

    public function __construct()
    {
        $this->top = new BlankCharacter();
        $this->topLeft = new BlankCharacter();
        $this->topRight = new VerticalCharacter();
        $this->middle = new BlankCharacter();
        $this->bottomRight = new VerticalCharacter();
        $this->bottomLeft = new BlankCharacter();
        $this->bottom = new BlankCharacter();
    }

    public function topCharacter(): Character
    {
        return $this->top;
    }

    public function topRightCharacter(): Character
    {
        return $this->topRight;
    }

    public function topLeftCharacter(): Character
    {
        return $this->topLeft;
    }

    public function middleCharacter(): Character
    {
        return $this->middle;
    }

    public function bottomRightCharacter(): Character
    {
        return $this->bottomRight;
    }

    public function bottomLeftCharacter(): Character
    {
        return $this->bottomLeft;
    }

    public function bottomCharacter(): Character
    {
        return $this->bottom;
    }
}
