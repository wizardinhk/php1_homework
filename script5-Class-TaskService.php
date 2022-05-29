<?php

 class TaskService {
    private Task $task;
    private User $user;
    private Comment $comment;

  public static function addComment($user, $task, string $text) {
       $task->setComments ((new Comment ($user, $task, $text)));
 }
}


