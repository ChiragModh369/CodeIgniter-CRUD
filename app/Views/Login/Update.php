<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"
        media="screen">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Update</h5>
                        <form action="<?php echo site_url('Blog/edit/'); ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="hidden" class="form-control"" name=" id"
                                    value="<?php echo $user['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="First Name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="FirstName" name="fname"
                                    value="<?php echo $user['fname']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Last Name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="LastName" name="lname"
                                    value="<?php echo $user['lname']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?php echo $user['email']; ?>" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="<?php echo $user['password']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Current_Image" class="form-label">Current_Image</label>

                                <img src="<?php echo base_url('upload/' . $user['pic']); ?>" alt="File Not Found"
                                    style="height:100px; width:100px; margin-left:150px;"
                                    class="shadow bg-body rounded ">

                                <input type="hidden" class="form-control" name="current_pic"
                                    value="<?php echo $user['pic']; ?>">

                            </div>
                            <div class="mb-3">
                                <label for="Choose_Image" class="form-label">Choose Image</label>
                                <input type="file" class="form-control" id="pic" name="pic">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>