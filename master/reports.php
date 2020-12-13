<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterReports.php');
    $pageTitle = "گزارشات";
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

                <canvas id="doughnut-chart"></canvas>


<script>
new Chart(document.getElementById("doughnut-chart"), {
    type: 'pie',
    data: {
      labels: ["British Columbia","Manitoba","New Brunswick","Newfoundland and Labrador","Northwest Territories","Nova Scotia","Ontario","Prince Edward Island","Quebec","Saskatchewan","Nunavut","Yukon"],
      
      datasets: [
        {
          backgroundColor: ["#ff9ff3","#00d2d3","#feca57","#54a0ff","#ff6b6b","#5f27cd","#48dbfb" ,"#c8d6e5","#1dd1a1","#576574","#01a3a4","#222f3e","#341f97","#ee5253"],
          data:<?php reportProvenceAds(); ?>,


        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'نمودار تعداد اگهی ها به تفکیک استان ها',
        fontFamily: 'komakyar',
        fontSize: '15',

      }
    }
});
</script>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>