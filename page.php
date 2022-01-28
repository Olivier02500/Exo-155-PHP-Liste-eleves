<?php
require "header.php";
require "./index.php";


echo "<a href='./index.php'>back</a><br>";

if (isset($_GET['key'])) {

    foreach ($students as $key => $value) {?>
        <div class="float-right"><?php

        print_r($value[$key][2]);
        echo ' ';
        print_r($value[$key][3]);
        echo '<br>';?>
        </div><?php
    }
}
require "./footer.php";
