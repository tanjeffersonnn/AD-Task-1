<?php

$doneCount = 0;
$pendingCount = 0;
$taskMessages = [];


for ($i = 0; $i < count($todosArray); $i++) {
    $task = $todosArray[$i];

    if ($task['completed']) {
        $doneCount++;
        $taskMessages[] = $task['title'] . " is ✅ Done";
    } else {
        $pendingCount++;
        $taskMessages[] = $task['title'] . " is ❌ Not Done";
    }
}