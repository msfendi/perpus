<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/') ?>logo.png" width="110" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="<?= base_url('dashboard'); ?>">Dashboard</a>
                    <a class="nav-link" href="<?= base_url('user'); ?>">User</a>
                    <a class="nav-link" href="<?= base_url('koleksi'); ?>">Koleksi</a>
                    <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                    <a class="nav-link" href="<?= base_url('login/logout'); ?>">Log Out</a>
                </div>
            </div>
        </nav>