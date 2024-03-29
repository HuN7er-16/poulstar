<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="developed for Poulstar HTML, CSS, JS, education">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Poulstar">
    <title>تماس با ما</title>
    <link rel="shortcut icon" href="../../IMAGE/logo/TopBarLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/Main.css">
    <link rel="stylesheet" href="../../CSS/Contact.css">
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">&uArr;</button>
    <div class="mainBox topHeader">
        <a class="link" href="../Login/Login.html"><button class="inlineLogin">ورود</button></a>
        <a class="link" href="../Register/Register.html"><button class="inlineLogin">ثبت نام</button></a>
        <p id="customizeDate" class="inlineDate"></p>
    </div>
    <div class="mainBox topBarLogo">
        <img src="../../IMAGE/logo/TopBarLogo.png" alt="TopBarLogo">
    </div>
    <div class="mainBox menu">
        <ul>
            <a class="linkMenu" href="../Home/Home.html"><li>خانه</li></a>
            <li class="dropdown">
                <button class="dropbtn">محصولات</button>
                <div class="dropdown-content">
                    <a class="linkMenu" href="../Product/Product.html">مردانه</a>
                    <a class="linkMenu" href="../Product/Product.html">زنانه</a>
                    <a class="linkMenu" href="../Product/Product.html">کودکانه</a>
                </div>
            </li>
            <a class="linkMenu" href="../Contact/Contact.html"><li class="active">تماس با ما</li></a>
            <a class="linkMenu" href="../FAQ/FrequencyAndAnswer.html"><li>سوالات متداول</li></a>
            <a class="linkMenu" href="../TAC/TermAndCondition.html"><li>قوانین و مقررات</li></a>
            <li class="ShopingCartLogo dropdown">
                <span class="ShopingCartCounter center dropbtn">3</span>
                <div class="dropdown-content">
                    <a class="btn" href="../Cart/Cart.html">فاکتور کن</a>
                    <a class="linkMenu" href="../SingleProduct/SingleProduct.html">
                        <img class="cart" src="../../IMAGE/product/dress1-1-700x893.jpg" alt="dress1-1">
                        <div class="box">
                            <div class="detail">
                                <span>لباس مجلسی</span>
                                <del>700000 ريال</del>
                                <ins> 600000 ريال</ins>
                                <span>تعداد: 1</span>
                                <ins> 600000 ريال</ins>
                            </div>
                        </div>
                    </a>
                    <a class="linkMenu" href="#">
                        <img class="cart" src="../../IMAGE/product/hoodie1-1-700x893.jpg" alt="hoodie1-1">
                        <div class="box">
                            <div class="detail">
                                <span>هودی</span>
                                <del>700000 ريال</del>
                                <ins> 600000 ريال</ins>
                                <span>تعداد: 2</span>
                                <ins> 1200000 ريال</ins>
                            </div>
                        </div>
                    </a>
                    <a class="linkMenu" href="#">
                        <img class="cart" src="../../IMAGE/product/jeans1-1-700x893.jpg" alt="jeans1-1">
                        <div class="box">
                            <div class="detail">
                                <span>شلوار لی</span>
                                <del>500000 ريال</del>
                                <ins> 400000 ريال</ins>
                                <span>تعداد: 3</span>
                                <ins> 1200000 ريال</ins>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <div class="whiteSpace"></div>
    <div class="mainBox contact">
        <h1>تماس با ما</h1>
        <hr>
        <div class="contactBox">
            <form action="" method="" autocomplete="on">
                <input type="text" name="name" placeholder="نام و نام خانوادگی خود را وارد کنید">
                <input type="text" name="phone" placeholder="شماره تماس خود را وارد کنید">
                <textarea name="message" placeholder="متن مورد نظر خود را بنویسید"></textarea>
                <input type="submit" value="ارسال کن">
            </form>
        </div>
        <div class="guideBox">
            <p>فرم آزمایشی پروژه پل استار جهت آموزش بهتر و کاردبری تر با ضاهر مناسب جهت ارتباط گیری بیشتر با مبحث تحصیلی می باشد</p>
            <p>شماره تماس: 34911-013</p>
            <p>آدرس: گیلان - رشت - گلسار - چهار راه اصفهان</p>
            <p>پست الکترونیک: info@poulstar.com</p>
        </div>
    </div>
    <div class="whiteSpace"></div>
    <div class="mainBox footer">
        <div class="box">
            <label class="footerFont" for="contact">تماس با ما</label>
            <p>شماره تماس: 34911-013</p>
            <p>آدرس: گیلان - رشت - گلسار - چهار راه اصفهان</p>
            <p>پست الکترونیک: info@poulstar.com</p>
        </div>
        <div class="box">
            <label class="footerFont" for="about">درباره ما</label>
            <p>
                سایت آموزشی فروشگاه آنلاین صرفا جهت آموزش بوده و استفاده از آن بلا مانع است.
            </p>
        </div>
        <div class="box">
            <label class="footerFont" for="tag">تگ</label>
            <button class="footerBTN">راحتی</button>
            <button class="footerBTN">مقاوم</button>
            <button class="footerBTN">اسپرت</button>
            <button class="footerBTN">مجلسی</button>
        </div>
        <div class="box">
            <label class="footerFont" for="payment">پرداخت</label>
            <p>کلیه تراکنش های موجود در این سایت از طریق ID Pay صورت می گیرد و به صورت آزمایشی می باشد.</p>
        </div>
    </div>
    <script src="../../JS/Layout.js"></script>
</body>
</html>