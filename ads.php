<?php

    require_once('includes/functions.php');
    require_once('includes/actions/generalAction/showAds.php');
    $pageTitle = "تبلیغات استان" ;
    get_header($pageTitle);
   
?>

<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="page-head">
                <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> استان انتخابی شما : </span>
                <span><?php showLocation(@$_GET['province']);?></span>
<br>
                <span><i class="fas fa-tags" aria-hidden="true"></i> دسته بندی انتخابی شما : </span>
                <span><?php if (!isset($_GET['adCategory'])){
                    echo "تمامی دسته بندی ها";
                }else {
                    echo $_GET['adCategory'];
                };?></span>
            </div>
            
            <div class="page">
                <div class="text-center mb-3">
                    دسته بندی مشاغل مورد نظر خود را انتخاب کنید
                </div>
                <ul class="ads-category">
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>آرایش و زیبایی">آرایش و زیبایی</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>آموزش">آموزش</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>اتومبیل">اتومبیل</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>بیمه و وام">بیمه و وام</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>پزشکی و سلامت">پزشکی و سلامت</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>حسابداری">حسابداری</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>حمل و نقل">حمل و نقل</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>خدمات آی تی">خدمات آی تی</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>خدمات خانه و ساختمان">خدمات خانه و ساختمان</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>خدمات مسافرتی">خدمات مسافرتی</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>خدمات مهاجرتی و حقوقی">خدمات مهاجرتی و حقوقی</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>رستوران و کیترینگ">رستوران و کیترینگ</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>سوپرمارکت">سوپرمارکت</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>شیرینی و خشکبار">شیرینی و خشکبار</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>صرافی و خدمات ارزی">صرافی و خدمات ارزی</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>عکس و فیلم و موسیقی">عکس و فیلم و موسیقی</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>لباس و زیورآلات">لباس و زیورآلات</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>لوازم منزل">لوازم منزل</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>مشاور املاک">مشاور املاک</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>مواد غذایی">مواد غذایی</a></li>
                    <li><a href="ads?province=<?php echo @$_GET['province'] . "&adCategory=" ;?>سایر مشاغل">سایر مشاغل</a></li>
                </ul>
                
            </div>

        </div>
        
    </div>

    <div class="row">
        <?php  ShowAds(@$_GET['province'],@$_GET['adCategory']);?>
    </div>
</div>
</div>

<?php 
    get_footer();
?>