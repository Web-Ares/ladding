<?php
if (!empty($_GET)&&!empty($_GET['send_email'])){
    if ($_GET['send_email']=='true'){
        $send='
                <!--feedback__title-->
                <h2 class="feedback-title">אנו נחזור אליך בהקדם<br>פנייתך נשלחה בהצלחה</h2>
                <!--/feedback__title-->';
    }
    else{
        $send='
                <!--feedback__title-->
                <h2 class="feedback-title">Try again later</h2>
                <!--/feedback__title-->';

    }
}

?>


<!DOCTYPE html>
<html lang="he" dir="rtl">
<meta charset="utf-8" />
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=1024">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<title>Title</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<div class="site">

            <!-- site__content -->
        <div class="site__content">

            <!--site__content__feedback-->
            <div class="site__content__feedback">

              <?php echo $send; ?>

            </div>
            <!--/site__content__feedback-->
        </div>
        <!-- /site__content -->

</div>
<!--site__wrap-->

</body>
</html>