<?php

require_once 'Task.php';

class TaskProvider {
    private array $taskList;

    public function addTask(string $description): void
    {
        $task = new Task($description);
        $this->taskList[] = $task;
    }


    public function getUndoTaskList(): array
    {
        foreach($this->taskList as $undo) {
            if($undo->isDone()==false) {
                $undoTaskList[] = $undo;
            }
        }
        return $undoTaskList;
    }

    public function getTaskList(): array
    {
        return $this->taskList;
    }

}
$taskProvider1 = new TaskProvider();
$taskProvider1->addTask("Погулять с собакой");
$taskProvider1->addTask("Выпить кофе");

//TaskProvider::getUndoTaskList();
//print_r($taskProvider1->getUndoTaskList());
