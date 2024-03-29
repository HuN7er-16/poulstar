<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="developed for Poulstar HTML, CSS, JS, education">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Poulstar">
    <title>نمایش محصول</title>
    <link rel="shortcut icon" href="../../IMAGE/logo/TopBarLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/Main.css">
    <link rel="stylesheet" href="../../CSS/SingleProduct.css">
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
                <button class="dropbtn active">محصولات</button>
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
    <div class="mainBox singleProduct">
        <div class="verticalPart">
            <div class="productRoute">
                <ul>
                    <li><a href="">خانه</a></li>/
                    <li><a href="">زنانه</a></li>/
                    <li><a href="">لباس</a></li>
                </ul>
            </div>
            <div class="productDescription">
                <h1>لباس مجلسی</h1>
                <h2>لباس بسیار مرغوب و با کیفت عالی برای خاص پوش ها</h2>
                <del>700000 ريال</del>
                <ins>600000 ريال</ins>
            </div>
            <div class="productCounter">
                <form action="">
                    <input type="button" value="+" onclick="increment()">
                    <input type="number" name="quantity" value="1" id="productQuantity">
                    <input type="button" value="-" onclick="decrement()">
                    <input type="submit" value="افزودن به سبد خرید">
                </form>
            </div>
            <div class="productDetail">
                <div class="productCategory">
                    <span>دسته بندی: </span>
                    <p><a href="">لباس</a></p>
                </div>
                <div class="productTag">
                    <span>تگ ها: </span>
                    <p><a href="">مجلسی</a></p>،
                    <p><a href="">راحتی</a></p>
                </div>
            </div>
        </div>
        <div class="verticalPart">
            <div class="productImage">
                <img id="show" src="../../IMAGE/product/dress1-1-700x893.jpg" alt="dress1">
            </div>
            <div class="allImage">
                <img onclick="selectFirstImage()" id="first" src="../../IMAGE/product/dress1-1-700x893.jpg" alt="dress1">
                <img onclick="selectSecondImage()" id="second" src="../../IMAGE/product/dress1-2-700x893.jpg" alt="dress1">
            </div>
        </div>
        <div class="horizontalPart">
            <div class="tab">
                <button onclick="descriptionTab()">توضیحات</button>
                <button onclick="commentTab()">نظر ها (0)</button>
            </div>
            <div id="description" class="tabcontent">
                <p>لباس مجلسی</p>
                <p>لباس بسیار مرغوب و با کیفت عالی برای خاص پوش ها</p>
            </div>
            <div id="comment" class="tabcontent">
                <div class="user">
                    <p>حسین پورقدیری</p>
                </div>
                <div class="userComment">
                    <p>لباس بسیار مناسبی است.</p>
                </div>
                <hr>
                <div class="newComment">
                    <form action="">
                        <textarea name="comment" placeholder="نظر خود را بنویسید ..."></textarea>
                        <input type="submit" value="ثبت نظر">
                    </form>
                </div>
            </div>
        </div>
        <div class="partition">
            <h1>آخرین محصولات</h1>
            <hr>
        </div>
        <div class="relatedProduct">
            <div class="imageBox">
                <span class="discount"></span>
                <a href=""><img src="../../IMAGE/product/bag1-1-700x893.jpg" alt="bag1"></a>
                <div class="secondImageBox">
                    <a href=""><img src="../../IMAGE/product/bag1-2-700x893.jpg" alt="bag1"></a>
                    <a href=""><div>جزئیات</div></a>
                </div>
                <div class="productName">
                    <a href=""><p>کیف کروئلا</p></a>
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
    <script src="../../JS/SingleProduct.js"></script>
</body>
</html>