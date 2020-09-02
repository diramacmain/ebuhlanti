<!DOCTYPE html>
<html lang="en">
<head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

        <div class="container" style="margin-top:100px;width:300px;">
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <input require type="text" name="uid" class="form-control" id="uid" placeholder="Username">
                    
                </div>
                <div class="form-group">
                    <input type="email" name="mail" class="form-control" id="mail" placeholder="E-mail">
                    
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd-repeat" class="form-control" id="pwd-repeat" placeholder="Repeat Password">    
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" name="signup-submit" value="signup" id="submit">
                </div>
            </form>
        </div>

</body>

</html>
