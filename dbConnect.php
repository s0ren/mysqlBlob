<?php
    //var_dump($_SERVER);
    
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
        $dbCon = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName) 
                OR die(mysqli_connect_error()); 
    }
