<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    $pageTitle = "نمایش کاربر";
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
            <div class="page mb-4">
                <div class="page-head row">
                    <div class="page-head-title col-lg-7 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-5 col-sm-12 text-left">

                        <div class="btn-group d-ltr">
                            <a href="users.php" class="btn btn-komakyar-sm">بازگشت</a>

                            <a href="edit-user.php?editUserId=<?php echo $_GET['userId'];?>"
                                class="btn btn-warning btn-border-radius">ویرایش کاربر</a>

                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <ul class="list-group p-0">
                        <li class="list-group-item">
                            <b>وضعیت حساب کاربری:</b>
                            <span>فعال</span>
                        </li>
                        <li class="list-group-item">
                            <b>تاریخ ثبت نام:</b>
                            <span>2020-09-25 16:07:33 </span>
                        </li>
                        <li class="list-group-item">
                            <b>نام:</b>
                            <span>محمد</span>
                        </li>
                        <li class="list-group-item">
                            <b>نام خانوادگی:</b>
                            <span>جوان صفاری</span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس ایمیل:</b>
                            <span>mohammad@gmail.com</span>
                        </li>
                        <li class="list-group-item">
                            <b>شماره تماس:</b>
                            <span>+1 466 2156</span>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="page">
                <div class="page-head row">
                    <div class="page-head-title col-lg-8 col-sm-12">
                        <h2 class="h1 lh-inherit">آگهی های کاربر</h2>
                    </div>
                    <div class="page-head-btn col-lg-4 col-sm-12 text-left">
                    </div>
                </div>
                <div class="page-content">

                    <input type="text" id="myInput" onkeyup="myTable()"
                        class="form-control border-radius-komakyar-table mb-2" placeholder="جستجو کنید ...">

                    <table id="myTable"
                        class="table table-bordered text-center border-radius-komakyar-table table-hover">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">شناسه آگهی</th>
                                <th scope="col">عنوان آگهی</th>
                                <th scope="col">تاریخ ثبت</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><span class="badge btn-komakyar-sm-b-radius badge-warning p-2">در حال بررسی</span>
                                </td>
                                <td><a href="show-ad.php?adCode=&userId=<?php echo $_GET['userId']; ?>"
                                        class="btn btn-komakyar-sm btn-sm">نمایش آگهی</a></td>
                            </tr>
                        </tbody>
                    </table>

                    <script>
                        function myTable() {
                            var input, filter, table, tr, td, i, txtValue;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("myTable");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[0];
                                if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
                    </script>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>