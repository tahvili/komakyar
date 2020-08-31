<?php
/**
 * The search box for Komakyar.
 *
 * This is the template that displays the search box for Komakyar
 * @package Komakyar
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="search-area">
<form class="search" action="" method="post">
    <div class="shadow-box">

    <input type="text" placeholder="جستجو کنید..." required>

    <select name="location" id="location">
    <option value="volvo">Toronto/GTA</option>
    <option value="saab">Saab</option>
    <option value="mercedes">Mercedes</option>
    <option value="audi">Audi</option>
    </select>

    <select name="category" id="category">
    <option value="volvo">تمامی دسته بندی ها</option>
    <option value="saab">Saab</option>
    <option value="mercedes">Mercedes</option>
    <option value="audi">Audi</option>
    </select>

    </div>

    <button type="submit"><img src="../assets/img/search.svg" alt="Search"></button>
    
</form>
</div>