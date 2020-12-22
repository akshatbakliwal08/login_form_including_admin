<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <div>
    <center>
        <h1>LogIn</h1>
        <form action="<?php echo base_url().'index.php/user/login' ?>" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">
            <br><br>
            <label for="password">Passoword</label>
            <input type="password" name="password">
            <br><br>
            <button>Submit</button>
        </form>
        <br><br>
        Not Registered?
        <br>
        <a href="<?php echo base_url().'index.php/user/signup' ?>">Click Here</a> to SignUp.
    </center>
    </div>
</body>
</html>
</body>
</html>