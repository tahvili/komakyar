<?php

    require_once('includes/functions.php');
    require_once('includes/actions/generalAction/submitContactForm.php');

    $pageTitle = "تماس با ما";
    get_header($pageTitle);
    
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page">
                <div class="page-head">
                    <h1><?php echo $pageTitle; ?></h1>
                </div>
                <div class="page-content">
                    <p>پیام شما می‌تواند شروع یک مکالمۀ سازنده باشد</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="SubmitContact[fullName]" class="form-control"
                                placeholder="نام و نام خانواگی *">
                        </div>
                        <div class="form-group">
                            <input type="email" name="SubmitContact[email]" class="form-control"
                                placeholder="آدرس ایمیل *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="SubmitContact[phone]" class="form-control"
                                placeholder="شماره تماس *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="SubmitContact[website]" class="form-control"
                                placeholder="آدرس وبسایت">
                        </div>
                        <div class="form-group">
                            <input type="text" name="SubmitContact[subject]" class="form-control" placeholder="موضوع *">
                        </div>
                        <div class="form-group">
                            <textarea name="SubmitContact[message]" class="form-control" rows="5"
                                placeholder="متن پیام *"></textarea>
                        </div>
                        <div class="form-group text-left">
                            <button type="submit" name="submit" class="btn btn-komakyar">ارسال پیام</button>
                        </div>
                    </form>
                    <?php
                if(isset($_POST['submit'])){
                    $SubmitContact = $_POST['SubmitContact'];
                    submitContactForm($SubmitContact['fullName'],$SubmitContact['email'],$SubmitContact['phone'],$SubmitContact['website'],$SubmitContact['subject'],$SubmitContact['message']);
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