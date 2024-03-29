<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="developed for Poulstar HTML, CSS, JS, education">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Poulstar">
    <title>سبد خرید</title>
    <link rel="shortcut icon" href="../../IMAGE/logo/TopBarLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('CSS/Main.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/Cart.css')}}">
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">&uArr;</button>
    <div class="mainBox topHeader">
        <a class="link" href="{{route('login')}}"><button class="inlineLogin">ورود</button></a>
        <a class="link" href="{{route('register')}}"><button class="inlineLogin">ثبت نام</button></a>
        <p id="customizeDate" class="inlineDate"></p>
    </div>
    <div class="mainBox topBarLogo">
        <img src="{{asset('IMAGE/logo/TopBarLogo.png')}}" alt="TopBarLogo">
    </div>
    <div class="mainBox menu">
        <ul>
            <a class="linkMenu" href="{{route('home')}}"><li>خانه</li></a>
            <li class="dropdown">
                <button class="dropbtn">محصولات</button>
                <div class="dropdown-content">
                    <a class="linkMenu" href="{{route('product')}}">مردانه</a>
                    <a class="linkMenu" href="{{route('product')}}">زنانه</a>
                    <a class="linkMenu" href="{{route('product')}}">کودکانه</a>
                </div>
            </li>
            <a class="linkMenu" href="{{route('contact')}}"><li>تماس با ما</li></a>
            <a class="linkMenu" href="{{route('faq')}}"><li>سوالات متداول</li></a>
            <a class="linkMenu" href="{{route('termAndCondition')}}"><li>قوانین و مقررات</li></a>
            <li class="ShopingCartLogo dropdown">
                <span class="ShopingCartCounter center dropbtn">3</span>
                <div class="dropdown-content">
                    <a class="btn" href="{{route('cart')}}">فاکتور کن</a>
                    <a class="linkMenu" href="{{route('singleProduct')}}">
                        <img class="cart" src="{{asset('IMAGE/product/dress1-1-700x893.jpg')}}" alt="dress1-1">
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
                        <img class="cart" src="{{asset('IMAGE/product/hoodie1-1-700x893.jpg')}}" alt="hoodie1-1">
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
                        <img class="cart" src="{{asset('IMAGE/product/jeans1-1-700x893.jpg')}}" alt="jeans1-1">
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
    <div class="mainBox finalCart">
        <h1>سبد خرید</h1>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>تصویر محصول</th>
                    <th>نام محصول</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                    <th>قیمت کل</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href=""><img class="removeImage" src="{{asset('IMAGE/logo/removeIcon.png')}}" alt="removeIcon"></a>
                    </td>
                    <td>
                        <a href=""><img class="productImage" src="{{asset('IMAGE/product/dress1-1-700x893.jpg')}}" alt="dress1"></a>
                    </td>
                    <td>لباس مجلسی</td>
                    <td>600000 ريال</td>
                    <td>
                        <input type="button" value="+">
                        <input type="text" value="1">
                        <input type="button" value="-">
                    </td>
                    <td>600000 ريال</td>
                </tr>
                <tr>
                    <td>
                        <a href=""><img class="removeImage" src="{{asset('IMAGE/logo/removeIcon.png')}}" alt="removeIcon"></a>
                    </td>
                    <td>
                        <a href=""><img class="productImage" src="{{asset('IMAGE/product/hoodie1-1-700x893.jpg')}}" alt="hoodie1"></a>
                    </td>
                    <td>هودی</td>
                    <td>600000 ريال</td>
                    <td>
                        <input type="button" value="+">
                        <input type="text" value="2">
                        <input type="button" value="-">
                    </td>
                    <td>1200000 ريال</td>
                </tr>
                <tr>
                    <td>
                        <a href=""><img class="removeImage" src="{{asset('IMAGE/logo/removeIcon.png')}}" alt="removeIcon"></a>
                    </td>
                    <td>
                        <a href=""><img class="productImage" src="{{asset('IMAGE/product/jeans1-1-700x893.jpg')}}" alt="jeans1"></a>
                    </td>
                    <td>شلوار لی</td>
                    <td>400000 ريال</td>
                    <td>
                        <input type="button" value="+">
                        <input type="text" value="3">
                        <input type="button" value="-">
                    </td>
                    <td>1200000 ريال</td>
                </tr>
            </tbody>
        </table>
        <div class="underTable">
            <div class="rightPart">
                <a href="{{route('checkout')}}"><button>تایید نهایی</button></a>
            </div>
            <div class="leftPart">
                <input type="text" name="giftCode" placeholder="کد تخفیف خود را وارد کنید">
                <a href=""><button>ثبت کد تخفیف</button></a>
            </div>
        </div>
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
    <script src="{{asset('JS/Layout.js')}}"></script>
</body>
</html>
