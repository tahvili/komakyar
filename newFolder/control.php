<?php $emailForGravatar =  getUserInformation("email"); echo gravatar($emailForGravatar); ?>
<div class="profile-username"><?php echo getUserInformation("name") . " ". getUserInformation("lastName");?>
</div>

<a href='./panel'>داشبورد</a><br>
<a href='./ads'>آگهی ها</a><br>
<a href='./users'>کاربران</a><br>
<a href='./inbox'>صندوق پیام</a><br>
<a href='./logs'>لاگ ها</a><br>
<a href='./settings'>تنظیمات</a><br><br>

<form class="profile-change" action="" method="post">
    <input type="hidden" name="destroySession" value="1">
    <button name="submitUserLogin" type="submit">خروج</button>
</form>
<?php 
                $destroySession = filter_input(INPUT_POST, 'destroySession');
                if ($destroySession == 1) {
                    session_destroy();
                    header('Location: ../../app/login.php?logout=success');

                }    
            ?>