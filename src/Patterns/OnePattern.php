<?php

namespace CodeRetreat\Patterns;

class OnePattern
{
    private $pattern;

    public function __construct()
    {
        $this->pattern = [
            " ",
            " ",
            "|",
            " ",
            " ",
            " ",
            "|",
        ];
    }

    public function topLeftCharacter()
    {
        return $this->pattern[0];
    }

    public function topCharacter()
    {
        return $this->pattern[1];
    }

    public function topRightCharacter()
    {
        return $this->pattern[2];
    }

    public function middleCharacter()
    {
        return $this->pattern[3];
    }

    public function bottomLeftCharacter()
    {
        return $this->pattern[4];
    }

    public function bottomCharacter()
    {
        return $this->pattern[5];
    }

    public function bottomRightCharacter()
    {
        return $this->pattern[6];
    }
}
