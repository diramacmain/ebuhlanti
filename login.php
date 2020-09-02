<!DOCTYPE html>
<html lang="en">
<head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

        <div class="container" style="margin-top:100px;width:300px;">
            <form action="includes/login.inc.php" method="post">
                <div class="form-group">
                    <input required type="text" name="logInUid" class="form-control" id="logInUid" placeholder="enter username / email" required>
                    
                </div>
                <div class="form-group">
                    <input required type="password" name="password" class="form-control" id="password" placeholder="enter password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" name="login-submit" value="login" id="submit">
                </div>
            </form>
        </div>

</body>

</html>
