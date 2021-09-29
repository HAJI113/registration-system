<?php include "./server.php" ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration system PHPand MySQL</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register.php" method="POST">
        <?php include ('errors.php')?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" value="<?php echo $password; ?>">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>Already a member? <a href="">Sign in</a> </p>
    </form>

</body>
</html>