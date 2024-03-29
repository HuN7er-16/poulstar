<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="developed for Poulstar HTML, CSS, JS, education">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Poulstar">
    <title>فاکتور</title>
    <link rel="shortcut icon" href="../../IMAGE/logo/TopBarLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/Main.css">
    <link rel="stylesheet" href="../../CSS/Checkout.css">
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
            <a class="linkMenu" href="../Contact/Contact.html"><li>تماس با ما</li></a>
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
    <div class="mainBox checkout">
        <form action="" method="" autocomplete="on">
            <div class="partition">
                <div class="previousAddress">
                    <label><input type="checkbox" value="1" name="previousAddress">&nbsp; آردس پیش فرض &nbsp;</label>
                    <label><input type="radio" value="1" name="selectedPreviousAddress"> گیلان - رشت - گلسار </label>
                    <label><input type="radio" value="1" name="selectedPreviousAddress"> گیلان - رشت - منظریه </label>
                    <label><input type="radio" value="1" name="selectedPreviousAddress"> گیلان - رشت - شهریاران </label>
                </div>
                <div class="newAddress">
                    <label><input type="checkbox" value="1" name="newAddress">&nbsp; آردس پیش فرض &nbsp;</label>
                    <input list="region" name="newAddress" placeholder="کد شهر خود را انتخاب کنید"> 
                    <datalist id="region">
                        <option value="1">گیلان - رشت - گلسار</option>
                        <option value="2">گیلان - رشت - رازی </option>
                        <option value="3">گیلان - رشت - گاز</option>
                        <option value="4">گیلان - رشت - معلم</option>
                    </datalist>
                    <input type="text" name="detail" placeholder="جزئیات آدرس: مثال گلسار - چهار راه اصفهان" maxlength="100">
                </div>
            </div>
            <div class="partition">
                <div class="factor">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2">جمع بندی سبد خرید</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>جمع کل سبد خرید</td>
                                <td>3000000 ﷼</td>
                            </tr>
                            <tr>
                                <td>هزینه ارسال</td>
                                <td>رایگان</td>
                            </tr>
                            <tr>
                                <td>کد تخفیف</td>
                                <td>ندارد</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>جمع کل </th>
                                <th>3000000 ﷼</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="personalData">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2">مشخصات فردی</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">مجموعه پل استار</td>
                                <td>013-34911</td>
                            </tr>
                            <tr>
                                <td>info@poulstar.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="partition">
                <label>
                    <input type="checkbox" value="1" name="acceptTerm">
                    &nbsp; <a href="../TAC/TermAndCondition.html">قوانین و مقررات</a> سایت را مطالعه کرده و با آگاهی کامل شرایط خرید آنلاین را می پذیرم. &nbsp;
                </label>
                <input type="submit" value="تایید و پرداخت">
            </div>
        </form>
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