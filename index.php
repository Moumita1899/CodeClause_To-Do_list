<?php
if (isset($_POST['addTask'])) {
  $task = $_POST['taskInput'];
  if (!empty($task)) {
    // Code to save the task to a database or perform other operations
    // For simplicity, we'll just display the task here
    echo "New Task: " . $task;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
  <style>
    /* CSS Styles here */
  </style>
</head>
<body>
  <h1>To-Do List</h1>

  <div>
    <form action="" method="post">
      <input type="text" name="taskInput" placeholder="Enter a new task">
      <button type="submit" name="addTask">Add</button>
    </form>
  </div>

  <ul id="taskList">
    <!-- Tasks will be displayed here -->
  </ul>

  <script>
    // JavaScript code here...
  </script>
</body>
</html>
