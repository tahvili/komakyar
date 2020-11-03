<?php ?>
<div class="page-head">
    <div class="user-img">        
        <img src="<?php echo "http://www.gravatar.com/avatar/" . md5($_SESSION["userEmail"]) ?>">
    </div>
    <div class="text-center"><?php echo $_SESSION["userEmail"];?></div>
</div>

<div class="page-content">
    <ul class="nav justify-content-center p-0">
        <li class="nav-item">
            <a class="nav-link" href="index.php">آگهی های من</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="new-ad.php">ثبت آگهی جدید</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../contact.php">تبلیغات ویژه کسب و کار شما</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="settings.php">تغیر کلمه عبور</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">خروج</a>
        </li>
    </ul>
</div>