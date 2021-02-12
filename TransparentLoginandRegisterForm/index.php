<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login form transparent</title>
</head>
<body>
    <div class="box">
        <h2>Login</h2>
        <form class="formLogin" method="post" action="validate.php">
            <div class="inputBox">
                <input type="text" name="username" required="">
                <label for="">UserName</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <input type="submit" value="Submit">
            <div class="logearse">
                <p class="textP">Aun no tienes cuenta? <a class="textA" href="signUpView.php">Registrate</a></p>
            </div>
        </form>
        <?php if(!empty($error)):?>
            <div class="err">
                <ul class="error"><?php echo $error;?></ul>
            </div>
        <?php endif; ?>          
    </div>
</body>
</html>