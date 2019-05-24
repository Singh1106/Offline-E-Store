<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Now Thats A Store</title>
            <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container_decor{
            background-color: black;
            
        }
        .TextMine{
            color:whitesmoke;
            font-family: cursive;
            padding-bottom: 10px;
        }
        #bg{
            width: 100%;
            height: auto;
            padding: 40px 0px 0px 0px;
            text-align: center;
            background-size: cover;
            background: url("images/upper-bg.jpg") no-repeat center center fixed;
            background-size: 100%; 
        }
        #inner-bg{         
    overflow:hidden; 
    max-width: 20%;
    margin-top: 2%;
    margin-bottom: 2%;
    border-radius: 15px;
    background-color: rgba(0, 0, 0, 0.7);    
    color:whitesmoke; 
        }
        #inner-bg2{         
    overflow:hidden; 
    width: 400px;
    height: 400px;
    margin-top: 2%;
    margin-bottom: 2%;
    border-radius: 15px;
    background: url("images/chappal.jpg");
    background-size: 100% 100%;
    opacity: 0.7;
    color:black;
    text-align: center;
    }     
    </style>
    </head>
    <body>
        <?php
        session_start();
        include 'includes/Header.php';
        ?>
        <div id="bg" class="container-fluid">
            <div class="row">
                <div class="col-xs-12" >
                    <div class='container' id='inner-bg'>
                        <h1>Jee Aaya Nu</h1>   
                    </div>  
                    <div class='container' id='inner-bg2'>
                        <h2>Chappal Bahaar Utare for</h2>
                        <a href="Products.php" class="btn btn-lg btn-danger">Shopping Ji</a>
                    </div>  
                    
                </div>  
            </div>
        </div>
        <?php
        include 'includes/Footer.php';
        ?>
    </body>
</html>
