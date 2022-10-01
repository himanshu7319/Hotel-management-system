<?php

   ?> 
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="css/homepage.css"/>
    <script type="text/javascript">
           function redirect()
           {
            window.location="homepage.php";
           }
           function direct()
           {
            window.location="forgetpass1.php";
           }
           </script>
</head>
<body>


   
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="img/htl.png"/>
        
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter Username or Password</div>';
            }elseif (isset($_GET['loginE'])){
                echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax2.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <header>Receptionist login</header>
                    <label>Username </label>
                    <input type="text" name="username" class="form-control" placeholder="" required
                           data-error="Enter Username or Email">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-success btn-block btn-signin" type="submit" name="login">LOGIN</button>
            <input type = "button" value = "Home" onclick = "redirect();" />
            <input type = "button" value = "Forget password" onclick = "direct();" />
          
            </form>

    </div><!-- /card-container -->
</div><!-- /container -->
    

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>


