<div class="container">
    <h1>My To-Do Tasks</h1>

    <ul>
        <?php
        foreach ($taskMessages as $message) {
            echo "<li>$message</li>";
        }
        ?>
    </ul>

    <div class="summary">
        <p>You have completed <?php echo $doneCount; ?> task(s).</p>
        <p>You have <?php echo $pendingCount; ?> pending task(s).</p>
    </div>

    <a href="#" class="button">This is a button</a>
</div>