<?php
    require_once('../includes/functions.php');
    $pageTitle = "ورود به حساب کاربری";
    get_header($pageTitle);
    require_once('../includes/actions/masterAction/masterLogin.php');

    if(@$_GET['login'] == "required"){
        alert("برای دسترسی باید ابتدا وارد حساب کاربری خود شوید.", "warning");
    };
    if(isset($_SESSION["masterEmail"])){
        header('Location: index.php');
    };


    ?>

<div class="container">
    <div class="row">

        <div class="col-lg-12 col-sm-12">
            <div class="page">
                <div class="page-head row">
                    <div class="page-head-title col-lg-8 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-4 col-sm-12 text-left">
                    </div>
                </div>
                <div class="page-content">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="masterLogin[email]" class="form-control" placeholder="آدرس ایمیل">
                        </div>
                        <div class="form-group">
                            <input type="text" name="masterLogin[password]" class="form-control" placeholder="رمز عبور">
                        </div>

                        <div class="form-group text-left">
                            <button type="submit" name="submit" class="btn btn-komakyar">ورود</button>
                        </div>
                    </form>

                    <?php
                if(isset($_POST['submit'])){
                    $masterLogin = $_POST['masterLogin'];
                    masterLogin($masterLogin['email'],$masterLogin['password']);
                }
            ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>