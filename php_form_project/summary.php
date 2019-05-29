<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

    <?php 
        require_once("db.php");
    ?>

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <h1>Walailak Students</h1>  	
  	<div class="row">
  		<div class="col">
  		<a href="index.php">
  			<button type="button" class="btn btn-primary">back</button>
  		</a>
  		</div>
  	</div>
          <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Major</th>
              <th scope="col">Amount of Student</th>
              <th scope="col">View</th>
            </tr>
          </thead>
          <tbody>
          <?php 

                      
            $sql = "select count(studentID) as students, major as mj from student group by mj";
            $rs = $conn->query($sql); 
            while($row = $rs->fetch_array()){



            ?>
              <tr>
              <th ><?php echo $row['mj'] ?></th>
              <td><?php echo $row['students'] ?></td>
              <td><a href="index.php?major=<?php echo $row["mj"]?>">Deatil</a></td>
            </tr>
           <?php 
              }
           
           ?>
            
           
          </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>
