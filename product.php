<?php

session_start() ;

    if(isset($_SESSION['uname'])){

    echo "<h1>Welcome to product page</h1>" ;

    echo "<a href='welcome.php'><input type='button' value='Back' name='back'/></a>   " ;

    }

    else{

        echo"<script>location.href='page.html'</script>" ;
    }

?>