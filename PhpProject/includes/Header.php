<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#signuplogin">
                    <span class="glyphicon glyphicon-bullhorn" id="white"></span>
                </button>
                <a href="index.php" class="navbar-brand" font-weight="bold">Now That's A Store</a>
            </div>
            <div class="collapse navbar-collapse" id="signuplogin">
                <ul class="nav navbar-nav navbar-right">
                    <li style="color:whitesmoke; float: right"> <?php
                    
                    if(isset($_SESSION['id']))
                    { echo $_SESSION['name'];
                    ?></li>
                         <li><a href="#" data-toggle="modal" data-target="#mycartmodal"><span class="glyphicon glyphicon-apple"></span>Cart</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#mysettingmodal"><span class="glyphicon glyphicon-baby-formula"></span>Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
                <?php
                      }
                    else{ ?>
                    <li><a href="#mysignupmodal" data-toggle="modal" data-target="#mysignupmodal"  ><span class="glyphicon glyphicon-baby-formula"></span>Signup</a></li>
                    <li><a href="#myloginmodal" data-toggle="modal" data-target="#myloginmodal"><span class="glyphicon glyphicon-user"></span>Login</a></li>
                    
                    <?php }
                    ?>
                    </ul>
            </div>
        </div>
</nav>
 <?php
                   // session_start();
 include 'signup.php';
 include 'login.php';
 include 'cart.php';
 include 'Setting.php';
 ?>   