<?php

class Comment {
    private User $user;
    private Task $task;
    private string $text;

    public function __construct(User $user, Task $task, string $text)
    {
        $this->user = $user;
        $this->task = $task;
        $this->text = $text;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function setTask(Task $task): void
    {
        $this->task = $task;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

}
