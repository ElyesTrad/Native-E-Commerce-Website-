
<?php include_once 'header.php' ?>


<main  >
    <section  > 
      <h2> Sign Up </h2>
    <form action="Include/Signup.inc.php" method="post">

     <div class="container">
       <hr>
     <label ><b style="font-size: 20px; color:red; font-style: italic;  ">Full Name </b></label> <br>
          <input type="text" placeholder="Full Name" name="name"  style="width: 400px; height: 30px" required>
          <br>
    <label ><b  style="font-size: 22px; color:red; font-style: italic; " >Email</b></label>  <br>
           <input type="text" placeholder="Enter Email" name="email"  style="width: 400px; height: 30px"  required> <br>
    <label ><b  style="font-size: 22px; color:red; font-style: italic; " >User Name</b> </label> <br>
          <input type="text" name="uid" placeholder="Enter user name"  style="width: 400px; height: 30px"> <br>
    <label ><b  style="font-size: 22px; color:red; font-style: italic; " >Password</b></label> <br>
          <input type="password" placeholder="Enter Password" name="pwd"  style="width: 400px; height: 30px"  required> <br>

    <label ><b  style="font-size: 22px; color:red; font-style: italic; " >Repeat Password</b></label> <br>
          <input type="password" placeholder="Repeat Password" name="pwdrepeat"  style="width: 400px; height: 30px"  required>
      <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

          <button type="submit" name="Submit" class="registerbtn">Register</button>
 
     </div>
  
    </form>
    

<?php
  if (isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo " <p>  failed in all textFields </p>" ;
    }
    else if($_GET["error"] == "invaliduid"){
      echo " <p> change username </p>" ;
    }
    else if($_GET["error"] == "invalidemail"){
      echo " <p> email not found </p>" ;
    }
    else if($_GET["error"] == "passworddontmatch"){
      echo " <p> password doesn't match </p>" ;
    }
    else if($_GET["error"] == "usernametaken"){
      echo " <p> username is takes .. choose other </p>" ;
    }
    else if($_GET["error"] == "stmtfailed"){
      echo " <p> Somethin went wrong .. try again  </p>" ;
    }
    else if($_GET["error"] == "none"){
      echo " <p> You have signed up ! </p>" ;
    }

  }
?>

</section></main>




<?php include_once 'footer.php' ?>