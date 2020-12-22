<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN[Editing]</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">ADMIN</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px">
        <h3>Edit User</h3>
        <hr>
        <form method="post" name="editUser" action="<?php echo base_url().'index.php/admin/edit/'.$user['_id']; ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="<?php echo set_value('name',$user['name']) ?>" name="name" class="form-control">
                        <?php echo form_error('name'); ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo set_value('email',$user['email']) ?>" class="form-control">
                        <?php echo form_error('email'); ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="textarea" name="address" value="<?php echo set_value('address',$user['address']) ?>" class="form-control">
                        <?php echo form_error('address'); ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="radio" name="gender" value="M" class="form-control">
                        <label for="gender">Male</label>
                        <input type="radio" name="gender" value="F" class="form-control">
                        <label for="gender">Female</label>
                        <?php echo form_error('gender'); ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url().'index.php/admin/index'; ?>" class="btn-secondary btn">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>