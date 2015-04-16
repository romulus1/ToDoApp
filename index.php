<!DOCTYPE html>
<html>
  <head>
    <title>Luis To-Do List</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>
    <div class="wrap">
      <div class="task-list">
        <ul>
          <?php require("Includes/connect.php"); ?>
        </ul>
    </div>
    <form class="add-new-task" autocomplete="off">
      <input type="text" name="new-task" placeholder="Add new item..."/>
    </div>
  </body>
</html>
