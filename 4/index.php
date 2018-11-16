<html>
    <body>
        <h2>Pon algo</h2>
        <form action="<?=$_SERVER['PHP_SERVER'];?> " method="POST">
            Name:<input type="text" name="name">
            <input type="submit" name="Send" value="Send">
        </form>
    </body>
    
</html>

<?php

    if (isset($_POST['name']) && !empty($_POST['name'])){
        
        $nombre = $_POST['name'];
        echo ("Hellow dah ".$nombre);
    }
    else{
        echo "No sabes hacer nah";
    }