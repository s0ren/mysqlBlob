<?php
    require_once './dbConnect.php';
?>
<!DOCTYPE html>
<?php

    if (isset($_POST['submit']))
    {
        
        $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
        //you keep your column name setting for insertion. I keep image type Blob.
        $query = "INSERT INTO products (id,image) VALUES('','$image')";  
        $qry = mysqli_query($dbCon, $query) 
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
        $sql = "SELECT * FROM products ORDER BY id DESC";
        $result = $dbCon->query($sql);
        while($row=mysqli_fetch_array($result))
        {
            echo '<img height="200" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
        }
        ?>
    </body>
</html>
