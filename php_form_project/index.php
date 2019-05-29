<?php 

?>
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
        $sql ="SELECT * FROM STUDENT WHERE active_flag = 0";
    
        $major = "";
        $gender = "";
        if(!empty($_REQUEST['major'])){
            $major = $_REQUEST['major'];
            if($major!="All"){
                $sql .= " and major = '".$_REQUEST['major']."' ";
            }
        }
        if(!empty($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
            if($gender!="All"){
                $sql .= " and gender = '".$_REQUEST['gender']."' ";
            }
        }
        $rs = $conn->query($sql);
        // echo $major;
        // echo $sql;


    ?>

    <title>Hello, world!</title>
  </head>
  <body>
  
  <div class="container">
  <h1>Walailak Students</h1>
  	<form action="" method="get">
  	<div class="bg-secondary">
  	<br/>
  		<div class="row">
  		<div class="col-2"></div>
      		<h4>Filler Data</h4>
  		</div>
      	<div class="row" >
      		<div class="col-2"></div>
      		<div class="col-3">
      		<div class="input-group flex-nowrap">
                  <select class="custom-select my-1 mr-sm-2" name="major">
                <option  selected>All</option>
                <option value="IT" <?php echo ($major=='IT')?"selected":"" ?>>IT</option>
                <option value="SWE" <?php echo ($major=='SWE')?"selected":"" ?>>SWE</option>
                <option value="MTA" <?php echo ($major=='MTA')?"selected":"" ?>>MTA</option>
                <option value="DIM" <?php echo ($major=='DIM')?"selected":"" ?>>DIM</option>
                <option value="COM" <?php echo ($major=='COM')?"selected":"" ?>>COM</option>
              </select>
                </div>
      		</div>
      		<div class="col-3">
                <div class="input-group flex-nowrap">
                  <select class="custom-select my-1 mr-sm-2" name="gender">
                <option  selected>All</option>
                <option value="f" <?php echo ($gender=='f')?"selected":"" ?>>Female</option>
                <option value="m" <?php echo ($gender=='m')?"selected":"" ?>>Male</option>
              </select>
                </div>
      		</div>
      		<div class="col-2 input-group flex-nowrap">
      			<button type="submit" class="btn btn-info" >Search</button>
      		</div>
      	</div>
      	<br/>
      	</div>
  	</form>
  	<br/><br/>
  	
  	<div class="row">
  		<div class="col">
  		<a href="newstudent.php">
  			<button type="button" class="btn btn-primary">เพิ่มนักศึกษา</button>
  		</a>
  		<a href="summary.php">
  			<button type="button" class="btn btn-primary">ข้อมูลสรุป</button>
  		</a>
  		</div>
  	</div>
          <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Student ID</th>
              <th scope="col">Name</th>
              <th scope="col">DoB</th>
              <th scope="col">Year Old</th>
              <th scope="col">Gender</th>
              <th scope="col">Major</th>
            </tr>
          </thead>
          <tbody>
          <?php while($row = $rs->fetch_array()){ 
              $dob = new DateTime($row["dob"]);
              $now = new DateTime(Date('Y-m-d'));
              $div_dob = $dob->diff($now);
              //var_dump($div_dob);
              //die();
              $gender = ($row["gender"]=="m")?"Male":"Female";
              ?>
            <tr>
              <th scope="row">
              <a href="editstudent.php?studentID=<?php echo $row["studentID"]?>"><?php echo $row["studentID"]?></a></th>
              <td><?php echo $row["firstname"]." ".$row["lastname"]?></td>
              <td><?php echo date_format($dob,"d/ m/ Y");?></td>
              <td><?php echo $div_dob->y;?></td>
              <td><?php echo $gender?></td>
              <td><?php echo $row["major"]?></td>
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