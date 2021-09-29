<?php
// check if user coming from Request
if ($_SERVER['REQUEST_METHOD']=='POST'){
    //asign variables
        $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING) ;
        $mail=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $cell= filter_var($_POST['cellphone'],FILTER_SANITIZE_NUMBER_INT);
        $msg=filter_var($_POST['message'],FILTER_SANITIZE_STRING);

        
    // creating array of errors
    $formErrors=array();
    if (strlen($user)<= 3){
        $formErrors[]='Username Must be Larger Than <strong> 3 </strong> characters' ;
    }    
    if (strlen($msg)<10){
        $formErrors[]='Message can\'t be Less than <strong> 10 </strong> Characters';
    }

    // if no errors send the email 
    $headers ='From:'. $mail .'\r\n';
    $myEmail = 'elyes.bentrad.01@gmail.com' ;
    $subjebt = 'Contact Form' ;
    
    if (empty($formErrors)){
        mail($myEmail,$subjebt,$msg,$headers);
        $user='';
        $mail='';
        $cell='';
        $msg='';

        $success='<div class="alert alert-success"> We Have Received Your message </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <link rel="stylesheet" href="Css/bootstrap.min.css" />
    <link rel="stylesheet" href="Css/font-awesome.min.css" />
    <link rel="stylesheet" href="Css/contact.css" />
   

    <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Raleway:400,700,900,900i" rel="stylesheet">
   

</head>

<body style="background-color: #F1F1F1;">

<!-- Start Form -->
<div class="container">
    <h1 class="text-center">Contact Me </h1>
       

        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
               
                            <?php
                                if (!empty($formErrors)){ ?> 
                                 <div class="alert alert-danger" alert-dismissible  role="start">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </button>
                            <?php         
                                foreach($formErrors as $error){
                                        echo $error . '<br>';
                                    }
                                    ?>
                                    </div>
                            <?php } ?>
                            <?php if (isset($success)) { echo $success;}?>
                            
                       <div class="form-group">
                             <input 
                             class="form-control"
                             id="username"
                             type="text"
                             name="username" 
                             placeholder="Please type your username" 
                             required 
                             value="<?php if(isset($user)){echo $user ;} ?>"/>
                             <i class="fa fa-user fa-fw "></i>
                            <span class="asterisx">*</span>
                            <div class="alert alert-danger custom-alert"> Username Must be Larger Than <strong> 3 </strong> characters</div>
                       </div> 


                       <div class="form-group">
                            <input 
                            class=" form-control" 
                            id="email"
                            type="email" 
                            name="email" 
                            placeholder="Please type a valid email "  
                            required 
                            value="<?php if(isset($mail)){echo $mail ;} ?>" />
                            <i class="fa fa-envelope fa-fw"></i>
                            <span class="asterisx">*</span>
                            <div class="alert alert-danger custom-alert"> Email can't be <strong>empty</strong> </div> 
                       </div>
              

                        <div class="form-group">
                            <input class="form-control"
                            id="cell" 
                            type="text" 
                            name="cellphone" 
                            placeholder="Type your cellphone"  
                            required 
                            value="<?php if(isset($cell)){echo $cell ;} ?>"/>
                            <i class="fa fa-phone fa-fw"></i>
                            <span class="asterisx">*</span> 
                            <div class="alert alert-danger custom-alert"> Cell phone  <strong> incorrect </strong> </div> 
                        </div>
                       

                        <textarea 
                            class="form-control"
                            id="message"
                            type="text"
                            name="message"
                            placeholder="your message ... !" 
                            required >
                        </textarea>
                        <div class="alert alert-danger custom-alert">Message can\'t be Less than <strong> 10 </strong> Characters</div>
               

               
                        <input type="submit" name="submit" class="btn btn-success" value="Send Message">
                            <i class="fa fa-send fa-fw send-icon"></i>
        </form>

</div>

<!-- End Form -->





   <script src="js/jquery-1.12.4.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/custom.js"></script>
</body>
</html>