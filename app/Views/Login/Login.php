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
            <?php echo session()->getFlashdata('insert') ?>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Sign In</h5>



                        <form action="<?php echo site_url('Blog/login_validate'); ?>" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?php echo get_cookie('email'); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="<?php echo get_cookie("password"); ?>" required>
                            </div>
                            <div class="mb-3">

                                <input type="checkbox" name="remember_me" value="rem"><label for="Remember Me"
                                    class="form-label"> Remember Me</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                <p class="text-center">Don't have account? <a
                                        href="<?php echo site_url('/') ?>">Register
                                        here</a>
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