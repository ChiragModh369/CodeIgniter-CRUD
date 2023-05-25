<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <h2 class="text-center"> DATA</h2><br>
    <h2 class="text-center">Welcome
        <?php echo session()->get('uname'); ?>
    </h2>
    <div class="container-fluid">

        <div class="row justify-content-md-center">
            <div class="col-8 text-center">
                <a href="<?php echo site_url('logout') ?>" class="btn btn-secondary mb-5">Logout</a>
                <table class="table table-hover">
                    <thead>
                        <tr class="bg bg-primary text-white">
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php

                    foreach ($user as $u) {
                        $id = $u['id'];
                        $fname = $u['fname'];
                        $lname = $u['lname'];
                        $email = $u['email'];
                        $password = $u['password'];
                        $pic = $u['pic'];


                        ?>

                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $id; ?>
                                </td>
                                <td>
                                    <?php echo $fname; ?>
                                </td>
                                <td>
                                    <?php echo $lname; ?>
                                </td>
                                <td>
                                    <?php echo $email; ?>
                                </td>

                                <td>
                                    <img src="<?php echo base_url('upload/' . $pic); ?>" alt="File Not Found"
                                        style="height:100px; width:100px; border-radius:10%;" class="shadow bg-body rounded"
                                        </td>
                                <td>
                                    <a href="<?php echo site_url('update/' . $id) ?>" class=" btn btn-success">
                                        Update </a>
                                    <a href="<?php echo site_url('delete/' . $id) ?>" class="btn btn-danger">
                                        Delete </a>

                                </td>
                                <?php
                    } ?>


                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">

            <a href="<?php echo site_url('/'); ?>" class="btn btn-primary mb-3 text-white"
                style="font-size:19px; width:65%;">Add
                Data</a>
        </div>
    </div>
</body>

</html>