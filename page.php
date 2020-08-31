<?php 
require 'includes/functions.php';
get_header(''); ?>

<div class="row no-padding">
<div class="col-md-2"></div>
<div class="col-md-8">

    <div class="row"><?php searchbox(); ?></div>
    <?php category(); ?>
    <?php newsletter(); ?>

</div>
<div class="col-md-2"></div>
</div>

<?php get_footer(); ?>