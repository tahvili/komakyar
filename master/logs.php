<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    $pageTitle = "لاگ سیستم";
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
                        <th scope="col">شناسه</th>
                        <th scope="col">IP کاریر</th>
                        <th scope="col">نام کاربری</th>
                        <th scope="col">آدرس ایمیل</th>
                        <th scope="col">ساعت و تاریخ رخداد</th>
                        <th scope="col">مرورگر</th>
                        <th scope="col">جزئیات</th>

                    </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
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