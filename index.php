<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/frameworks/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frameworks/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css.css">
    <link rel="stylesheet" href="assets/frameworks/fontawesome-pro-5.11.2-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>

    <title>SevenTechTask</title>
</head>
<body>

<nav class="dirltr nbr navbar navbar-expand-lg navbar-light bg-light">
    <span class="text-white"><i class="fal fa-2x fa-map-marked"></i><p class="bgdad">بغداد</p></span>
    <a class="navbar-brand logoo" href="#"><img src="assets/images/logo.png" alt=""></a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>

    </div>
</nav>

<div class="container nbr">
    <div class="row">
        <div class="col">
            <form class=" form-inline my-2 my-lg-0">
                <input class="srsh form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">

            </form>
        </div>
    </div>
</div>


<ul class="nbr nav nbrls nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="ad-tab" data-toggle="tab" href="#ad" role="tab" aria-controls="home"
           aria-selected="true"><span class="text-white"><i class="fal fa-bullhorn"></i><p
                class="wrd">الاعلانات</p></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="dep-tab" data-toggle="tab" href="#dep" role="tab" aria-controls="profile"
           aria-selected="false"><span class="text-white"><i class="fal fa-network-wired"></i><p
                class="wrd">الاقسام</p></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="seller-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="contact"
           aria-selected="false"><span class="text-white"><i class="fal fa-betamax"></i><p
                class="wrd">التأجير</p></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="stores-tab" data-toggle="tab" href="#stores" role="tab" aria-controls="contact"
           aria-selected="false"><span class="text-white"><i class="fal fa-store-alt"></i><p
                class="wrd">المتاجر</p></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="searcher-tab" data-toggle="tab" href="#searcher" role="tab" aria-controls="contact"
           aria-selected="false"><span class="text-white"><i class="fal fa-1x fa-lightbulb-on"></i><p
                class="wrd">الباحث الذكي</p></span></a>
    </li>
</ul>


<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="ad" role="tabpanel" aria-labelledby="ad-tab">
        <div class="owl-slider">
            <div id="carousel" class="owl-carousel">
                <div class="item">
                    <img class="owl-lazy"
                         data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
                </div>
                <div class="item">
                    <img class="owl-lazy"
                         data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg"
                         alt="">
                </div>
                <div class="item">
                    <img class="owl-lazy"
                         data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
                </div>

            </div>
        </div>

        <div class="container cntntr">
            <div class="row tbrw">
                <div class="col sell"><span><i class="fa-2x fal fa-home-lg"></i></span><h5 class="d-inline-block">عقارات
                    للبيع</h5>
                </div>
                <div class="col">
                    <button type="button" class="btn shwall btn-success">عرض الجميع</button>
                </div>
            </div>
            <div class="row prop">
                <div class="col cntsp ">

                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container cntntr">
            <div class="row tbrw cars">
                <div class="col sell"><span><i class="fal fa-2x fa-car"></i></span><h5 class="d-inline-block">سيارات
                    للبيع</h5>
                </div>
                <div class="col">
                    <button type="button" class="btn shwall btn-success">عرض الجميع</button>
                </div>
            </div>
            <div class="row">
                <div class="col cntsp">

                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container cntntr ele">
            <div class="row tbrw">
                <div class="col sell"><span><i class="fas fa-desktop fa-2x"></i></span><h5 class="d-inline-block">اجهزة
                    الكترونية</h5>
                </div>
                <div class="col">
                    <button type="button" class="btn shwall btn-success">عرض الجميع</button>
                </div>
            </div>
            <div class="row">
                <div class="col cntsp">

                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container cntntr">
            <div class="row tbrw">
                <div class="col sell"><span><i class="far fa-2x fa-cogs"></i></span><h5 class="d-inline-block">خدمات
                    عامة</h5>
                </div>
                <div class="col">
                    <button type="button" class="btn shwall btn-success">عرض الجميع</button>
                </div>
            </div>
            <div class="row">
                <div class="col cntsp">

                    <div class="itmcnt">
                        <div class="itm "><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                    <div class="itmcnt">
                        <div class="itm"><p>وصف المنتج</p></div>
                        <div><p>السعر 120000000 دينار</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="dep" role="tabpanel" aria-labelledby="dep-tab">...</div>
    <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">...</div>
    <div class="tab-pane fade" id="stores" role="tabpanel" aria-labelledby="store-tab">...</div>
    <div class="tab-pane fade" id="searcher" role="tabpanel" aria-labelledby="searcher-tab">...</div>

</div>


<script src="assets/frameworks/fontawesome-pro-5.11.2-web/js/all.min.js"></script>
<script src="assets/frameworks/popper.min.js"></script>
<script src="assets/frameworks/jquery-3.4.1.slim.min.js"></script>
<script src="assets/frameworks/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/frameworks/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="assets/script.js"></script>
</body>
</html>