<!DOCTYPE html>
<?php

    include_once './vendor/autoload.php';
    use \WideImage\WideImage;
    
    
    if (isset($_POST['submit']))
    {
        $db = mysqli_connect("localhost","root","","blob"); //keep your db name
        //$image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
        $image = WideImage::loadFromUpload('images');
        
        $data = addslashes($image->resize(NULL, 200)->asString('jpg', 80));
        //you keep your column name setting for insertion. I keep image type Blob.
        $query = "INSERT INTO products (id,image) VALUES('','$data')";  
        $qry = mysqli_query($db, $query);
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
        $db = mysqli_connect("localhost","root","","blob"); //keep your db name
        $sql = "SELECT * FROM products ORDER BY id DESC";
        $sth = $db->query($sql);
        while($row=mysqli_fetch_array($sth))
        {
            echo '<img height="200" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
        }
        ?>
    </body>
</html>
