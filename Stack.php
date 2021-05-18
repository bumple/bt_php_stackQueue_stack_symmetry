<?php

class Stack
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($string)
    {
        $arr = str_split($string);
        foreach ($arr as $value) {
            array_unshift($this->stack, $value);
        }
    }

    public function pop()
    {
        if (count($this->stack) > 0) {
            array_shift($this->stack);
        }else{
            echo "count = 0";
        }
    }

    public function top()
    {
        return current($this->stack);
    }
}
