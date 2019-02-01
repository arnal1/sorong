<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <?php require_once("template/css.php"); ?>

        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>

        <form action="config/do_register.php" method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <label for="password2">Re-Enter Password</label>
                <input type="password" class="form-control" id="password2" placeholder="Re-Enter Password" name="password2">
            </div>
            <input type="submit" class="btn btn-primary" value="Register">
    
        </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php require_once("template/js.php"); ?>
    </body>
</html>