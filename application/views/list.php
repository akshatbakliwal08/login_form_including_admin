<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN[Viewing]</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">ADMIN</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px">
        <div class="row">
            <div class="col-md-12">
                <?php
                    $success=$this->session->userdata('success');
                    $failure=$this->session->userdata('failure');
                    if($success){ 
                ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
                <?php
                    }
                    else{
                ?>
                <div class="alert alert-failure"><?php echo $failure; ?></div>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3>View Users</h3>
            </div>
    </div>
        <div class="row">
            <hr>
            <div class="col-md-8">
                <table class="table table-stripped">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>ADDRESS</th>
                        <th>GENDER</th>
                        <th width="100">EDIT</th>
                        <th width="100">DELETE</th>
                    </tr>
                    <?php if(!empty($users)){
                        foreach($users as $user){?>
                    <tr>
                        <td><?php echo $user['_id']?></td>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo $user['password']?></td>
                        <td><?php echo $user['address']?></td>
                        <td><?php echo $user['gender']?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/admin/edit/'.$user['_id'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/admin/delete/'.$user['_id'] ?>" class="btn-danger btn">Delete</a>
                        </td>
                    </tr>
                    <?php }} else{ ?>
                    <tr>
                        <td colspan="5">Records not Found!!</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>