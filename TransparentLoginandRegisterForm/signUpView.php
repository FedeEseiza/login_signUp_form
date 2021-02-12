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
        <h2>Sign UP</h2>
        <form class="formLogin" method="post" action="signUp.php">
            <div class="inputBox">
                <input type="text" name="username" required="">
                <label for="">UserName</label>
            </div>
            <div class="inputBox">
                <input type="text" name="name" required="">
                <label for="">Nombre</label>
            </div>
            <div class="inputBox">
                <input type="text" name="surname" required="">
                <label for="">Apellido</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password2" required="">
                <label>Password Confirm</label>
            </div>
            <input type="submit" value="SingUp">
            <p class="textP">Ya tienes cuenta ? <a class="textA" href="#">Logeate</a></p>
        </form>        
        <?php if(!empty($error)):?>
            <div class="err">
                <ul class="error"><?php echo $error;?></ul>
            </div>
        <?php endif; ?>    
    </div>
</body>
</html>