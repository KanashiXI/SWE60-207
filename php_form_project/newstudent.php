<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    if( !empty ($_REQUEST['Student_ID'])) {
            // print_r ($_REQUEST);    
            require_once("db.php");
            $sql = "INSERT INTO STUDENT VALUES ('".$_REQUEST['Student_ID']."', '".$_REQUEST['firstname']."' , '".$_REQUEST['lastname']."', '".$_REQUEST['dob']."', '".$_REQUEST['gender']."', '".$_REQUEST['major']."', 0 ) ";
            // var_dump ($sql);
            if( $conn->query($sql)){
                echo "Add complete!!!!<br/>";
                echo "Click <a href='index.php'>Click</a> back to index page<br/>";
                exit;
            }else{
                echo "Add incomplete!!!!'.$conn->error.'<br/>";
            }
            
         
       
            }
    // (mb_id, mb_f_name, mb_l_name , mb_telno, mb_email, )
    //  ('$name', '$mail', '$phone', '$area')
    ?>

  <div class="container">
  <h1>New Students</h1>
  	<form action="" method="post">
  		<div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">Student ID</span>
          </div>
          <input type="text" class="form-control" placeholder="Student ID" aria-label="Student_ID" aria-describedby="addon-wrapping" name="Student_ID">
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">First Name</span>
          </div>
          <input type="text" class="form-control" placeholder="First name" aria-label="firstname" aria-describedby="addon-wrapping" name="firstname">
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">Last Name</span>
          </div>
          <input type="text" class="form-control" placeholder="Last name" aria-label="lastname" aria-describedby="addon-wrapping" name="lastname">
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">DoB</span>
          </div>
          <input type="text" class="form-control" placeholder="Date of Birth" aria-label="dob" aria-describedby="addon-wrapping" name="dob">
          
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">Gender</span>
          </div>
          <label class="form-control">Female</label>
          <input type="radio" class="form-control" value="f" name = "gender">
          <label class="form-control">Male</label>
          <input type="radio" class="form-control" value="m" name = "gender">
        </div>
        <div class="input-group flex-nowrap">
          <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping">Major</span>
          </div>
          <select class="custom-select my-1 mr-sm-2" name="major">
            <option  selected>Choose...</option>
            <option value="IT" >IT</option>
            <option value="SWE">SWE</option>
            <option value="MTA" >MTA</option>
            <option value="DIM" >DIM</option>
            <option value="COM" >COM</option>
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