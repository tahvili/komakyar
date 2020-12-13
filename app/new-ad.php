<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/appAction/userCheck.php');
    $pageTitle = "ثبت آگهی جدید";
    get_header($pageTitle);
    require_once('../includes/actions/appAction/newAd.php');

?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="page p-0 mb-4">
                <img class="w-100" src="../assets/img/ads-1300X130.jpg" alt="">
            </div>

            <div class="page">
                <div class="page-head">
                    <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                </div>
                <div class="page-content">
                    <p>لطفا اطلاعات مربوط به آگهی کسب و کار خود را با دقت در فرم زیر وارد کنید.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="newAd[bussinesName]" class="form-control"
                                placeholder="نام کسب و کار *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="newAd[adTitle]" class="form-control" placeholder="عنوان آگهی *">
                        </div>
                        <div class="form-group">
                            <textarea name="newAd[adText]" class="form-control" rows="4"
                                placeholder="متن آگهی *"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="newAd[adPhone]" class="form-control" placeholder="شماره تلفن *">
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-lg" required name="newAd[adCategory]">
                                <option value="" selected disabled>دسته بندی مورد نظر را انتخاب کنید...</option>
                                <option value="آرایش و زیبایی">آرایش و زیبایی</option>
                                <option value="آموزش">آموزش</option>
                                <option value="اتومبیل">اتومبیل</option>
                                <option value="بیمه و وام">بیمه و وام</option>
                                <option value="پزشکی و سلامت">پزشکی و سلامت</option>
                                <option value="حسابداری">حسابداری</option>
                                <option value="حمل و نقل">حمل و نقل</option>
                                <option value="خدمات آی تی">خدمات آی تی</option>
                                <option value="خدمات خانه و ساختمان">خدمات خانه و ساختمان</option>
                                <option value="خدمات مسافرتی">خدمات مسافرتی</option>
                                <option value="خدمات مهاجرتی و حقوقی">خدمات مهاجرتی و حقوقی</option>
                                <option value="رستوران و کیترینگ">رستوران و کیترینگ</option>
                                <option value="سوپرمارکت">سوپرمارکت</option>
                                <option value="شیرینی و خشکبار">شیرینی و خشکبار</option>
                                <option value="صرافی و خدمات ارزی">صرافی و خدمات ارزی</option>
                                <option value="عکس و فیلم و موسیقی">عکس و فیلم و موسیقی</option>
                                <option value="لباس و زیورآلات">لباس و زیورآلات</option>
                                <option value="لوازم منزل">لوازم منزل</option>
                                <option value="مشاور املاک">مشاور املاک</option>
                                <option value="مواد غذایی">مواد غذایی</option>
                                <option value="سایر مشاغل">سایر مشاغل</option>
                            </select>
                        </div>


                        <div class="form-row d-ltr">
                            <div class="form-group col-md-6">
                                <input type="hidden" name="country" id="countryId" value="CA">
                                <select name="state" class="form-control form-control-lg states order-alpha"
                                    id="stateId">
                                    <option value="">Select Province</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="city" class="cities order-alpha form-control form-control-lg" id="cityId">
                                    <option value="">Select City</option>
                                </select>
                            </div>
                            <script src="//geodata.solutions/includes/statecity.js"></script>
                        </div>
                        

                        <div class="alert alert-info border-radius-komakyar" role="alert">
                            <b class="mb-3 d-block">آگهی خود را متمایز از دیگران کنید!</b>
                            دوست عزیز فیلد های زیر اختیاری میباشد ولی در صورت تکمیل اطلاعات زیر، آگهی شما متمایز تر از
                            آگهی دیگران خواهد بود و کسب و کار شما بهتر دیده خواهد شد.
                        </div>

                        <div class="form-group">
                            <input type="text" name="newAd[adAddress]" class="form-control" placeholder="آدرس">
                        </div>
                        <div class="form-group">
                            <input type="text" name="newAd[postcode]" class="form-control" placeholder="کد پستی">
                        </div>
                        <div class="form-group">
                            <input type="text" name="newAd[adEmail]" class="form-control" placeholder="آدرس ایمیل">
                        </div>
                        <div class="form-group">
                            <input type="text" name="newAd[adWebsite]" class="form-control" placeholder="آدرس وبسایت">
                        </div>
                        <div class="form-group">
                            <input type="text" name="newAd[adFacebook]" class="form-control" placeholder="فیسبوک">
                        </div>
                        <div class="form-group">
                            <input type="text" name="newAd[adInstagram]" class="form-control" placeholder="اینستاگرام">
                        </div>
                        <div class="form-group">
                            <input type="text" name="newAd[adTelegram]" class="form-control" placeholder="تلگرام">
                        </div>

                        <div class="form-group text-left">
                            <button type="submit" name="submit" class="btn btn-komakyar">ثبت اطلاعات</button>
                        </div>
                    </form>
                    <?php
                if(isset($_POST['submit'])){
                    $newAd = $_POST['newAd'];
                    newAd($newAd['bussinesName'],$newAd['adTitle'],$newAd['adText'],$newAd['adPhone'],$newAd['adCategory'],$_POST['state'],$_POST['city'],$newAd['adAddress'],$newAd['postcode'],$newAd['adEmail'],$newAd['adWebsite'],$newAd['adFacebook'],$newAd['adInstagram'],$newAd['adTelegram']);
                }
            ?>
                </div>
            </div>
            <div class="page p-0 mt-4">
                <img class="w-100" src="../assets/img/ads-1300X130.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>