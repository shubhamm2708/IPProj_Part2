<?php include("../../path.php")?>
<?php include(ROOT_PATH . "/app/controllers/topics.php") ?>

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

    <title>Admin Section - Manage Topics</title>
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
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Topics</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($topics as $key => $topic): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $topic['name']; ?></td>
                                <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                      
                       
                    </tbody>
                </table>
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