
<?php include_once 'header.php' ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap');
.welcome{
    border-bottom: 4px dotted black;
    font-size: 50px;
    font-family: italic;
    color: red;
    font-family: 'Poppins', sans-serif;
text-align: center;
}
.imgg{
    margin-left: 200px;
}
.sale{
    width: 300px;
    margin-left: 600px;
}
</style>

<Section  >
<?php
    if(isset($_SESSION["useruid"])){
        echo " <h3 class='welcome'> Welcome " .$_SESSION["useruid"] . " To Our Website .. </h3>";
        echo "<br>";
        echo "<img src='assets/team-photo.jpg' class='imgg' >";
        echo "<br>";
        echo "<img src='assets/sale.jpg' class='sale'>";
       
    }
    
 ?>

</Section>

<section >
</section>



<?php include_once 'footer.php' ?>