<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterAds.php');
    $pageTitle = "آگهی ها";
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
                    <div class="page-head-title col-lg-8 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-4 col-sm-12 text-left">
                    </div>
                </div>
                <div class="page-content">

                    <input type="text" id="myInput" onkeyup="myTable()" class="form-control border-radius-komakyar-table mb-2"
                        placeholder="جستجو کنید ...">

                    <table id="myTable" class="table table-bordered text-center border-radius-komakyar-table table-hover">
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
                        <?php masterAds(); ?>
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