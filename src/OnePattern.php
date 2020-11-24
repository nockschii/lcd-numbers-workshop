<?php

namespace CodeRetreat;

use CodeRetreat\Characters\BlankCharacter;
use CodeRetreat\Characters\Character;
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

    public function topCharacter(): Character
    {
        return $this->top;
    }

    public function topRightCharacter(): Character
    {
        return $this->topRight;
    }

    public function middleCharacter(): Character
    {
        return $this->middle;
    }

    public function bottomRight(): Character
    {
        return $this->bottomRight;
    }

    public function bottomLeft(): Character
    {
        return $this->bottomLeft;
    }

    public function bottom(): Character
    {
        return $this->bottom;
    }
}
