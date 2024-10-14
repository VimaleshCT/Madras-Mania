<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madras Mania</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/mm.png">

    <!-- CSS Dependencies -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <!-- JS Dependencies -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        /* Custom styles for layout */
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        #main-wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .header {
            width: 100%;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .content-wrapper {
            display: flex;
            flex-grow: 1;
        }

        /* Sidebar styling */
        .menu-sidebar {
            width: 180px;
            background-color: #F39C12;
            padding-top: 50px;
            transition: all 0.3s ease;
            position: sticky;
            top: 0;
            height: 100vh;
            color: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .menu-sidebar.collapsed {
            width: 0;
            padding: 0;
            overflow: hidden;
        }

        .menu-sidebar .home-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-sidebar .home-nav li {
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
        }

        .menu-sidebar .home-nav li i {
            margin-right: 10px;
            min-width: 20px;
        }

        .menu-sidebar .home-nav li.active {
            background-color: #D35400;
        }

        .menu-sidebar .home-nav li a {
            color: white;
            text-decoration: none;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .menu-sidebar .home-nav li:hover {
            background-color: #E67E22;
        }

        .menu-sidebar .home-nav li:hover a {
            font-weight: bold;
        }

        .menu-sidebar.collapsed .home-nav li i {
            margin-right: 0;
        }

        .menu-sidebar.collapsed .home-nav li a {
            justify-content: center;
        }

        /* Main content */
        .main-content {
            flex-grow: 1;
            padding: 20px;
            transition: 0.3s ease;
        }

        .main-content.full-width {
            margin-left: 0;
            width: 100%;
        }

        /* Sidebar Toggle Button */
        .sidebar-toggle-btn {
            background-color: #e67e22;
            border: none;
            padding: 10px;
            cursor: pointer;
            color: white;
        }

        .logo-header {
            display: flex;
            justify-content: center;
            /* Centers horizontally */
            align-items: center;
            /* Centers vertically */
            height: 100px;
            /* Adjust height as needed */
        }

        /* Logo styling */
        .logo-header img {
            height: 70px;
            width: auto;
            margin-left: 40px;
        }

        @media (max-width: 768px) {

            /* For small devices, make the sidebar and content stack */
            .menu-sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .menu-sidebar.collapsed {
                height: 0;
                padding: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .main-content.full-width {
                width: 100%;
            }

            .sidebar-toggle-btn {
                position: absolute;
                top: 15px;
                left: 20px;
            }
        }

        @media (min-width: 769px) {
            .sidebar-toggle-btn {

                top: 15px;
                left: 240px;
            }
        }

        .dropdown-menu {
            left: auto;
            right: 0;
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        <!-- Header -->
        <header class="site-header mo-left header style-1 bg-white shadow-sm">
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix">
                    <div class="container-fluid d-flex justify-content-between align-items-center">
                        <!-- Left Section: Logo and Toggle Button -->
                        <div class="d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo-header mostion logo-dark">
                                <a href="<?php echo base_url(); ?>index"><img
                                        src="<?php echo base_url(); ?>assets/img/Madras Mania Logo.png" alt="Logo"></a>
                            </div>

                            <!-- Sidebar Toggle Button -->
                            <button class="sidebar-toggle-btn ms-3" id="sidebarToggle">
                                ☰
                            </button>
                        </div>

                        <!-- Right Section: Profile Info and Logout -->
                        <div class="extra-nav d-flex align-items-center">
                            <li class="nav-item dropdown header-profile">
                                <!-- Toggle Button for Dropdown -->
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="header-info text-end">
                                        <span>Hello, <strong>ADMIN</strong> <img
                                                src="<?php echo base_url(); ?>assets/img/icon/images.png" width="25"
                                                alt="Admin" class="ms-2 rounded-circle"
                                                style="align-items:center;"></span>

                                    </div>
                                </a>

                                <!-- Dropdown Menu -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item ai-icon">
                                        <i class="fas fa-user text-primary"></i>
                                        <span class="ms-2">Profile</span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>admin/adminlogin" class="dropdown-item ai-icon">
                                        <i class="fas fa-sign-out-alt text-danger"></i>
                                        <span class="ms-2">Logout</span>
                                    </a>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Sidebar and Main Content -->
        <div class="content-wrapper">
            <!-- Sidebar -->
            <nav class="menu-sidebar" id="sidebar">
                <div class="contact-box">
                    <ul class="home-nav">

                        <li class="nav-item "><a href="<?php echo base_url(); ?>admin/fooditems"><i
                                    class="fas fa-utensils"></i> FoodItems</a></li>
                        <li class="nav-item"><a href="<?php echo base_url(); ?>admin/buffet"><i
                                    class="fas fa-concierge-bell"></i> Buffet</a></li>
                        <li class="nav-item"><a href="<?php echo base_url(); ?>admin/todayspecial"><i
                                    class="fas fa-star"></i> Today's Special</a></li>
                        <li class="nav-item"><a href="<?php echo base_url(); ?>admin/category"><i
                                    class="fas fa-list-alt"></i> Category</a></li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/adminlogin" class="nav-link"><i
                                    class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="main-content" id="mainContent">
                <?php $this->load->view($viewpage); ?>
            </main>
        </div>

        <!-- Sidebar Toggle Script -->
        <script>
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const toggleButton = document.getElementById('sidebarToggle');

            toggleButton.addEventListener('click', function () {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('full-width');
            });
        </script>
    </div>
</body>

</html>