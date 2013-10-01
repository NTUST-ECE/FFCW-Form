<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>花顏巧語 2013．線上訂購</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.min.css" rel="stylesheet" media="screen">
    <link href="css/select2.css" rel="stylesheet">
    <link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrap">

       <!-- Begin page content -->
      <div class="container">
          <div class="page-header">
            <h1>花顏巧語 2013．線上訂購單</h1>
          </div>
        <p class="lead"></p>

        <p>您不需要離開家門一步，即可在線上完成訂購的過程，<br>只要輕鬆的動動手指頭，輸入一些資料，<br>傳情就會變得無比自在！</p>

        <form role="form" action="submit.php" method="post">
          <ul class="nav nav-tabs" id="form-tab">
            <li class="active"><a href="#form-you" data-toggle="tab">STEP I：關於您</a></li>
            <li><div style="display: inline-block; padding: 10px 15px;"> → </div></li>
            <li><a href="#form-recipient" data-toggle="tab">STEP II：關於他／她</a></li>
            <li><div style="display: inline-block; padding: 10px 15px;"> → </div></li>
            <li><a href="#form-product" data-toggle="tab">STEP III：選擇禮物</a></li>
          </ul>

          <div class="tab-content">

            <div class="tab-pane active form-horizontal" id="form-you">
              <h2>STEP I：關於您</h2>
              <div class="form-group group-name">
                <label class="col-lg-4 control-label" for="name">您的姓名</label>
                <div class="col-lg-6">
                  <input name="name" class="form-control" id="name" onBlur="validate_required('#name', '.group-name')">
                </div>
              </div>
              <div class="form-group group-email">
                <label class="col-lg-4 control-label" for="email">Email</label>
                <div class="col-lg-6">
                  <input name="email" type="email" class="form-control" id="email" onBlur="validate_email('#email', '.group-email')">
                </div>
              </div>
              <div class="form-group group-phone">
                <label class="col-lg-4 control-label" for="phone">聯絡電話</label>
                <div class="col-lg-6">
                  <input name="phone" type="tel" class="form-control" id="phone" placeholder="">
                </div>
              </div>
              <div class="form-group group-class">
                <label class="col-lg-4 control-label" for="class">學校、系別、年級</label>
                <div class="col-lg-6">
                  <input name="class" class="form-control" id="class" placeholder="">
                </div>
              </div>
              <hr>
              <a style="float: right;" class="btn btn-default btn-lg to-step-two">下一步 →</a>
            </div>

            <div class="tab-pane form-horizontal" id="form-recipient">
              <h2>STEP II：關於他／她</h2>
              <p>請仔細填寫，可別讓您的情不知去向囉～</p>
              <div class="form-group group-recipient-name">
                <label class="col-lg-4 control-label" for="recipient-name">收件人姓名</label>
                <div class="col-lg-6">
                  <input name="recipient-name" class="form-control" id="recipient-name" placeholder="">
                </div>
              </div>
              <div class="form-group group-recipient-school">
                <label class="col-lg-4 control-label" for="recipient-school">收件人學校</label>
                <div class="col-lg-6">
                  <select name="recipient-school" id="recipient-school" style="display: block;">
                    <option></option>
                    <optgroup label="台北">
                      <option value="台灣海洋大學">台灣海洋大學</option>
                      <option value="台北市立教育大學（市教大）">台北市立教育大學（市教大）</option>
                      <option value="台北商業技術學院">台北商業技術學院</option>
                      <option value="實踐大學（台北校區）">實踐大學（台北校區）</option>
                      <option value="大同大學">大同大學</option>
                      <option value="台灣師範大學（本部校區）">台灣師範大學（本部校區）</option>
                      <option value="台北教育大學（國北教大）">台北教育大學（國北教大）</option>
                      <option value="台北科技大學">台北科技大學（北科大）</option>
                      <option value="台灣科技大學">台灣科技大學（台科大）（118）</option>
                      <option value="台灣大學">台灣大學（台大）</option>
                      <option value="台北醫學大學">台北醫學大學</option>
                      <option value="東吳大學（本部校區）">東吳大學（本部校區）</option>
                      <option value="東吳大學（城中校區）">東吳大學（城中校區）</option>
                      <option value="銘傳大學（台北校區）">銘傳大學（台北校區）</option>
                      <option value="中國文化大學（本部校區）">中國文化大學（本部校區）</option>
                      <option value="陽明大學">陽明大學</option>
                      <option value="台北護理健康大學">台北護理健康大學</option>
                      <option value="台北城市科技大學">台北城市科技大學</option>
                      <option value="世新大學">世新大學</option>
                      <option value="政治大學">政治大學</option>
                      <option value="致理技術學院">致理技術學院</option>
                      <option value="亞東技術學院">亞東技術學院</option>
                      <option value="華梵大學">華梵大學</option>
                      <option value="華夏技術學院">華夏技術學院</option>
                      <option value="台北大學（三峽）">台北大學（三峽）</option>
                      <option value="輔仁大學">輔仁大學</option>
                      <option value="明志科技大學">明志科技大學</option>
                      <option value="醒吾科技大學">醒吾科技大學</option>
                      <option value="淡江大學">淡江大學</option>
                      <option value="真理大學（淡水校區）">真理大學（淡水校區）</option>
                      <option value="聖約翰科技大學">聖約翰科技大學</option>
                    </optgroup>
                    <optgroup label="桃園">
                      <option value="中央大學">中央大學</option>
                      <option value="桃園創新技術學院（原南亞）">桃園創新技術學院（原南亞）</option>
                      <option value="中原大學">中原大學</option>
                      <option value="元智大學">元智大學</option>
                      <option value="萬能科技大學">萬能科技大學</option>
                      <option value="健行科技大學（原清雲）">健行科技大學（原清雲）</option>
                      <option value="體育大學（桃園）">體育大學（桃園）</option>
                      <option value="長庚大學">長庚大學</option>
                      <option value="長庚科技大學（林口校區）">長庚科技大學（林口校區）</option>
                      <option value="銘傳大學（桃園校區）">銘傳大學（桃園校區）</option>
                      <option value="開南大學">開南大學</option>
                      <option value="中央警察大學">中央警察大學</option>
                    </optgroup>
                    <optgroup label="新竹、苗栗">
                      <option value="交通大學">交通大學</option>
                      <option value="清華大學">清華大學</option>
                      <option value="新竹教育大學">新竹教育大學</option>
                      <option value="中華大學">中華大學</option>
                      <option value="明新科技大學">明新科技大學</option>
                      <option value="聯合大學（本部校區）">聯合大學（本部校區）</option>
                      <option value="育達科技大學">育達科技大學</option>
                    </optgroup>
                    <optgroup label="台中、彰化">
                      <option value="中山醫學大學">中山醫學大學</option>
                      <option value="中興大學">中興大學</option>
                      <option value="台中教育大學">台中教育大學</option>
                      <option value="台中科技大學（中護校區）">台中科技大學（中護校區）</option>
                      <option value="台中科技大學（中技校區）">台中科技大學（中技校區）</option>
                      <option value="中國醫藥大學（台中校區）">中國醫藥大學（台中校區）</option>
                      <option value="中臺科技大學">中臺科技大學</option>
                      <option value="東海大學">東海大學</option>
                      <option value="逢甲大學">逢甲大學</option>
                      <option value="勤益科技大學">勤益科技大學</option>
                      <option value="朝陽科技大學">朝陽科技大學</option>
                      <option value="亞洲大學">亞洲大學</option>
                      <option value="靜宜大學">靜宜大學</option>
                      <option value="弘光科技大學">弘光科技大學</option>
                      <option value="彰化師範大學">彰化師範大學</option>
                      <option value="大葉大學">大葉大學</option>
                      <option value="明道大學">明道大學</option>
                    </optgroup>
                    <optgroup label="雲林、嘉義">
                      <option value="虎尾科技大學">虎尾科技大學</option>
                      <option value="雲林科技大學">雲林科技大學</option>
                      <option value="嘉義大學（民雄校區）">嘉義大學（民雄校區）</option>
                      <option value="嘉義大學（蘭潭校區）">嘉義大學（蘭潭校區）</option>
                      <option value="嘉義大學（新民校區）">嘉義大學（新民校區）</option>
                      <option value="中正大學">中正大學</option>
                      <option value="吳鳳科技大學">吳鳳科技大學</option>
                      <option value="南華大學">南華大學</option>
                    </optgroup>
                    <optgroup label="台南">
                      <option value="台南大學">台南大學</option>
                      <option value="成功大學">成功大學</option>
                      <option value="台南應用科技大學">台南應用科技大學</option>
                      <option value="南台科技大學">南台科技大學</option>
                      <option value="長榮大學">長榮大學</option>
                      <option value="中華醫事科技大學">中華醫事科技大學</option>
                      <option value="遠東科技大學">遠東科技大學</option>
                      <option value="真理大學（台南校區）">真理大學（台南校區）</option>
                    </optgroup>
                    <optgroup label="高雄">
                      <option value="高雄師範大學">高雄師範大學</option>
                      <option value="中山大學">中山大學</option>
                      <option value="高雄醫學大學">高雄醫學大學</option>
                      <option value="文藻外語學院">文藻外語學院</option>
                      <option value="高雄應用科技大學">高雄應用科技大學</option>
                      <option value="高雄海洋科技大學">高雄海洋科技大學</option>
                      <option value="高雄大學">高雄大學</option>
                      <option value="高雄第一科技大學">高雄第一科技大學</option>
                      <option value="實踐大學（高雄校區）">實踐大學（高雄校區）</option>
                      <option value="樹德科技大學">樹德科技大學</option>
                      <option value="正修科技大學">正修科技大學</option>
                      <option value="義守大學">義守大學</option>
                    </optgroup>
                    <optgroup label="宜蘭、花蓮、台東、屏東">
                      <option value="宜蘭大學">宜蘭大學</option>
                      <option value="佛光大學">佛光大學</option>
                      <option value="東華大學">東華大學</option>
                      <option value="台東大學（台東校區）">台東大學（台東校區）</option>
                      <option value="屏東商業技術學院">屏東商業技術學院</option>
                      <option value="屏東教育大學">屏東教育大學</option>
                      <option value="大仁科技大學">大仁科技大學</option>
                      <option value="屏東科技大學">屏東科技大學</option>
                    </optgroup>
                    <optgroup label="澎湖、金門">
                      <option value="澎湖科技大學">澎湖科技大學</option>
                      <option value="金門大學">金門大學</option>
                    </optgroup>
                  </select>
                </div>
              </div>
              <p>資料越完整，能越快速為您送達～</p>
              <div class="form-group group-recipient-department">
                <label class="col-lg-4 control-label" for="recipient-department">收件人系所</label>
                <div class="col-lg-6">
                  <input name="recipient-department" class="form-control" id="recipient-department" placeholder="">
                </div>
              </div>
              <div class="form-group group-recipient-grade">
                <label class="col-lg-4 control-label" for="recipient-grade">收件人年級</label>
                <div class="col-lg-6">
                  <input name="recipient-grade" class="form-control" id="recipient-grade" placeholder="">
                </div>
              </div>
              <div class="form-group group-recipient-phone">
                <label class="col-lg-4 control-label" for="recipient-phone">收件人聯絡電話</label>
                <div class="col-lg-6">
                  <input name="recipient-phone" type="tel" class="form-control" id="recipient-phone" placeholder="">
                </div>
              </div>

              <hr>
              <a style="float: left;" class="btn btn-default btn-lg to-step-one">← 上一步</a>
              <a style="float: right;" class="btn btn-default btn-lg to-step-three">下一步 →</a>
            </div>

            <div class="tab-pane" id="form-product">
              <h2>STEP III：選擇心意</h2>

              <div class="row products">
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/1.jpg" alt="">
                    <div class="caption description">
                      <h3>1. 訊息巧克力</h3>
                      <p>內容：比利時純巧克力片 (4片/20g)</p>
                      <p>包裝：11×3.5×1㎝ 方形塑膠盒</p>
                      <p>NT$70</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-1" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/2.jpg" alt="">
                    <div class="caption description">
                      <h3>2. 冬季戀歌</h3>
                      <p>內容：法國有機松露巧克力 (2入/20g)</p>
                      <p>包裝：10.5×5.5×3.5㎝ 方形紙盒</p>
                      <p>NT$90</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-2" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/3.jpg" alt="">
                    <div class="caption description">
                      <h3>3. 快樂旅行家</h3>
                      <p>內容：法國夾心巧克力 (3入/30g)</p>
                      <p>包裝：12.5×10.3×2.8㎝ 手提箱造型紙盒</p>
                      <p>NT$90</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-3" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/4.jpg" alt="">
                    <div class="caption description">
                      <h3>4. 幸福寶貝熊</h3>
                      <p>內容：法國有機松露巧克力 (1入/10g) + Emma 熊</p>
                      <p>包裝：1 入方形紙盒 + 玻璃紙套 + 蝴蝶緞帶</p>
                      <p>NT$120</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-4" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/5.jpg" alt="">
                    <div class="caption description">
                      <h3>5. 環遊聖誕</h3>
                      <p>內容：比利時夾心巧克力 (5入/25g)</p>
                      <p>包裝：8.5×8.5×2.5㎝ 心形鐵盒</p>
                      <p>NT$120</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-5" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/6.jpg" alt="">
                    <div class="caption description">
                      <h3>6. 敞開心扉</h3>
                      <p>內容：法國夾心巧克力 (5入/50g)</p>
                      <p>包裝：13.5×7×3.5㎝ 方形紙盒</p>
                      <p>NT$150</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-6" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/7.jpg" alt="">
                    <div class="caption description">
                      <h3>7. 幸福愛戀塔</h3>
                      <p>內容：法國原味有機松露巧克力 (5入/50g)</p>
                      <p>包裝：10×10×13㎝ 方形錐紙盒 + 蝴蝶緞帶</p>
                      <p>NT$180</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-7" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/8.jpg" alt="">
                    <div class="caption description">
                      <h3>8. 寶貝熊禮盒</h3>
                      <p>內容：比利時純巧克力片 (4片/20g ) + Emma熊</p>
                      <p>包裝：8.5×8.5×7㎝方形紙盒+蝴蝶緞帶</p>
                      <span class="label label-info">Emma 熊顏色隨機出貨</span>
                      <p>NT$180</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-8" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/9.jpg" alt="">
                    <div class="caption description">
                      <h3>9. 72% 烘焙巧克力麻布袋</h3>
                      <p>內容：西非聖多美島鈕扣巧克力 100g (72%烘培)</p>
                      <p>包裝：麻布袋 + 蝴蝶緞帶</p>
                      <p>NT$200</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-9" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/10.jpg" alt="">
                    <div class="caption description">
                      <h3>10. 聖誕傳情</h3>
                      <p>內容：比利時純巧克力片 (12片/60g)</p>
                      <p>包裝：13.5×10×3㎝ 方型造型紙盒</p>
                      <p>NT$230</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-10" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/11.jpg" alt="">
                    <div class="caption description">
                      <h3>11. 甜心熊禮盒</h3>
                      <p>內容：比利時夾心巧克力 (4入/60g) + 甜心熊</p>
                      <p>包裝：10.5×10.5×11.5㎝ 方形紙盒 + 蝴蝶緞帶</p>
                      <span class="label label-info">禮盒顏色 (紅/粉) 隨機出貨</span>
                      <p>NT$250</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-11" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <img src="img/12.jpg" alt="">
                    <div class="caption description">
                      <h3>12. 草莓守護熊</h3>
                      <p>內容：比利時草莓鈕扣巧克力 (65g) + Emma 熊</p>
                      <p>包裝：12.5×8×9.5㎝ 方型塑膠盒 + 造型玻璃罐</p>
                      <p>NT$350</p>
                    </div>
                    <div class="caption">
                      <p>數量：
                        <select name="product-12" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <hr>
              <p>我要傳送訊息：(<input style="border: none; text-align: right; width: 18px;" readonly type="text" name="messagecount" size="3" value="50">/50 字內)</p>
              <textarea name="message" class="form-control message" rows="3" onKeyDown="limitText(this.form.message, this.form.messagecount, 50);" onKeyUp="limitText(this.form.message, this.form.messagecount, 50);"></textarea>
              <p>您也可以在親臨攤位繳費時，將親手寫的卡片交給我們！</p>

              <hr>
              <a style="float: left;" class="btn btn-default btn-lg to-step-two">← 上一步</a>
              <div style="float: right;"><button type="submit" class="btn btn-primary btn-default btn-lg">確定送出</button></div>
            </div>
          </div>

        </form>
      </div>

    </div>




    <div id="footer">
      <div class="container">
        <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.0.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- select2 -->
    <script src="js/select2.js"></script>
    <script src="js/select2_locale_zh-TW.js"></script>
    <script>
      $(document).ready(function() {
        $("#recipient-school").select2({ placeholder: "選擇學校" });
      });
      $(".to-step-one").click(function() {
        $('#form-tab a[href="#form-you"]').tab('show');
      });
      $(".to-step-two").click(function() {
        $('#form-tab a[href="#form-recipient"]').tab('show');
      });
      $(".to-step-three").click(function() {
        $('#form-tab a[href="#form-product"]').tab('show');
      });

      function validate_email(field, group){
        apos = $(field).val().indexOf("@");
        dotpos = $(field).val().lastIndexOf(".");
        if (apos < 1 || dotpos-apos < 2){
          $(group).addClass("has-error");
          $(group).addClass("animated");
          $(group).addClass("shake");
          setTimeout('$(".form-group").removeClass("shake")', 1000);
          $(group).keydown(function(){
            $(group).removeClass("has-error");
          });
          return false
        }else{
          return true
        }
      }

      function validate_required(field, group){

        if ($(field).val() == null || $(field).val() == "" || $(field).val() == "false"){
          $(group).addClass("has-error");
          $(group).addClass("animated");
          $(group).addClass("shake");
          setTimeout('$(".form-group").removeClass("shake")', 1000);
          $(group).keydown(function(){
            $(group).removeClass("has-error");
          });

          return false;
        }else{
          return true;
        }

      }

      function validate_check(field, group){
        with (field){
          if (checked != true){
            alert("您必須閱讀並同意注意事項。");
            $(group).addClass("has-error");
            $(group).addClass("animated");
            $(group).addClass("shake");
            setTimeout('$(".form-group").removeClass("shake")', 1000);
            return false;
          }else{
            return true;
          }
        }
      }

      function limitText(limitField, limitCount, limitNum) {
        if (limitField.value.length > limitNum) {
          limitField.value = limitField.value.substring(0, limitNum);
        } else {
          limitCount.value = limitNum - limitField.value.length;
        }
      }

    </script>
  </body>
</html>


