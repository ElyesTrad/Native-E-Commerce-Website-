<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/Reset.css" >
   
</head>
<body>
  
<header >
        <span id="logobox"> 
            <h2>PROTEIN SHOP</h2>
        </span>
        <nav>
            <ul>
                &nbsp; &nbsp; 
                <li>
                   <a href="../pfa.html"  >ACCEIL</a>
                </li>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

            <?php
                if(isset($_SESSION["useruid"])){
                    echo " <li> <a href='Include/logout.inc.php' > LOG OUT  </a> </li> ";
                   
                    
                }
                else {
                    echo " <li> <a href='Signup.php' > SIGN UP  </a> </li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp  "; 
                    echo " <li> <a href='login.php' > LOG IN  </a> </li>";
                }
            ?>

                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <LI> 
                   
                <li>
                    <input type="text" name="text" placeholder="Research .. " style="width: 200px;" >
                
                </li>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <li>
                    <button type="Submit" name="Submit" >Research  </button>
                </li>

            </ul>
        </nav>
    </header>
    


    