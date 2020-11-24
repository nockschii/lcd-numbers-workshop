<?php

namespace CodeRetreat;

use CodeRetreat\Characters\BlankCharacter;
use CodeRetreat\Characters\VerticalCharacter;

class OnePattern
{
    private $top;
    private $topRight;

    public function __construct()
    {
        $this->top = new BlankCharacter();
        $this->topRight = new VerticalCharacter();
    }

    public function topCharacter()
    {
        return $this->top->value();
    }

    public function topRightCharacter()
    {
        return $this->topRight->value();
    }
}