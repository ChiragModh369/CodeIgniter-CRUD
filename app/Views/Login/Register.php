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
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Register</h5>

                        <form action="<?php echo site_url('Blog/insertRecord'); ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="First Name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="FirstName" name="fname" value="">
                            </div>
                            <div class="mb-3">
                                <label for="Last Name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="LastName" name="lname" value="">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Choose Image</label>
                                <input type="file" class="form-control" id="pic" name="pic">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block">Register Now</button>
                                <p class="text-center">Have already an account
                                    <a href="<?php echo site_url('login') ?>">Login here</a>
                                <p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>