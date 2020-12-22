<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <center><h1>Welcome <?php echo $users['name'] ?></h1></center>
    <a href="<?php echo base_url().'index.php/user/logout' ?>">LogOut</a>
</body>
</html>