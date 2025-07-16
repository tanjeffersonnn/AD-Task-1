



<div class="dashboard-container">
    <header class="dashboard-header">
        <h1 class="dashboard-title">To-do List</h1>
    </header>
    <section class="task-overview">
        <h2>Task Overview</h2>
        <table class="task-table">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>To Start</th>
                    <th>In Progress</th>
                    <th>Blocked</th>
                    <th>Done</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todosArray as $task): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($task['title']); ?></td>
                        <td><input type="checkbox" disabled></td>
                        <td><input type="checkbox" disabled></td>
                        <td><input type="checkbox" disabled></td>
                        <td><input type="checkbox" disabled <?php echo $task['completed'] ? 'checked' : ''; ?>></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td><em>Add rows as needed</em></td>
                    <td></td><td></td><td></td><td></td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="task-details">
        <h2>Task Details</h2>
        <div class="task-detail-block">
            <h3>Task 1: <a href="#">Add it here</a></h3>
            <p><strong>Due Date:</strong> MM/DD/YYYY</p>
            <p class="desc">Description: Add details relevant to the task here.<br>
            <span class="tip">• You can also break down your task into manageable action items.<br>• Add more sub-tasks as needed.</span></p>
        </div>
        <div class="task-extra">
            <div class="deliverables">
                <h4>Deliverables</h4>
                <ul>
                    <li>Add here</li>
                    <li>Add another</li>
                </ul>
            </div>
            <div class="notes">
                <h4>Notes and Resources</h4>
                <ul>
                    <li>Add comments, blockers, images, inspiration, or embeds here</li>
                </ul>
            </div>
        </div>
    </section>
</div>