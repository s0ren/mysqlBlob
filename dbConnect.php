<?php
<<<<<<< HEAD
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
=======

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

>>>>>>> dfc3fe15dc456b6ccfd706d3516d71ad9c55ea7b
