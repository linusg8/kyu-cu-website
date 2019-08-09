<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEMBERS</title>
    <!--RESET SCSS-->
    <link rel="stylesheet" href="css/reset.css">
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="admin/css/admin.css">
    <!--MEDIA QUERIES-->
    <!-- <link rel="stylesheet" href="css/mq..css"> -->
    <!--FONT AWESOME-->
    <script src="js/all.js"></script>
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }

        @media screen and (min-width: 768px) {

            .dropdown:hover .dropdown-menu,
            .btn-group:hover .dropdown-menu {
                display: block;
            }

            .dropdown-menu {
                margin-top: 0;
            }

            .dropdown-toggle {
                margin-bottom: 2px;
            }

            .navbar .dropdown-toggle,
            .nav-tabs .dropdown-toggle {
                margin-bottom: 0;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-sm text-white d-flex sticky-top p-0" style="background-color: #500d62;">
        <div id="sidebarCollapse" class="col-auto ">
            <i class="fas fa-bars"></i>
        </div>
        <!-- Links -->
        <ul class="navbar-nav ">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle text-white mr-2" href="#" id="notification" data-toggle="dropdown">

                    <span style="font-size: smaller; position: absolute; top: 0px ;right:45%; width: 20px; background-color: #73fb59;
                    border-radius: 200px; padding-left: 7px; color: #000000">8</span>
                    <i class="fas fa-bell"></i>
                </a>
                <div class="dropdown-menu" style="position:absolute; transform: translateX(-110px); ">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>


            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white mr-2" href="#" id="navbardrop" data-toggle="dropdown">
                    Felix
                </a>
                <div class="dropdown-menu" style="position:absolute; transform: translateX(-110px); ">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <main class="wrapper">
        <aside id="sidebar" class="">

            <ul class="list-unstyled components">
                <li>
                    <a href="#"><span><i class="fas fa-tachometer-alt"></i></span> DASHBOARD</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span><i
                                class="fas fa-newspaper"></i></span> POSTS</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">- Add Post</a>
                        </li>
                        <li>
                            <a href="#">- All Posts</a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span><i
                                class="fab fa-monero"></i></span> MINISTRIES</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">- Your Ministries</a>
                        </li>
                        <li>
                            <a href="#">- Add Sub-comm Members</a>
                        </li>
                        <li>
                            <a href="#">- All Members</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#"><i class="fas fa-user-cog"></i> SETTINGS</a>
                </li>

            </ul>


        </aside>
        <div class="content container-fluid">
            <!-- Admin DashBoad -->
            <div class="row mt-4">
                <div class="col-sm-6 col-md-4 mt-2">
                    <div class="card greenBgMid  text-light p-3">
                        <div class="d-flex">
                            <div class="d-inline "> <i class="fas fa-newspaper fa-5x"></i></div>
                            <div class="flex-grow-1 ">
                                <h5 class="text-center">Your Posts</h5>
                                <h1 class="text-center">8</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mt-2">
                    <div class="card greenBgMid  text-light p-3">
                        <div class="d-flex">
                            <div class="d-inline "> <i class="fab fa-monero fa-5x"></i></div>
                            <div class="flex-grow-1 ">
                                <h5 class="text-center">Your Ministries</h5>
                                <h1 class="text-center">2</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>







    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
    <!-- Side Navigation Scripts -->
    <script>

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        document.querySelector('.content').addEventListener('click', function () {
            document.getElementById('sidebar').classList.remove('active');

        })
        document.querySelector('.navbar-nav').addEventListener('click', function () {
            document.getElementById('sidebar').classList.remove('active');

        })



    </script>





</body>

</html>