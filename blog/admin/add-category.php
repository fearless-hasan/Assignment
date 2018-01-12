<?php

session_start();

if($_SESSION['id'] == null){
    header('Location: index.php');
}

require_once '../vendor/autoload.php';
use App\classes\Login;

if(isset($_GET['logout'])){
    Login::adminLogout();
}

$message = "";
if(isset($_POST['add_category'])){
    $message = Login::addCategory($_POST);
}
//    echo '<pre>';
//    print_r($_SESSION);
//    unset($_SESSION['name']);
//    print_r($_SESSION);
//    echo '</pre>';

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include_once 'includes/menu.php'; ?>
<div class="container" style="margin-top: 150px;">

    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-title m-auto" >
                    <p style="margin-top: 25px;"> <b><i>Add Category</i></b></p>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="category_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="category_description">

                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">

                                <input type="radio" name="status" value="published"> Published
                                <input type="radio" name="status" value="unpublished"> Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 m-auto">
                                <button type="submit" class="btn btn-outline-primary btn-block" name="add_category">Publish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if($message!="") { ?>
        <div class=" btn btn-success d-block w-50 m-auto">
            <h4 align="center">
                <?=$message; ?>
            </h4>
        </div>
    <?php } ?>
</div>

<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>