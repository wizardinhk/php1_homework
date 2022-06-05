<?php foreach ($taskProvider1->getTaskList() as $task):?>
<div>
    <?=$task->getDescription()?> <a href="?task=done">[Done]</a>
</div>
<?php endforeach;?>
