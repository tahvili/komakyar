<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    $pageTitle = "آگهی KM-1650526";
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
                    <div class="page-head-title"></div>
                    <div class=" col-lg-4 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-8 col-sm-12 text-left">
                        <div class="btn-group d-ltr">
                            <?php
                            if(isset($_GET['userId'])) {
                                echo "<a href='show-user.php?userId=". $_GET['userId'] . "' class='btn btn-komakyar-sm'>بازگشت</a>";
                            }else {
                                {
                                echo "<a href='ads.php' class='btn btn-komakyar-sm'>بازگشت</a>";
                            }
                            }
                        ?>
                            <a href="#" class="btn btn-info btn-komakyar-sm-b-radius">نمایش کاربر</a>
                            <a href="#" class="btn btn-danger btn-komakyar-sm-b-radius">رد آگهی</a>
                            <a href="#" class="btn btn-success btn-komakyar-sm-b-radius">تائید آگهی</a>

                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <ul class="list-group p-0">
                        <li class="list-group-item">
                            <b>وضعیت آگهی:</b>
                            <span>در حال بررسی</span>
                        </li>
                        <li class="list-group-item">
                            <b>تاریخ ثبت:</b>
                            <span>2020-09-25 16:07:33 </span>
                        </li>
                        <li class="list-group-item">
                            <b>کاربر ثبت کننده:</b>
                            <span>mohamamd@gmail.com</span>
                        </li>
                        <li class="list-group-item">
                            <b>نام کسب و کار: </b>
                            <span>کیولاپر</span>
                        </li>
                        <li class="list-group-item">
                            <b>عنوان آگهی:</b>
                            <span> طراحی سایت با قیمت مناسب</span>
                        </li>
                        <li class="list-group-item">
                            <b>متن آگهی: </b>
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
                        <li class="list-group-item">
                            <b>شماره تماس:</b>
                            <span>+1 466 2156</span>
                        </li>
                        <li class="list-group-item">
                            <b>استان- شهر:</b>
                            <span>Ontario - Toronto</span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس: </b>
                            <span>ریچمون هیل - پالازای ایرانیان</span>
                        </li>
                        <li class="list-group-item">
                            <b>کد پستی: </b>
                            <span>1Xl L27</span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس ایمیل:</b>
                            <span>info@kiuloper.com</span>
                        </li>
                        <li class="list-group-item">
                            <b>فیسبوک:</b>
                            <span>ثبت نشده</span>
                        </li>
                        <li class="list-group-item">
                            <b>اینستاگرام:</b>
                            <span>ثبت نشده</span>
                        </li>
                        <li class="list-group-item">
                            <b>تلگرام:</b>
                            <span>ثبت نشده</span>
                        </li>
                        <li class="list-group-item">
                            <b>نام قانونی:</b>
                            <span>ثبت نشده</span>
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