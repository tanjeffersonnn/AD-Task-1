<?php
$taskName = "Grocery Shopping";
$priority = 1;
$isCompleted = false;

$groceryList = [
    ["item" => "Milk", "quantity" => 2, "unit" => "gallons"],
    ["item" => "Eggs", "quantity" => 1, "unit" => "dozen"],
    ["item" => "Bread", "quantity" => 1, "unit" => "loaf"],
    ["item" => "Cheese", "quantity" => 0.5, "unit" => "pound"],
    ["item" => "Apples", "quantity" => 5, "unit" => "count"],
];

$priorityMessage = "";
if ($priority == 1) {
    $priorityMessage = "High Priority";
} elseif ($priority == 2) {
    $priorityMessage = "Medium Priority";
} else {
    $priorityMessage = "Low Priority";
}

$completionMessage = $isCompleted ? "Completed" : "Not Completed";

$groceryListDisplay = "
    <div style='margin-bottom: 20px;'>
        <table style='width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden;'>
            <thead style='background-color: #f0f0f0;'>
                <tr>
                    <th style='padding: 12px; text-align: left; border-bottom: 1px solid #ddd;'>Item</th>
                    <th style='padding: 12px; text-align: left; border-bottom: 1px solid #ddd;'>Quantity</th>
                    <th style='padding: 12px; text-align: left; border-bottom: 1px solid #ddd;'>Unit</th>
                </tr>
            </thead>
            <tbody>
";
for ($i = 0; $i < count($groceryList); $i++) {
    $groceryListDisplay .= "
                <tr>
                    <td style='padding: 12px; border-bottom: 1px solid #eee;'>".$groceryList[$i]["item"]."</td>
                    <td style='padding: 12px; border-bottom: 1px solid #eee;'>".$groceryList[$i]["quantity"]."</td>
                    <td style='padding: 12px; border-bottom: 1px solid #eee;'>".$groceryList[$i]["unit"]."</td>
                </tr>
    ";
}
$groceryListDisplay .= "
            </tbody>
        </table>
    </div>
";

$completedCount = 0;
while ($completedCount < 2) {
    $completedCount++;
}

$outputList = "
    <div style='margin-bottom: 20px;'>
        <h2 style='color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 10px; margin-bottom: 15px;'>Items</h2>
        <div style='padding: 12px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);'>
";
foreach ($groceryList as $item) {
    $outputList .= "<span style='display: inline-block; margin-right: 10px; padding: 8px 15px; background-color: #e0f7fa; color: #00897b; border-radius: 15px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);'>".$item["item"]."</span>";
}
$outputList .= "
        </div>
    </div>
";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
            color: #333;
            line-height: 1.6;
        }
        div {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: left;
        }
        strong {
            color: #2c3e50;
            font-weight: 600;
        }
        span {
            color: #e74c3c;
        }
    </style>
</head>
<body>

    <div style="background-color: #e3f2fd; border-left: 4px solid #3498db; padding: 15px; border-radius: 8px;">
        <strong>Task Name:</strong> <span style="color: #2c3e50;"><?php echo $taskName; ?></span>
    </div>
    <div style="background-color: #e3f2fd; border-left: 4px solid #3498db; padding: 15px; border-radius: 8px;">
        <strong>Priority:</strong> <span style="color: #2c3e50;"><?php echo $priorityMessage; ?></span>
    </div>
    <div style="background-color: #e3f2fd; border-left: 4px solid #3498db; padding: 15px; border-radius: 8px;">
        <strong>Completion Status:</strong> <span style="<?php echo $isCompleted ? 'color: #2ecc71;' : 'color: #e74c3c;'; ?>"><?php echo $completionMessage; ?></span>
    </div>
    <?php echo $groceryListDisplay; ?>
    <div style="background-color: #e3f2fd; border-left: 4px solid #3498db; padding: 15px; border-radius: 8px;">
        <strong>Completed Count:</strong> <span style="color: #2c3e50;"><?php echo $completedCount; ?></span>
    </div>
    <?php echo $outputList; ?>
</body>
</html>
