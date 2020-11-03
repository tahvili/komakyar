<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    $pageTitle = "نمایش پیام";
    get_header($pageTitle);
    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <div class="page user-panel">
                <?php require_once('../includes/sections/masterMenu.php'); ?>
            </div>
        </div>

        <div class="col-lg-9 col-sm-12">
            <div class="page">
                <div class="page-head row">
                    <div class="page-head-title col-lg-5 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-7 col-sm-12 text-left">
                    <a href="inbox.php" class="btn btn-komakyar-sm">بازگشت</a>

                    </div>
                </div>
                <div class="page-content">
                    <ul class="list-group p-0">
                        <li class="list-group-item">
                            <b>تاریخ ثبت:</b>
                            <span>2020-09-25 16:07:33 </span>
                        </li>
                        <li class="list-group-item">
                            <b>نام و نام خانوادگی: </b>
                            <span>محمد</span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس ایمیل:</b>
                            <span>info@mohammad.com</span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس وبسایت:</b>
                            <span>google.com</span>
                        </li>
                        <li class="list-group-item">
                            <b>موضوع:</b>
                            <span>تبلیغات</span>
                        </li>
                        <li class="list-group-item">
                            <b>متن پیام:</b>
                            <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می
                                طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و
                                فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری
                                موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                                دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                گیرد.</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>