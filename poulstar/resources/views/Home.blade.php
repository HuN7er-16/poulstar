<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="developed for Poulstar HTML, CSS, JS, education">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Poulstar">
    <title>خانه</title>
    <link rel="shortcut icon" href="../../IMAGE/logo/TopBarLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/Main.css">
    <link rel="stylesheet" href="../../CSS/Home.css">
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
            <a class="linkMenu" href="../Home/Home.html"><li class="active">خانه</li></a>
            <li class="dropdown ">
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
    <div class="mainBox">
        <div class="headerImage">
            <div class="rightHeader">
                <img class="imgRightTop" src="../../IMAGE/home/home-header-right-top.jpg" alt="headerRightTop">
                <img class="imgRightBottom" src="../../IMAGE/home/home-header-right-bottom.jpg" alt="headerRightBottom">
            </div>
            <div class="leftHeader">
                <img class="imgleft" src="../../IMAGE/home/home-header-left.jpg" alt="hedareLeft">
            </div>

        </div>
        <div class="partition">
            <h1>آخرین محصولات</h1>
            <hr>
        </div>
        <div class="lastProduct">
            <div class="imageBox">
                <span class="discount"></span>
                <a href=""><img src="../../IMAGE/product/bag1-1-700x893.jpg" alt="bag1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/bag1-2-700x893.jpg" alt="bag1"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>کیف کروئلا</p></a>
                   <a href=""> <img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/bag3-1-700x893.jpg" alt="bag3"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/bag3-2-700x893.jpg" alt="bag"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>کیف قرمز مخملی</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <span class="discount"></span>
                <a href=""><img src="../../IMAGE/product/bag4-1-700x893.jpg" alt="bag4"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/bag4-2-700x893.jpg" alt="bag"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>کیف چرمی درجه یک</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/dress1-1-700x893.jpg" alt="dress1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/dress1-2-700x893.jpg" alt="bag"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>لباس مجلسی</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
        </div>
        <div class="partition">
            <h1>آخرین محصولات مردانه</h1>
            <hr>
        </div>
        <div class="menProduct">
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/hoodie1-1-700x893.jpg" alt="hoodie1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/hoodie1-2-700x893.jpg" alt="hoodie1"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>هودی اسپرت</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/hoodie2-1-700x893.jpg" alt="hoodie2"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/hoodie2-2-700x893.jpg" alt="hoodie2"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>هودی زرشکی</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <span class="discount"></span>
                <a href=""><img src="../../IMAGE/product/jacket1-1-700x893.jpg" alt="jacket1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/jacket1-2-700x893.jpg" alt="jacket1"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>ژاکت طرح دار</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/jacket2-1-700x893.jpg" alt="jacket2"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/jacket2-2-700x893.jpg" alt="jacket2"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href="" ><p>ژاکت نیوجرسی</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/shirt1-1-700x893.jpg" alt="shirt1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/shirt1-2-700x893.jpg" alt="shirt1"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>پیراهن لی اسپرت</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <span class="discount"></span>
                <a href=""><img src="../../IMAGE/product/shirt2-1-700x893.jpg" alt="shirt2"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/shirt2-2-700x893.jpg" alt="shirt2"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href="" ><p>پیراهن سیاه اسپرت</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
        </div>
        <div class="partition">
            <h1>آخرین محصولات زنانه</h1>
            <hr>
        </div>
        <div class="womenProduct">
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/dress2-1-700x893.jpg" alt="dress2"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/dress2-2-700x893.jpg" alt="dress2"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>لباس مجلسی</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/jeans1-1-700x893.jpg" alt="jeans1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/jeans1-2-700x893.jpg" alt="jeans1"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>شلوار لی طرح دار</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <span class="discount"></span>
                <a href=""><img src="../../IMAGE/product/jeans2-1-700x893.jpg" alt="jeans2"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/jeans2-2-700x893.jpg" alt="jeans2"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>شلوار لی ساده</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/skirt1-1-700x893.jpg" alt="skirt1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/skirt1-2-700x893.jpg" alt="skirt1"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>دامن سفید</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/skirt4-1-700x893.jpg" alt="skirt4"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/skirt4-2-700x893.jpg" alt="skirt4"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>دامن آر آر</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
            <div class="imageBox">
                <a href=""><img src="../../IMAGE/product/top1-1-700x893.jpg" alt="top1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/top1-2-700x893.jpg" alt="top1"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>تاپ مجلسی</p></a>
                    <a href=""><img src="../../IMAGE/menu/ShopingCartLogo.png" alt="ShopingCartLogo"></a>
                </div>
                <div class="tag">
                    <span><a href="">راحتی</a></span>,
                    <span><a href="">مقاوم</a></span>,
                    <span><a href="">اسپرت</a></span>,
                </div>
                <div class="price">
                    <del>700000 ريال</del>
                    <ins>600000 ريال</ins>
                </div>
            </div>
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
