<?php
require_once 'script5-Class-Task.php';
require_once 'script5-Class-User.php';
require_once 'script5-Class-Comment.php';
require_once 'script5-Class-TaskService.php';

$user1 = new User ("Петя", "Peter@gmail.com");
$task1 = new Task ($user1, "have a walk", 1);
$task1 -> setDescription ("have a good walk");
$task1 -> markAsDone ();
TaskService::addComment($user1, $task1, "That's really a good idea");
print_r($task1);
