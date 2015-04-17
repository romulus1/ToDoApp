<?php
  $tasks = strip_tags($_POST['tasks']);
  $date = date('Y-m-d');
  $time = date('H:i:s');

  include('connect.php');

  $mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
  $mysqli ->query("INSERT INTO tasks VALUES ('', '$task, '$date', '$time')");

  $query = "SELECT = FROM tasks WHERE task='$task' and date='$date' and time='$time' ";

  if($result = $mysqli->query($query)) {
    while ($grow = $result->fetch_assoc) {
      $task_id = $row['id'];
      $task_name = $row['task']
    }
  }

  echo '<li><span>' .$task_name. '</span><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';
  
  $mysqli->close();
  ?>
