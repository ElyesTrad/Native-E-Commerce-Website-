
<?php include_once 'header.php' ?>


<main>
    <section> 
        <h2> Log In </h2>
            <form action="Include/Login.inc.php" method="post">

                <div class="container">
                       <hr>

                         <label for="email"><b style="font-size: 20px; color:red; font-style: italic;  " >Email / Username</b></label> <br> <br>
                                <input type="text" placeholder="Enter Email Or Username" name="uid" style="width: 400px; height: 30px" required>
                                    <br>
                        <label for="psw"><b style="font-size: 20px; color:red; font-style: italic;  " >Password</b></label> <br> <br>
                                <input type="password" placeholder="Enter Password" name="pwd" style="width: 400px; height: 30px" required>

                      <hr>
    

                <button type="submit" name="submit" class="registerbtn">Log in</button>
         
            </div>

         </form>
         <?php
  if (isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo " <p>  fieled in all fields  </p>" ;
    }
    else if($_GET["error"] == "wronglogin"){
      echo " <p>Incorrect Login information ! </p>" ; 
    }}
      
      ?>
        
    </section>

</main>


<?php include_once 'footer.php' ?>