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
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script>
   add_task(); //calling the add task function

   function add_task(){
     $('.add-new-task').submit(function() {
       var new_task = $('.add-new-task input[name=new-task]').val();

       if (new_task != '') {
         $.post('Includes/add-task.php', {tasks: new_task}, function(data) {
           $('add-new-task input[name=new-task]').val();
              $(data).appendTo('task-list ul').hide().fadeIn();
         });
       }
       return false;
     });
   }

   $('.delete-button').click(function()) {
     var current_element = $(this);
     var task_id = $(this).after['id'];
     
     $.post('Includes/delete-task.php'. {id: task_id}, functino(){
     current_element.parent(). fadeOut("fast", function(){
       $(this).remove();
     });
   });
  });
  </script>
</html>
