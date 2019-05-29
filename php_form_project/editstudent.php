<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php 
        require_once("db.php");
        $sql ="SELECT * FROM STUDENT WHERE studentID = '".$_REQUEST['studentID']."' ";
        $rs = $conn->query($sql);
        $row=null;
        if (!($row = $rs->fetch_array())){
          exit();
        }
       



        if( !empty ($_REQUEST['studentID']) && !empty($_REQUEST['firstname'])) {
          // $studentID = ;
          // $firstname = $_REQUEST['firstname'];
          // $lastname = $_REQUEST['lastname'];
          // $dob = $_REQUEST['dob'];
          // $gender = $_REQUEST['gender'];
          // $major = $_REQUEST['major'];
          // print_r ($_REQUEST);    
          $sql = "UPDATE STUDENT SET firstname = '".$_REQUEST['firstname']."' 
          ,lastname = '".$_REQUEST['lastname']."'  ,dob = '".$_REQUEST['dob']."'  ,gender = '".$_REQUEST['gender']."'
          ,major = '".$_REQUEST['major']."' where studentID = '".$_REQUEST['studentID']."' ";
          // echo ($sql);
          if( $conn->query($sql)){
              echo "Edit complete!!!!<br/>";
              echo "Click <a href='index.php'>Click</a> back to index page<br/>";
              exit;
          }else{
              echo "Edit incomplete!!!!'.$conn->error.'<br/>";
          }
          
        }
    
    ?>
  <div class="container">
  <h1>Edit Students</h1>
  	<form action="editstudent.php" method="post">
  		<div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">Student ID</span>
          </div>
          <input type="text" class="form-control" placeholder="Student ID" aria-label="Student_ID" aria-describedby="addon-wrapping" readonly name="studentID" readonly value="<?php echo $row["studentID"]?>">
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">First Name</span>
          </div>
          <input type="text" class="form-control" placeholder="First name" aria-label="firstname" aria-describedby="addon-wrapping" name="firstname" value="<?php echo $row["firstname"]?>">
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">Last Name</span>
          </div>
          <input type="text" class="form-control" placeholder="Last name" aria-label="lastname" aria-describedby="addon-wrapping" name="lastname" value="<?php echo $row["lastname"]?>">
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">DoB</span>
          </div>
          <input type="text" class="form-control" placeholder="Date of Birth" aria-label="dob" aria-describedby="addon-wrapping" name="dob" value="<?php echo $row["dob"]?>">
          
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">Gender</span>
          </div>
          <label class="form-control">Female</label>
          <input type="radio" class="form-control" value="f"<?php echo ($row['gender']=="f")?"checked":"" ?> name = "gender"  >
          <label class="form-control">Male</label>
          <input type="radio" class="form-control" value="m"<?php echo ($row['gender']=="m")?"checked":"" ?> name = "gender" >
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">Major</span>
          </div>
          <select class="custom-select my-1 mr-sm-2" name="major">
            <option  selected>Choose...</option>
            <option value="IT" <?php echo ($row["major"]=='IT')?"selected":"" ?>>IT</option>
            <option value="SWE" <?php echo ($row["major"]=='SWE')?"selected":"" ?>>SWE</option>
            <option value="MTA" <?php echo ($row["major"]=='MTA')?"selected":"" ?>>MTA</option>
            <option value="DIM" <?php echo ($row["major"]=='DIM')?"selected":"" ?>>DIM</option>
            <option value="COM" <?php echo ($row["major"]=='COM')?"selected":"" ?>>COM</option>
          </select>
        </div>
        
        <div class="input-group flex-nowrap">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>