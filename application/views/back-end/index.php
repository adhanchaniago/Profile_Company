<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>">
    <title>Dashboard Admin <?php echo $web_name; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href=""><?php echo $web_name; ?></a>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?php echo base_url('Login/logout') ?>"><i class="fa fa-sign-out"></i> Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?php if($pagename == 'Dashboard') echo 'active'; ?>" href="<?php echo base_url('Admin'); ?>">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($pagename == 'Project') echo 'active'; ?>" href="<?php echo base_url('Admin/event'); ?>">
                                <span data-feather="airplay"></span>
                                Service / Project
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($pagename == 'Career') echo 'active'; ?>" href="<?php echo base_url('Admin/service'); ?>">
                                <span data-feather="user"></span>
                                Career
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($pagename == 'Promotion') echo 'active'; ?>" href="<?php echo base_url('Admin/promo'); ?>">
                                <span data-feather="thumbs-up"></span>
                                Promotion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($pagename == 'Team') echo 'active'; ?>" href="<?php echo base_url('Admin/team'); ?>" >
                                <span data-feather="users"></span>
                                Team
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($pagename == 'Contact') echo 'active'; ?>" href="<?php echo base_url('Admin/contact'); ?>" >
                                <span data-feather="phone"></span>
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($pagename == 'Slider') echo 'active'; ?>" href="<?php echo base_url('Admin/slider'); ?>" >
                                <span data-feather="image"></span>
                                Slider
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2"><?php echo $pagename; ?></h1>
                </div>
                <?php echo $page; ?>
            </main>
        </div>
    </div>

    <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js'); ?>"></script>
    <script>
    window.jQuery || document.write(
        '<script src="<?php echo base_url('assets/lib/jquery/jquery-slim.min.js'); ?>"><\/script>')
    </script>
    <script src="<?php echo base_url('assets/lib/jquery/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/bootstrap.min.js'); ?>"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
    feather.replace()
    </script>
</body>
</html>
