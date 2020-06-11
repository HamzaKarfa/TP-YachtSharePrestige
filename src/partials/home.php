


    <?php
       
        if (isset ($_GET['product'])){
            include "src/page/product-page.php";
        }else if(isset ($_GET['entry'])){
            include "src/page/main.php";
        }else{
            include "src/page/landing-page.php";
        }
    ?>






