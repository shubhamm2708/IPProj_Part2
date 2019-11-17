<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8b0e50bfe8.js" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

    <!--Custom Style-->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!--Admin Style-->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Add User</title>
</head>
<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>


    <!--Admin Page COntent Wrapper-->
    <div class="admin-wrapper">
        <!--Left Sidebar-->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!--// Left Sidebar-->

        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add User</h2>

                <form action="create.php" method="post">
                    <div>
                            <label>Username</label>
                            <input type="text" name="username" class="text-input">
                    </div>
                    <div>
                            <label>E-Mail</label>
                            <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                            <label>Password</label>
                            <input type="password" name="password" class="text-input">
                    </div>
                    <div>
                            <label>Confirm Password</label>
                            <input type="password" name="username" class="text-input">
                    </div>
                    
                    <div>
                            <label>
                            <input type="checkbox" name="admin">
                            Admin
                            </label>
                    </div>                   

                    <div>
                        <button type="submit" name="create-admin" class="btn btn-big">
                            Add User
                        </button>
                    </div>
                </form>

            </div>
        </div>
        
        <!--//Admin COntent-->

    </div>
    <!--End of Page Wrapper-->



    <!-- JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

    <!--CKEDITOR-->
    <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>

    <!--Custom Script-->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>