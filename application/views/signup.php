<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <div>
    <center>
        <h1>SignUp</h1>
        <form action="<?php echo base_url().'index.php/user/signup' ?>" method="post">
            <label for="name" name="name">Name</label>
            <input type="text" name="name">
            <br><br>
            <label for="email">Email</label>
            <input type="email" name="email">
            <br><br>
            <label for="password">Passoword</label>
            <input type="password" name="password">
            <br><br>
            <label for="address">Address</label>
            <input type="textarea" name="address">
            <br><br>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="M">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="F">
            <label for="female">Female</label>
            <br><br>
            <button>Submit</button>
        </form>
        <br><br>
        Already Registered??
        <br>
        <a href="<?php echo base_url().'index.php/user/login' ?>">Click Here</a> to LogIn.
    </center>
    </div>
</body>
</html>