<?php
    var_dump($_SERVER);
    
    if ( isset($_SERVER['SERVER_NAME'])) 
    {
        if($_SERVER['SERVER_NAME'] == 'localhost')
        {
            $dbHost = "localhost";
            $dbUser = "root";
            $dbPassword = "";
            $dbName = "blob";
        }
        elseif ($_SERVER['SERVER_NAME'] == 'hundeprut.herokuapp.com') 
        {
            $dbHost = "m60mxazb4g6sb4nn.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
            $dbUser = "j8k40mipq1w2czqu";
            $dbPassword = "bfa50wwhim2o6pau";
            $dbName = "l8ryl26yzasnwqrd";
        }
        $db = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName) 
                OR die(mysqli_connect_error()); 
    }
?>
<!DOCTYPE html>
<?php

    if (isset($_POST['submit']))
    {
        
        $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
        //you keep your column name setting for insertion. I keep image type Blob.
        $query = "INSERT INTO products (id,image) VALUES('','$image')";  
        $qry = mysqli_query($db, $query) 
                OR die($query . mysqli_error($db));
    }
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BLOB</title>
    </head>
    <body>
        
        <form action="" method="post" enctype="multipart/form-data" >
            
            <input type="file" name="images">
            <input type="submit" name="submit">
            
        </form>
        
        <?php
        //$db = mysqli_connect("localhost","root","","blob"); //keep your db name
        $sql = "SELECT * FROM products ORDER BY id DESC";
        $sth = $db->query($sql);
        while($row=mysqli_fetch_array($sth))
        {
            echo '<img height="200" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
        }
        ?>
    </body>
</html>
