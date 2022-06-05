<?php
require_once 'model/TaskProvider.php';
session_start();
if (isset($_SESSION['username']))
{
    include "view/tasks.php";
    $_SESSION['taskList'] = $taskProvider1->getTaskList();

} else
    {
    echo "Сначало авторизуйтесь";
}

