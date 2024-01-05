<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="developed for Poulstar HTML, CSS, JS, education">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Poulstar">
    <title>ورود</title>
    <link rel="shortcut icon" href="{{ asset('image/logo/topBarLogo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">&uArr;</button>
    <div class="mainBox topHeader">
        <a class="link" href="{{route('login')}}"><button class="inlineLogin active">ورود</button></a>
        <a class="link" href="{{route('register')}}"><button class="inlineLogin">ثبت نام</button></a>
        <p id="customizeDate" class="inlineDate"></p>
    </div>
    <div class="mainBox topBarLogo">
        <img src="{{ asset('IMAGE/logo/TopBarLogo.png') }}" alt="TopBarLogo">
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
                        <img class="cart" src="{{ asset('IMAGE/product/dress1-1-700x893.jpg') }}" alt="dress1-1">
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
                    <a class="linkMenu" href="{{route('singleProduct')}}">
                        <img class="cart" src="{{ asset('IMAGE/product/hoodie1-1-700x893.jpg') }}" alt="hoodie1-1">
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
                    <a class="linkMenu" href="{{route('singleProduct')}}">
                        <img class="cart" src="{{ asset('IMAGE/product/jeans1-1-700x893.jpg') }}" alt="jeans1-1">
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
    <div class="mainBox customizeLayout">
        <div class="horizontalPart">
            <div class="horizontalRightPart">
                <ul>
                    <li><a href="">خانه</a></li>/
                    <li><a href="">مردانه</a></li>/
                    <li><a href="">لباس</a></li>
                </ul>
            </div>
            <div class="horizontalLeftPart">
                <div class="productAmount">
                    <p>مجموع محصولات در حال نمایش: </p>
                    <span id="counter">17</span>
                </div>
                <div class="sortProduct">
                    <select name="sorting" id="sort" oninput="selectMode()">
                        <option value="1">قدیمی ترین</option>
                        <option value="2">جدید ترین</option>
                        <option value="3">ارزان ترین</option>
                        <option value="4">گران ترین</option>
                    </select>
                </div>
                <div class="searchProduct">
                    <input type="search" name="searchBox" id="searchBox" placeholder="محصول مورد نظر خود را وارد کنید">
                    <button id="search" onclick="searchProduct()">&#9935;</button>
                </div>
            </div>
        </div>
        <div class="contectBox">
            <div class="helpPart">
                <div class="latestMenProduct">
                    <h1>آخرین محصولات مردانه</h1>
                    <div class="smallShowProduct">
                        @foreach ($latestMen as $latestMan)
                        <div class="smallImage">
                            <a href=""><img src="{{$latestMan->image}}" alt="{{$latestMan->name}}"></a>
                        </div>
                        <div class="smallDetail">
                            <a href=""><p>{{$latestMan->name}}</p></a>
                            <del>{{$latestMan->price}} ريال</del>
                            <ins>{{$latestMan->discount_price}} ريال</ins>
                        </div>
                        <br>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="latestWomenProduct">
                    <h1>آخرین محصولات زنانه</h1>
                    <div class="smallShowProduct">
                        @foreach ($latestWomen as $latestWoman)
                        <div class="smallImage">
                            <a href=""><img src="{{$latestWoman->image}}" alt="{{$latestWoman->name}}"></a>
                        </div>
                        <div class="smallDetail">
                            <a href=""><p>{{$latestWoman->name}}</p></a>
                            <del>{{$latestWoman->price}} ريال</del>
                            <ins>{{$latestWoman->discount_price}} ريال</ins>
                        </div>
                        <br>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="allTags">
                    <h1>تگ ها</h1>
                    <button><a href="">راحتی</a></button>
                    <button><a href="">مقاوم</a></button>
                    <button><a href="">اسپرت</a></button>
                    <button><a href="">مجلسی</a></button>
                </div>
            </div>
                <div id="productBox" class="showProduct">
                    @foreach ($products as $product)
                    <div id="{{$product->id}}" data-price="{{$product->discount_price}}" data-name="{{$product->name}}" class="imageBox">
                        <span class="discount"></span>
                        <a href=""><img src="{{$product->image}}" alt="{{$product->name}}"></a>
                        <div class="secondImageBox">
                            <a href=""><img src="{{$product->second_image}}" alt="{{$product->name}}"></a>
                            <a href=""><div>جزئیات</div></a>
                        </div>
                        <div class="productName">
                            <a href=""><p>{{$product->name}}</p></a>
                            <a><img src="{{asset('IMAGE/menu/ShopingCartLogo.png')}}" alt="ShopingCartLogo"></a>
                        </div>
                        <div class="tag">
                            <span><a href="">راحتی</a></span>,
                            <span><a href="">مقاوم</a></span>,
                            <span><a href="">اسپرت</a></span>,
                        </div>
                        <div class="price">
                            <del>{{$product->price}} ريال</del>
                            <ins id="{{$product->discount_price}}">{{$product->discount_price}} ريال</ins>
                        </div>
                    </div>
                    @endforeach
                    </form>
        </div>
        <div class="horizontalPart">
            <div id="pagination" class="pagination"></div>
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
    <script src="{{asset('JS/Product.js')}}"></script>
</body>
</html>
