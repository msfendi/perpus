<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/')
                                    ?>css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- ---- Include the above in your HEAD tag -------- -->
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first p-3">
                <img src="<?= base_url('assets/') ?>logo.png" width="200" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="<?= base_url('login/auth'); ?>" method="post">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In" name="submit">

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberme" name="remember_me">
                    <label class="form-check-label" for="rememberme">
                        Remember Me
                    </label>
                </div>
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>
</body>

</html>