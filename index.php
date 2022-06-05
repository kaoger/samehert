<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
        <script type="text/javascript">
            window.onload = function () {
                var s = skrollr.init();
            }
    
        </script>
    <script src="https://kit.fontawesome.com/73623373a5.js" crossorigin="anonymous"></script>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            list-style: none;
            text-decoration: none;
        }
        html,body{
            overflow-x:hidden;
        }


        .header {
            background-color: #fff;
            height: 80px;
        }

        .header .wrap {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            transition: .5s;
        }

        .header .logo a img {
            width: 80px;
        }

        .header nav {
            display: flex;
            flex-direction: column;
            width: 80%;
            height: 100vh;
            background-color: #fff;
            position: absolute;
            top: 0px;
            left: -100%;
            transition: .5s;
        }

        .header nav a {
            color: #000;
            font-size: 20px;
            margin: 20px;
        }

        .header nav::before {
            content: "Menu";
            text-align: center;
            font-size: 20px;
        }

        .header nav a::after {
            content: "";
            height: 1px;
            width: 100%;
            background-color: #000;
            display: block;
        }

        .header .logo a {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #000;
        }

        .menu-btn {
            display: block;
            height: 60px;
            width: 60px;
            background-color: #000;
            position: relative;
        }

        .menu-btn span {
            display: none;
        }

        .menu-btn::before {
            content: "";
            position: absolute;
            height: 2px;
            width: 56px;
            background-color: #fff;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            box-shadow: 0 8px 0px #fff, 0 -8px 0px #fff;
        }

        #menu {
            display: none;
        }

        #menu:checked~.header nav {
            left: 0px;
        }

        #menu:checked~.header .wrap {
            transform: translateX(80%);
        }

        .header-pic {
            width: 100%;
        }

        .header-pic img {
            width: 100%;
            background-size: cover;
        }

        .product1 .wrap .item1 {
            width: 100%;
        }

        .product1 .wrap .item1 img {
            width: 100%;
            box-sizing: border-box;
        }

        .product1 .wrap .item2 {
            width: 100%;
        }

        .product1 .wrap .item2 img {
            padding: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        .item-logo {
            width: 100%;
        }

        .item-logo img {
            width: 100%;
        }

        .product2 .wrap {}

        .product2 .item2 img {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            transition: 0.5s;
        }

        .product2 .item1 {
            padding: 10px;
            font-size: 20px;
            color: #aaa;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-items: center;
            line-height: 2em;
            transition: 0.5s
        }

        .txtbox {
            display: flex;
            flex-direction: column;

            background-image: url("https://pic03.eapple.com.tw/0966621367/index_bg03.png");
            background-size: cover;
            font-size: 20px;
            line-height: 1.5em;
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        .txtbox img {
            vertical-align: center;
            width: 100%;
            margin: 10px 0;
        }

        .card .wrap .item1 {
            background-image: url(https://pic03.eapple.com.tw/0966621367/index_bg04.png);
            background-size: cover;

            height: 500px;
            padding: 50px 0 0 50px;
            transition: 1s;
        }

        .card .wrap .item1 .box {
            width: 60%;
            height: 50%;
            padding: 50px;
            background-color: #fff;
            box-shadow: 10px 6px 6px #000;
            opacity: 0.8;
        }

        .card {
            width: 100%;
        }

        .card .wrap {
            width: 100%;
        }

        .card .wrap .item2 img {

            width: 100%;
        }

        .card .wrap .item2 {
            padding: 20px;
            transition: 1s;
        }

        .card .wrap .item2 .box {
            height: 300px;

            width: 100%;
            background-color: #000;
        }


        .bottom {
            width: 100%;

        }

        .bottom .wrap {
            width: 100%;
            /* display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; */
            font-size: 30px;
            line-height: 60px;
        }

        .bottom nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .bottom nav a {
            width: 18%;
            margin: 10px;
            opacity: 0.5;
            color: #000;
        }

        .bottom .wrap .logo {
            width: 100%;
            display: flex;
            justify-content: center;

        }

        .bottom .wrap .logo a {
            width: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            color: #000;
        }

        .bottom nav a:hover {
            background-color: #C1996C;
            color: #fff;
        }

        .bottom .wrap .logo a img {
            width: 300px;
        }

        .bottom .wrap .logo a h2 {
            font-size: 1em;
            width: 100%;
            text-align: center;
        }

        .bottom .wrap .txt {
            font-size: 22px;
        }

        .footer {
            background-color: #C1996C;
            text-align: center;
            color: #fff;
           
        }

        @media screen and (min-width : 768px) {
            .header-pic {
                background-image: url("https://picsum.photos/id/684/600/400");
                height: 100vh;
                width: 100%;
                background-size: cover;
                background-attachment: fixed;
            }

            .header-pic img {
                display: none;
            }

            .product1 .wrap {
                width: 100%;
                padding: 100px 0;
                display: flex;
            }

            .product1 .item1 img {
                transition: .5s;
                width: 100%;
                height: 100%;

            }

            .product1 .wrap .item2 img {
                padding: 0 20px;
                margin: 0px 0px 10px 0;
            }

            .product1 .item-logo {
                width: 100%;
            }

            .product1 .item-logo img {
                width: 100%;
            }

            .product2 {
                width: 100%;
            }

            .product2 .wrap {
                padding: 0px 20px;
                width: 100%;
                display: flex;
                flex-direction: row-reverse;
                justify-content: center;
                box-sizing: border-box;
            }

            .product2 .item2 {
                display: flex;
                justify-content: center;
            }

            .product2 .item2 img {
                width: 50%;
                margin: 10px 0px;
                box-sizing: border-box;
                

            }

            .product2 .item1 {
                width: 50%;
                box-sizing: border-box;
                font-size: 20px;
                color: #aaa;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                line-height: 2em;
                transition: .5s;
                
            }

            .card .wrap .item1 {
                background-image: url(https://pic03.eapple.com.tw/0966621367/index_bg04.png);
                background-size: cover;

                height: 500px;
                padding: 100px 0 0 100px;
                transition: 1s;
                
            }

            .card .wrap .item1 .box {
                width: 40%;
                height: 60%;
                padding: 50px;
                background-color: #fff;
                box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.19), ;
            }

            .header {
                width: 100%;
                display: flex;
                height: 100px;
            }

            .header .wrap {}

            .header .wrap .logo img {
                width: 300px;
            }



            .header nav {
                position: static;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                height: 100px;
            }

            .header nav a {
                font-size: 14px;
                margin: auto;
                transition: .5s;
            }

            .header nav a:hover {
                background-color: #faa;
            }

            .header nav::before {
                display: none;
            }

            .header nav a::after {
                display: none;
            }

            .menu-btn {
                display: none;
            }

            .bottom nav {
                flex-wrap: nowrap;
            }

        }
    </style>
</head>

<body style="overflow-x: hidden;">
    <input type="checkbox" name="" id="menu">
    <div class="header">
        <div class="wrap">
            <label for="menu" class="menu-btn">
                <span>選單</span>
            </label>
            <div class="logo">
                <a href="#">
                    <img src="/sameheart.png" alt="">



                </a>
            </div>
        </div>
        <nav>
            <a href="#">關於三禾</a>
            <a href="#">服務項目</a>
            <a href="#">服務流程</a>
            <a href="#">作品欣賞</a>
            <a href="#">媒體報導</a>
            <a href="#">預約估價</a>
            <a href="#">聯絡我們</a>
        </nav>
    </div>

    <div class="header-pic">
        <img src="https://picsum.photos/id/684/1200/800" " alt="">
    </div>
    <div class=" product1">
        <div class="wrap">
            <div class="item1">
                <img src=" https://pic03.eapple.com.tw/0966621367/index_bg01.png" alt="">
            </div>
            <div class="item2">
                <img src=" https://pic03.eapple.com.tw/0966621367/index_01.png" alt="">
                <img src="https://pic03.eapple.com.tw/0966621367/index_02.png" alt="">
            </div>
        </div>
    </div>

    <div class="item-logo">
        <img src="https://pic03.eapple.com.tw/0966621367/index_03.png" alt="">
    </div>

    <div class="product2">
        <div class="wrap">
            <div class="item2">
                <img  style="-webkit-overflow-scrolling: touch;" src="https://pic03.eapple.com.tw/0966621367/index_04.png" alt=""
                data-bottom-top="transform: scale(0)" data-300-bottom="transform: scale(1)">
                <img  src="https://pic03.eapple.com.tw/0966621367/index_05.png" alt=""data-bottom-top="transform: scale(0)" data-300-bottom="transform: scale(1)"
                    >
            </div>
            <div class="item1" style="-webkit-overflow-scrolling: touch;" >
                讓空間持續乘載回憶、堆疊幸福。<br>
                在多年的努力之下為自己購入一個自由的空間，<br>
                對於這個未來居所有著無限的想像。<br>
                展璿以這份喜悅作為基礎加入時間的長度。<br>
                以深遠規劃，讓空間隨著生命成長而豐富；<br>
                以安心實在，將安全置入設計裡，打造安心的居住品質；<br>
                以愜意舒適，使人與人情感串連，用溫度作為最美好的點綴。<br>
                時間設計的空間，是生命無時無刻的避風港。
            </div>
        </div>
    </div>

    <div class="txtbox">
        <img src="https://pic03.eapple.com.tw/0966621367/index_06.png" alt="">
        <p>透過空間美感的提升，幫助家人感情升溫，<br>
            這是展璿室內設計的初心，也是贏得老客戶喜愛的主要原因。<br>
            細細聆聽每個客戶的需求與想法。這是構築每個夢想之家的重要心法。</p>
    </div>


    <div class="card">
        <div class="wrap">
            <div class="item1"data-bottom-top=" opacity: 0; transform: translateX(-100%)"
                data-300-bottom="opacity: 1; transform: translateX(0)">

                <div class=" box">
                    <img src=https://picsum.photos/100/100?random=10>
                    <p>
                        免付費專線： XXXXXXX <br>
                        手機：09XXXXX <br>
                        電話：03-XXXXXXXX3 <br>
                        LINE ID：XXXXXXX3 <br>
                        地址：宜XXXXXXXX <br>
                        E-mail：XXXXXXXX3@gmail.com
                    </p>
                </div>

                <!-- <div class="item2">
                    <img src=" https://pic03.eapple.com.tw/0966621367/index_08.png" alt="">
                    <p>「相信美，會影響人的情緒，唯有將空間的情緒，表達到最好，對居住當中的人就是最好的回饋」 。</p>
                    <div class="box"></div> -->
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="wrap">
            <div class="logo">
                <a href="#">
                    <img src="./sameheart copy.png" alt="">
                    <h2>三禾室內設計裝潢工程</h2>
                </a>
            </div>
            <div class="txt">
                電話: XXXXX <br>
                手機: XXXX<br>
                統編: XXXXX<br>
                信箱: boXX3XXXX@gmail.com<br>
                地址: XXXXXXXX</div>
        </div>
        <nav>
            <a href="">回首頁</a>
            <a href="">關於三禾</a>
            <a href="">服務項目</a>
            <a href="">服務流程</a>
            <a href="">作品欣賞</a>
            <a href="">媒體報導</a>
            <a href="">預約估價</a>
            <a href="">聯絡我們</a>
        </nav>
        <div class="footer">
            copyright &copy;三禾室內設計裝潢工程
        </div>
    </div>
</body>

</html>