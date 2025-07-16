<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My To-Do Tasks</title>
    </head>
<body>

    <?php
    $todosArray = [
        ['title' => 'Finish project report', 'completed' => true],
        ['title' => 'Review PHP notes', 'completed' => false],
        ['title' => 'Clean my desk', 'completed' => true],
        ['title' => 'Submit assignment', 'completed' => false],
        ['title' => 'Read 5 pages', 'completed' => true],
    ];

    require_once __DIR__ . '/../utils/Example.utils.php';

    require_once __DIR__ . '/../components/example.component.php';
    ?>

</body>
</html>