<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Styles/TemplateStyles.css">
        <title><?php echo $title ?> </title>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">My Ride</a></li>
                    <li><a href="#">Drivers</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">About</a></li>
                    
                </ul>
            </nav>
            <div id="content area ">
                <?php echo $content; ?>
            </div>
            <div id="sidebar">
                
            </div>
            <footer>
                <p>All rights reserved</p>
            </footer>
              
        </div>
     
    </body>
</html>
