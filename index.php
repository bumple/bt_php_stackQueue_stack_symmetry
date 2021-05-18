<?php
//$text = 'ha1 ha4';
//print_r(str_split($text));
include_once "Queue.php";
include_once "Stack.php";
$text = 'able was | saw elba';

$queue = new Queue();
$stack = new Stack();

$queue->enqueue($text);
echo $queue->current();
$queue->dequeue();
echo $queue->current();
$queue->dequeue();
echo $queue->current();
$queue->dequeue();
echo $queue->current();
$queue->dequeue();
echo $queue->current();
$queue->dequeue();
echo $queue->current();
$queue->dequeue();
echo $queue->current();
$queue->dequeue();
echo $queue->current();
$queue->dequeue();
echo '<hr>';
$stack->push($text);
echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();


