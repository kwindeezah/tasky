<?php
include ("config.php");
?>

	<!-- // check if submit button is clicked
	// if (isset($_POST['submit'])) {
	// 	if (empty($_POST['task'])) {
	// 		$errors = "Fill in the task!";
	// 	}else{
	// 		$task = $_POST['task'];
	// 		$sql = "INSERT INTO tasks (task) VALUES ('$task')";
	// 		mysqli_query($conn, $sql);
    //         header('location: index.php');
	// 	}
	// }	 --> 
  

<html>
      <head>
          <title>ToDo List App</title>
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>    
      <body>
          <div class="container">
              <h2>ToDo List</h2><br>
            <form action="input_task.php" method="post">
                <input type="text" name="list" placeholder="input task..." class="tasks">
                <input type="submit" name="submit" class="submit" value="Add Task">
            </form>
            <br>
            <div class="todoList">
                 <?php
                $result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY id");
                while($data_task = mysqli_fetch_array($result)){ 
                ?> 
              <li><?php echo $data_task['task']?><?php echo "<a href='delete_task.php?id=$data_task[id]'><span><i class='fa fa-trash' aria-hidden='true'></i></span></a>"?></li>
               <?php } ?> 
          </div>
          </div>
      </body>
</html>