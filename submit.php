<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>花顏巧語 2013．線上訂購</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="css/select2.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<pre>
<?php

  if ($_POST['name'] != '') {
    // 結帳
    $money = $_POST['product-1']*70 + $_POST['product-2']*90 + $_POST['product-3']*90 + $_POST['product-4']*120 + $_POST['product-5']*120 + $_POST['product-6']*150 + $_POST['product-7']*180 + $_POST['product-8']*180 + $_POST['product-9']*200 + $_POST['product-10']*230 + $_POST['product-11']*250 + $_POST['product-12']*350;
    if ($_POST['recipient-school'] == '台灣科技大學')
      $money += 30;
    else
      $money += 40;
    // 準備 email
    $header = "Content-type: text/html; charset=UTF-8\n";
    $subject = "[花顏巧語] 訂購確認信";
    $subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
    $message = "<p>親愛的 ".$_POST['name']."，您好！</p>";
    $message = "<p>感謝您參加由台灣科技大學系學會協辦的「花顏巧語 2013」巧克力傳情活動，以下是您的訂購明細，請在確認無誤後，憑此郵件於 10/7 ~ 10/21 週一至週五中午 12:00 - 傍晚 6:30 間，親臨台科大郵局前的「花顏巧語」攤位現金繳納 NT$".$money."。</p>若您不克前來，也可以直接將應付金額直接轉帳至 XXXX，並於轉帳後直接回覆此郵件，告知 1. 轉出帳戶末五碼 2. 轉帳時間 3. 轉帳金額，我們在收到回覆後將收據寄給您。</p><p>注意：付款完成後才算完成定訂購！請在確認資料無誤後再行付款，若有錯誤請重新填寫、並請勿繳款！任何問題歡迎至我們的 FB 專頁詢問。</p><p>付款截止日期：10/21 晚上六點。所有巧克力皆會在 12/9 前發送完畢。</p>";
    $message = $message.'<table border="0">';
    $message = $message."<tr><td><b>您的電話　</b></td><td>".$_POST['phone']."</td></tr>";
    $message = $message."<tr><td><b>您的班級　</b></td><td>".$_POST['class']."</td></tr>";
    $message = $message."<tr><td><b>您的巧克力　</b></td><td>";
    if ($_POST['product-1'] > 0)
      $message = $message."訊息巧克力 x".$_POST['product-1']."<br>";
    if ($_POST['product-2'] > 0)
      $message = $message."冬季戀歌 x".$_POST['product-2']."<br>";
    if ($_POST['product-3'] > 0)
      $message = $message."快樂旅行家 x".$_POST['product-3']."<br>";
    if ($_POST['product-4'] > 0)
      $message = $message."幸福寶貝熊 x".$_POST['product-4']."<br>";
    if ($_POST['product-5'] > 0)
      $message = $message."環遊聖誕 x".$_POST['product-5']."<br>";
    if ($_POST['product-6'] > 0)
      $message = $message."敞開心扉 x".$_POST['product-6']."<br>";
    if ($_POST['product-7'] > 0)
      $message = $message."幸福愛戀塔 x".$_POST['product-7']."<br>";
    if ($_POST['product-8'] > 0)
      $message = $message."寶貝熊禮盒 x".$_POST['product-8']."<br>";
    if ($_POST['product-9'] > 0)
      $message = $message."72% 烘焙巧克力麻布袋 x".$_POST['product-9']."<br>";
    if ($_POST['product-10'] > 0)
      $message = $message."聖誕傳情 x".$_POST['product-10']."<br>";
    if ($_POST['product-11'] > 0)
      $message = $message."甜心熊禮盒 x".$_POST['product-11']."<br>";
    if ($_POST['product-12'] > 0)
      $message = $message."草莓守護熊 x".$_POST['product-12']."<br>";

    $message = $message."</td></tr>";
    $message = $message."<tr><td><b>，送給　</b></td><td>".$_POST['recipient-school'].$_POST['recipient-department']." 的 ".$_POST['recipient-name']."</td></tr>";
    $message = $message."<tr><td><b>幸福的她／他，年級是</b></td><td>".$_POST['recipient-grade'].$_POST['recipient-department']." 的 ".$_POST['recipient-name']."</td></tr>";
    $message = $message."<tr><td><b>聯絡電話是　</b></td><td>".$_POST['recipient-phone']."</td></tr>";
    $message = $message."<tr><td><b>住在　</b></td><td>".$_POST['recipient-dorm']."</td></tr>";

    $message = $message.'</table>';
    $message = ereg_replace("\n", "</td></tr><tr><td></td><td>", $message);

    $header = $header."From: ericgod7788@gmail.com";

    //寄信吧
    mail($_POST['email'], $subject, $message, $header);
  } else {
    echo "錯誤，請重試。或上 FB 專頁詢問。";
  }

?>
	</pre>
  </body>
</html>
