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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-35493848-6', 'dex.tw');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
<!--
<?php

  if ($_POST['name'] != '' && file_exists('no')) {

    //流水號
    $file = fopen("no", "r");
    $no = fgets($file);
    fclose($file);

    if ($no == "")
      $no = 10;
    $no++;

    $file = fopen("no", "w+");
    fwrite($file,$no);
    fclose($file);

    $no = 'WW0'.$no;


    // 結帳
    $money = $_POST['product-1']*70 + $_POST['product-2']*90 + $_POST['product-3']*90 + $_POST['product-4']*120 + $_POST['product-5']*120 + $_POST['product-6']*150 + $_POST['product-7']*180 + $_POST['product-8']*180 + $_POST['product-9']*200 + $_POST['product-10']*230 + $_POST['product-11']*250 + $_POST['product-12']*350 + $_POST['product-13']*370 + $_POST['product-14']*450;
    if ($_POST['recipient-school'] == '台灣科技大學')
      $money += 30;
    else
      $money += 40;

    // 準備 email
    $header = "Content-type: text/html; charset=UTF-8\nMIME-Version: 1.0\nContent-Transfer-Encoding: base64\n";
    $subject = "[花顏巧語] 訂購確認信";
    $subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
    $message = "親愛的 ".$_POST['name']."，您好！";
    $message = $message."<p>感謝您參加由台灣科技大學電資學士班系學會協辦的「花顏巧語 2013」巧克力傳情活動，以下是您的訂購明細，請在確認無誤後，於 10/7 ~ 10/21 週一至週五中午 12:00 - 傍晚 6:30 間，持本郵件 (或記下您的訂單編號 ".$no.") 親臨台科大郵局前的「花顏巧語」攤位現金繳納 NT$".$money."。</p><p>若您不克前來，我們也提供轉帳付款管道，請直接回覆此郵件聯絡客服！</p><p>提醒您，請在確認資料無誤後再行付款，若有錯誤請重新填寫、並請勿繳款！任何疑問歡迎至我們的 FB 專頁詢問。</p><p>付款截止日期：10/21 晚上六點。所有巧克力皆會在 12/31 前發送完畢。</p>";
    $message = $message.'<table border="0">';
    $message = $message."<tr><td valign=\"top\"><b>訂單編號：　</b></td><td>".$no."</td></tr>";
    $message = $message."<tr><td valign=\"top\"><b>您的電話：　</b></td><td>".$_POST['phone']."</td></tr>";
    $message = $message."<tr><td valign=\"top\"><b>您的班級：　</b></td><td>".$_POST['class']."</td></tr>";
    $message = $message."<tr><td valign=\"top\"><b>您訂購以下商品：　</b></td><td>";
    if ($_POST['product-1'] > 0)
      $message = $message."訊息巧克力 ×".$_POST['product-1']."<br>";
    if ($_POST['product-2'] > 0)
      $message = $message."冬季戀歌 ×".$_POST['product-2']."<br>";
    if ($_POST['product-3'] > 0)
      $message = $message."快樂旅行家 ×".$_POST['product-3']."<br>";
    if ($_POST['product-4'] > 0)
      $message = $message."幸福寶貝熊 ×".$_POST['product-4']."<br>";
    if ($_POST['product-5'] > 0)
      $message = $message."環遊聖誕 ×".$_POST['product-5']."<br>";
    if ($_POST['product-6'] > 0)
      $message = $message."敞開心扉 ×".$_POST['product-6']."<br>";
    if ($_POST['product-7'] > 0)
      $message = $message."幸福愛戀塔 ×".$_POST['product-7']."<br>";
    if ($_POST['product-8'] > 0)
      $message = $message."寶貝熊禮盒 ×".$_POST['product-8']."<br>";
    if ($_POST['product-9'] > 0)
      $message = $message."72% 烘焙巧克力麻布袋 ×".$_POST['product-9']."<br>";
    if ($_POST['product-10'] > 0)
      $message = $message."聖誕傳情 ×".$_POST['product-10']."<br>";
    if ($_POST['product-11'] > 0)
      $message = $message."甜心熊禮盒 ×".$_POST['product-11']."<br>";
    if ($_POST['product-12'] > 0)
      $message = $message."草莓守護熊 ×".$_POST['product-12']."<br>";
    if ($_POST['product-12'] > 0)
      $message = $message."我的祝福 ×".$_POST['product-13']."<br>";
    if ($_POST['product-12'] > 0)
      $message = $message."滿滿的愛 ×".$_POST['product-14']."<br>";

    $message = $message."</td></tr>";
    $message = $message."<tr><td valign=\"top\"><b>要送給：　</b></td><td>".$_POST['recipient-school'].$_POST['recipient-department']." 的 ".$_POST['recipient-name']."</td></tr>";
    if ($_POST['recipient-grade'] == "")
      $_POST['recipient-grade'] = "不知道";
    $message = $message."<tr><td valign=\"top\"><b>幸福的她／他，年級是：　</b></td><td>".$_POST['recipient-grade']."</td></tr>";
    if ($_POST['recipient-phone'] == "")
      $_POST['recipient-phone'] = "不知道";
    $message = $message."<tr><td valign=\"top\"><b>聯絡電話是：　</b></td><td>".$_POST['recipient-phone']."</td></tr>";
    if ($_POST['recipient-dorm'] == "")
      $_POST['recipient-dorm'] = "不知道";
    $message = $message."<tr><td valign=\"top\"><b>住在：　</b></td><td>".$_POST['recipient-dorm']."</td></tr>";
    if($_POST['message'] != '') {
      $t = ereg_replace("\n", "<br>", $_POST['message']);
      $message = $message."<tr><td valign=\"top\"><b>我們會幫您附上一張卡片，上面寫：　</b></td><td>".$t."</td></tr>";
    }


    $message = $message."<tr><td><b>噢對，這樣總共是：　</b></td><td>NT$".$money."</td></tr>";

    $message = $message.'</table>';
    $message = $message.'<p>！再次提醒您，親臨攤位繳款時，記得攜帶此郵件，或記下您的訂單號碼 ('.$no.')，以便核對資料！</p>';
    $message = $message."<br>＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
＝　　　　　　　　　　　　　　抽　獎　卷　　　　　　　　　　　　　　＝<br>
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
<br>
恭喜您將可以獲得 花顏巧語 × 神魔之塔 活動抽獎資格！<br>
<br>
只要您在 10/21 晚上六點前按讚我們的<a href=\"https://www.facebook.com/FlowerFaceChocolateWords\" target=\"_blank\">粉絲專頁</a>、並在動態時報<br>公開分享<a href=\"https://www.facebook.com/FlowerFaceChocolateWords\" target=\"_blank\">此圖</a>，就有機會贏得神魔之塔魔法石 6 顆！<br>
<br>
滿滿的魔法石等著你喔~<br>
　　　　　　　　　　　　　　　　　　　　　　　　　　　　 ,-------.  <br>
※本卷持有者未繳費、按讚分享，或未蓋活動章，視同無效。　.\" ,-----. :<br>
活動辦法以<a href=\"https://www.facebook.com/FlowerFaceChocolateWords/app_205174506179089\" target=\"_blank\">粉絲專頁</a>公佈為準。　　　　　　　　　　　　　 | ( 抽獎章 ) |<br>
　　　　　　　　　　　　　　　　　　　　　　　　　　　 . `------' ,<br>
　　　　　　　　　　　　　　　　　　　　　　　　　　　　 `--------' <br>
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>";


    $message = $message.'<p><br><br>社團法人中華民國校園社團發展協會 與 電資學士班系學會 謝謝您</p>';
    //$message = ereg_replace("\n", "</td></tr><tr><td></td><td>", $message);

    $message = rtrim(chunk_split(base64_encode($message)));

    $header = $header."From: ericgod7788@gmail.com";

    //寄信吧
    mail($_POST['email'], $subject, $message, $header);

    //我也要
    mail('b10132023@mail.ntust.edu.tw', $subject, $message, $header);

    //寫進表單
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://docs.google.com/forms/d/1Nhj03zmODNI6KbW3lJKD008vbYPYWljTD49O39L8t8s/formResponse");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( array(
      "entry.1066297702" => $no,
      "entry.1018475685" => $_POST['name'],
      "entry.1941561794" => $_POST['email'],
      "entry.1581684100" => $_POST['phone'],
      "entry.1318035240" => $_POST['class'],
      "entry.118184662" => $_POST['recipient-name'],
      "entry.228049794" => $_POST['recipient-school'],
      "entry.1445623684" => $_POST['recipient-department'],
      "entry.237284313" => $_POST['recipient-grade'],
      "entry.1898389999" => $_POST['recipient-phone'],
      "entry.937518842" => $_POST['recipient-dorm'],
      "entry.542135735" => $_POST['product-1'],
      "entry.257418552" => $_POST['product-2'],
      "entry.1524029615" => $_POST['product-3'],
      "entry.1068504461" => $_POST['product-4'],
      "entry.826455496" => $_POST['product-5'],
      "entry.440679750" => $_POST['product-6'],
      "entry.2066500051" => $_POST['product-7'],
      "entry.310943758" => $_POST['product-8'],
      "entry.357660496" => $_POST['product-9'],
      "entry.1067708279" => $_POST['product-10'],
      "entry.1590256053" => $_POST['product-11'],
      "entry.256800263" => $_POST['product-12'],
      "entry.1046620618" => $_POST['product-13'],
      "entry.1436218940" => $_POST['product-14'],
      "entry.356257608" => $_POST['message'],
      "entry.957291139" => $money
      ) ));
    $post_result = curl_exec($ch);
    curl_close($ch);


  } else {
    $error = 1;
  }

?>
-->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
          <div class="page-header">
            <h1><?php
if ($error == 1) {
  echo "發生錯誤，請按 F5 重試。或上 FB 專頁詢問。";
} else {
  echo "成功，請進信箱收垃圾信。";
}
            ?></h1>
          </div>
          <p>訂單編號：<?php echo $no ?></p>
          <p><?php echo $_POST['email'] ?></p>

      </div>
    </div>




    <div id="footer">
      <div class="container">
        <p>　<br>花顏巧語 2013．巧克力傳情 ╳ 電影＋魔法石<br>主辦單位／社團法人中華民國校園社團發展協會　協辦單位／台灣科技大學電資學士班系學會</p>
        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FFlowerFaceChocolateWords&amp;width=450&amp;height=80&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;send=true&amp;appId=132913846761101" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
      </div>
    </div>
  </body>
</html>
