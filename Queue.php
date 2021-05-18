<?php

class Queue
{
    public array $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function enqueue($string)
    {
        $arr = str_split($string);
        foreach ($arr as $value) {
            array_unshift($this->queue, $value);
        }
    }

    public function dequeue()
    {
        if (count($this->queue) > 0) {
            array_pop($this->queue);
        } else {
            echo "count = 0";
        }
    }

    public function current()
    {
        return end($this->queue);
    }
}
