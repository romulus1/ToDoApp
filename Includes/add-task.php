<?php
  $tasks = strip_tags($_POST['tasks']);
  $date = date('Y-m-d');
  $time = date('H:i:s');

  include('connect.php');

  $mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
  $mysqli ->query("INSERT INTO tasks VALUES ('', '$task, '$date', '$time')");

  $query = "SELECT = FROM tasks WHERE task='$task' and date='$date' and time='$time' ";
