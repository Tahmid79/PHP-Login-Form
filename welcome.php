<?php

$uname = "admin" ;
$password = "admin" ;

session_start();

if(isset($_SESSION['uname'])){

    echo "<h1>Welcome ". $_SESSION['uname']."</h1>" ;

    echo"<a href='product.php'>Product</a></br>"  ;

    echo"<a href='logout.php'><input type='button' value='Logout'  name='logout'/> </a></br> " ;

}

else{
    if($_POST['uname']==$uname  &&  $_POST['pwd']==$password ){

        $_SESSION['uname'] = $uname;

        echo "<script>location.href='welcome.php'</script> ";
    }

    else{

        echo"<script>alert('The username or password is incorrect')</script>" ;

        echo "<script>location.href='page.html'</script> ";
    }

}









?>