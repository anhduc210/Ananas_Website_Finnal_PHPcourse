
<noscript><iframe src="ns.html?id=GTM-P4C43VC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Insert Your Facebook Pixel ID below. -->
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=548729748652125&amp;ev=PageView&amp;noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
        <!-- HEADER -->
        <div class="header container-fluid hidden-xs hidden-sm">
            <div class="row">
                <ul class="menu">
                    <li><a href="search-order"><img src="./document/wp-content/themes/ananas/fe-assets/images/svg/icon_tra_cuu_don_hang.svg"> Tra cứu đơn hàng</a></li>
                    <li><a href="index.php?controller=contact"><img src="./document/wp-content/themes/ananas/fe-assets/images/svg/icon_tim_cua_hang.svg"> Tìm cửa hàng</a>
                    </li>
                    <?php if(isset($_SESSION['customer_email'])): ?>
                    <li>
                        <a href="#"><img
                        src="./document/wp-content/themes/ananas/fe-assets/images//svg/icon_dang_nhap.svg"> <?php echo $_SESSION['customer_email']; ?></a>
                    </li>
                    <li><i class="fas fa-sign-out-alt"></i><a href="index.php?controller=account&action=logout">    Đăng xuất</a>
                    </li>
                    <?php else: ?>
                    <li>
                        <a href="index.php?controller=account&action=login"><img
                        src="./document/wp-content/themes/ananas/fe-assets/images//svg/icon_dang_nhap.svg"> Đăng nhập</a>
                    </li>
                    <?php endif; ?>
                     <?php 
        $ProductNumberInCart = 0;
        //!isset($_SESSION['cart']) <=> $_SESSION['cart'] == false
        //isset($_SESSION['cart']) <=> $_SESSION['cart'] == true
        if(isset($_SESSION['cart']))
          foreach($_SESSION['cart'] as $product)
            $ProductNumberInCart++;
     ?>
                    <li><a href="index.php?controller=cart"><img src="./document/wp-content/themes/ananas/fe-assets/images/svg/icon_gio_hang.svg">
                        Giỏ hàng (<?php echo $ProductNumberInCart; ?>)</a>
                    </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="navbar center ">

                                        <div class="navbar-header">
                                            <div class="navbar-brand"><a href="index.php"><img src="./document/wp-content/themes/ananas/fe-assets/images/svg/Logo_Ananas_Header.svg"></a></div>
                                        </div>

                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown">
                                                    <a href="index.php?controller=products&action=category" class="dropdown-toggle">SẢN PHẨM <span class="caret"></span></a>
                                                    <ul class="dropdown-menu style1">
                                                        <li><a href="index.php?controller=products&action=category"><img src="./document/wp-content/uploads/Menu_Nam.jpg"></a><a class="style1-title" href="product-list/?gender=men">CHO NAM</a></li>
                                                        <li><a href="index.php?controller=products&action=category"><img src="./document/wp-content/uploads/Menu_Nu.jpg"></a><a class="style1-title" href="product-list/?gender=women">CHO NỮ</a></li>
                                                        <li><a href="index.php?controller=search&action=searchall&keystatus=10"><img src="./document/wp-content/uploads/Menu_Sale-off.jpg"></a><a class="style1-title" href="index.php?controller=search&action=searchall&keystatus=10">OUTLET SALE</a></li>
                                                        <li><a href="product-list?gender=men,women&category=top,bottom,accessories&attribute="><img src="./document/wp-content/uploads/Menu_Phu-kien.jpg"></a><a class="style1-title" href="product-list?gender=men,women&category=top,bottom,accessories&attribute=">THỜI TRANG & PHỤ KIỆN</a></li>
                                                        <div class="style1-des"><a href="index.php?controller=account&action=login">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a></div>
                                                    </ul>

                                                </li>

                                                <li class="line"></li>
                                                <li class="dropdown">
                                                    <a href="index.php?controller=products&action=category" class="dropdown-toggle">NAM <span class="caret"></span></a>
                                                    <ul class="dropdown-menu style2">
                                                        <li>
                                                            <a href="#" class="title">NỔI BẬT</a>

                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href=""></a>
                                                            <a href="product-list?gender=men&category=&attribute=best-seller">Best Seller</a>
                                                            <a href="product-list?gender=men&category=&attribute=new-arrival">New Arrival</a>
                                                            <a href="product-list?gender=men&category=&attribute=sale-off">Sale off</a>
                                                            <a class="blank">&nbsp;</a>
                                                        </li>
                                                        <li class="style2-divider"></li>
                                                        <li>
                                                            <a href="#" class="title">GIÀY</a>

                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="#">Dòng sản phẩm</a>
                                                            <a href="product-list?gender=men&category=&attribute=basas">Basas</a>
                                                            <a href="product-list?gender=men&category=&attribute=vintas">Vintas</a>
                                                            <a href="product-list?gender=men&category=&attribute=urbas">Urbas</a>
                                                            <a href="product-list?gender=men&category=&attribute=pattas">Pattas</a>
                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="#">Style</a>
                                                            <a href="product-list?gender=men&category=&attribute=high-top?gender=men&category=&attribute=high-top">High Top</a>
                                                            <a href="product-list">Low Top</a>
                                                            <a href="product-list?gender=men&category=&attribute=slip-on">Slip-on</a>
                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="product-list?gender=men&category=shoes&attribute=">Tất cả giày</a>
                                                            <a class="blank">&nbsp;</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-list?gender=men&category=top,bottom,accessories&attribute=" class="title">THỜI TRANG & PHỤ KIỆN</a>

                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="#">Nửa trên</a>
                                                            <a href="product-list?gender=men&category=&attribute=basic-tee-tron">Basic Tee</a>
                                                            <a href="product-list/?gender=&category=&attribute=graphic-tee">Graphic tee</a>
                                                            <a href="product-list?gender=&category=&attribute=sweatshirt">Sweatshirt</a>
                                                            <a href="product-list?gender=&category=&attribute=hoodie">Hoodie</a>
                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="#">Phụ kiện</a>
                                                            <a href="product-list?gender=men&category=&attribute=hat">Nón</a>
                                                            <a href="product-list?gender=men&category=&attribute=shoelaces">Dây giày</a>
                                                            <a href="product-list?gender=men&category=&attribute=socks">Vớ</a>
                                                            <a href="product-list?gender=men&category=&attribute=backpack">Ba lô & Túi</a>
                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="product-list?gender=men&category=top,bottom,accessories&attribute=">Xem tất cả</a>
                                                            <a class="blank">&nbsp;</a>
                                                        </li>
                                                        <div class="style2-des"><a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a></div>
                                                    </ul>
                                                </li>

                                                <li class="line"></li>
                                                <li class="dropdown">
                                                    <a href="index.php?controller=products&action=category" class="dropdown-toggle">NỮ <span class="caret"></span></a>
                                                    <ul class="dropdown-menu style2">
                                                        <li>
                                                            <a href="" class="title">NỔI BẬT</a>

                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href=""></a>
                                                            <a href="product-list?gender=women&category=&attribute=best-seller">Best Seller</a>
                                                            <a href="product-list?gender=women&category=&attribute=new-arrival">New Arrival</a>
                                                            <a href="index.php?controller=search&action=searchall&keystatus=10">Sale-off</a>
                                                            <a class="blank">&nbsp;</a>
                                                        </li>
                                                        <li class="style2-divider"></li>
                                                        <li>
                                                            <a href="" class="title">GIÀY</a>

                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="#">Dòng sản phẩm</a>
                                                            <a href="product-list?gender=women&category=&attribute=basas">Basas</a>
                                                            <a href="product-list?gender=women&category=&attribute=vintas">Vintas</a>
                                                            <a href="product-list?gender=women&category=&attribute=urbas">Urbas</a>
                                                            <a href="product-list?gender=women&category=&attribute=pattas">Pattas</a>
                                                            
                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="#">Style</a>
                                                            <a href="product-list?gender=men&category=&attribute=high-top?gender=women&category=&attribute=high-top">High Top</a>
                                                            <a href="product-list?gender=men&category=&attribute=high-top?gender=women&category=&attribute=low-top">Low Top</a>
                                                            <a href="product-list?gender=men&category=&attribute=high-top?gender=women&category=&attribute=slip-on">Slip-on</a>
                                                            <a class="blank">&nbsp;</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-list?gender=women&category=top,bottom,accessories&attribute=" class="title">THỜI TRANG & PHỤ KIỆN</a>

                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="#">Nửa trên</a>
                                                            <a href="product-list?gender=women&category=&attribute=basic-tee-tron">Basic Tee</a>
                                                            <a href="product-list/?gender=&category=&attribute=graphic-tee">Graphic Tee</a>
                                                            <a href="product-list?gender=&category=&attribute=sweatshirt">Sweatshirt</a>
                                                            <a href="product-list?gender=&category=&attribute=hoodie">Hoodie</a>
                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="#">Phụ kiện</a>
                                                            <a href="product-list?gender=women&category=&attribute=hat">Nón</a>
                                                            <a href="product-list?gender=women&category=&attribute=shoelaces">Dây giày</a>
                                                            <a href="product-list?gender=men&category=&attribute=socks">Vớ</a>
                                                            <a href="product-list?gender=women&category=&attribute=backpack">Ba lô & Túi</a>
                                                            <a class="blank">&nbsp;</a>
                                                            <a class="title1" href="product-list?gender=women&category=top,bottom,accessories&attribute=">Xem tất cả</a>
                                                            <a class="blank">&nbsp;</a>
                                                        </li>
                                                        <div class="style2-des"><a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a></div>
                                                    </ul>
                                                </li>

                                                <li class="line"></li>
                                                <li><a href="index.php?controller=search&action=searchall&keystatus=10">SALE OFF</a></li>
                                                <li class="line"></li>
                                                <li><a href="index.php?controller=news"><img
                                                    src="./document/wp-content/themes/ananas/fe-assets/images/svg/DiscoverYOU.svg"></a></li>
                                                </ul>
                                                <!-- SEARCH FROM -->
                                                <form action="search-results/?" class="navbar-form navbar-right">

                                                    <div class="form-group" style="position: relative;">
                                                        <img class="icon-search" src="./document/wp-content/themes/ananas/fe-assets/images/svg/icon_tim_kiem.svg"  id="btnSearch">
                                                        <input type="text" autocomplete="off" class="form-control" id="key" value="" placeholder="Tìm kiếm" >
                                                        <div class="smart-search">
                                                      <ul>
                                                        <li><img src="assets/upload/products/1629293073_132195017985165066_1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
                                                        <li><img src="assets/upload/products/1629293073_132195017985165066_1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
                                                        <li><img src="assets/upload/products/1629293073_132195017985165066_1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
                                                      </ul>
                                                    </div>
                                                    </div>
                                                </form>

<style>
                .smart-search {position: absolute; width: 90%; background: white; height: 350px; overflow: scroll; z-index: 99;top: 38px; left:25px ;display: none; }
                .smart-search ul {padding: 0px; margin: 0px; list-style: none;}
                .smart-search ul li {border-bottom: 1px solid #dddddd; margin-top: 10px; padding-bottom: 10px; display: flex;}
                .smart-search img {width: 70px; margin-right: 5px;}
                .smart-search a {color: #000;}
                .smart-search a:hover {color: #F5A623; text-decoration: none;}
            </style>
              <script type="text/javascript">
        //tinh nang nay phai dung ket hop voi jquery -> phai load thu vien jquery
        //neu bai project tung ban chua co thi phai load jquery, kiem tra jquery co hoat dong hay khong bang cach them alert("ok") vao ben trong tag: 
        // $(document).ready(function(){ alert("ok"); });
        $(document).ready(function(){ 
           //bat su kien click cua id=btnSearch
           $("#btnSearch").click(function(){
              var key = $("#key").val();
              //di chuyen den url tim kiem
              location.href = "index.php?controller=search&action=name&key="+key;
           });
           //-----------------
           $(".form-control").keyup(function(){
              var strKey = $("#key").val();
              if(strKey.trim() == "")
                  $(".smart-search").attr("style","display:none");
              else{
                  $(".smart-search").attr("style","display:block");
                  //---
                  //su dung ajax de lay du lieu
                  $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                      //clear cac the li ben trong the ul
                      $(".smart-search ul").empty();
                      //them su lieu vua lay duoc bang ajax vao the ul
                      $(".smart-search ul").append(data);
                  });
                  //---
              }
           });
           //-----------------
        });
    </script>
                                                <!-- END SEARCH FROM -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="hot-news-cont">
                                            <div class="hot-news-slide">
                                                <div class="cont-item"><a href="faqs/">FREE SHIPPING VỚI HOÁ ĐƠN TỪ 800K !</a></div>
                                                <div class="cont-item"><a href="policy/">HÀNG 2 TUẦN NHẬN ĐỔI - GIÀY NỬA NĂM BẢO HÀNH</a></div>
                                                <div class="cont-item"><a href="faqs">BUY MORE PAY LESS - ÁP DỤNG KHI MUA PHỤ KIỆN</a></div>
                                                <div class="cont-item"><a href="faqs">BUY 2 GET 10% OFF - ÁP DỤNG VỚI TẤT CẢ BASIC TEE</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END HEADER -->

                                <!-- HEADER MOBILE-->
                                <div class="header-mobile container-fluid visible-xs visible-sm">
                                    <div class="row">
                                        <div class="navbar center">

                                            <div class="navbar-header">
                                                <div class="col-xs-4 col-sm-4 navbar-brand"><a href="https://ananas.vn"><img src="./document/wp-content/themes/ananas/fe-assets/images/svg/Logo_Ananas_Header.svg"></a>
                                                </div>
                                                <div class="col-xs-5 col-sm-6 navbar-menu">
                                                    <a data-toggle="collapse" data-target=".group-search"><img
                                                        src="./document/wp-content/themes/ananas/fe-assets/images/mobile/mb_search.png"></a>
                                                        <a href="stores"><img src="./document/wp-content/themes/ananas/fe-assets/images/mobile/mb_location.png"></a>
                                                        <a href="your-cart/"><img src="./document/wp-content/themes/ananas/fe-assets/images/mobile/mb_cart.png"><span class="navbar-menu-count">(<span class="countProduct">0</span>)</span></a>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-2"></div>
                                                </div>
                                            </div>
                                            <div class="collapse navbar-collapse group-search">
                                                <form id="formSearchAll" action="search-results/?">
                                                    <div class="input-group">
                                                        <input type="text" name="key" value="" class="form-control" placeholder="Tìm kiếm">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-search btn-search-all" type="button"><img
                                                                src="./document/wp-content/themes/ananas/fe-assets/images/mobile/arrow_right.png"></button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    <div class="black-rect-bg"></div>
                                                </div>


                                                <div class="collapse navbar-collapse">
                                                    <ul class="mobile_menu">
                                                        <li>
                                                            <a href="product-list/">SẢN PHẨM</a>
                                                            <ul class="submenu">
                                                                <div class="header-divider-1"></div>
                                                                <li>
                                                                    <a href="product-list/?gender=men">CHO NAM</a>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li>
                                                                    <a href="product-list/?gender=women">CHO NỮ</a>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li>
                                                                    <a href="promotion/clearance-sale/">OUTLET SALE</a>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li>
                                                                    <a href="product-list?gender=men,women&category=top,bottom,accessories&attribute=">THỜI TRANG & PHỤ KIỆN</a>
                                                                    <div class="header-divider-1"></div>
                                                                </li>
                                                                <li class="aboutus">
                                                                    <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                </li>
                                                            </ul>
                                                            <div class="header-divider"></div>
                                                        </li>

                                                        <li>
                                                            <a href="product-list/?gender=men">NAM</a>
                                                            <ul class="submenu">
                                                                <div class="header-divider-1"></div>
                                                                <li>
                                                                    <a href="#">NỔI BẬT</a>
                                                                    <ul class="submenu">
                                                                        <div class="header-divider-1"></div>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=best-seller">Best Seller</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=new-arrival">New Arrival</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=sale-off">Sale off</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Bộ sưu tập</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=pineapple-or-ananas">Pineapple Or Ananas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=corluray">Corluray</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men,women&category=&attribute=bst-unsettling">Unsettling</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=irrelevant">Irrelevant</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=temperate">Temperate</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Collaboration</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list/?gender=&category=&attribute=ananas-lucky-luke">Ananas x Lucky Luke</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list/?gender=&category=&attribute=ananas-doraemon-50years">Ananas x Doraemon 50 Years</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="aboutus">
                                                                            <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li>
                                                                    <a href="#">GIÀY</a>
                                                                    <ul class="submenu">
                                                                        <div class="header-divider-1"></div>
                                                                        <li class="inactive">
                                                                            <a href="">Dòng sản phẩm</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=basas">Basas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=vintas">Vintas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=urbas">Urbas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=pattas">Pattas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=creas">Creas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=track-6">Track 6</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Style</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=high-top?gender=men&category=&attribute=high-top">High Top</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list">Low Top</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=slip-on">Slip-on</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Tất cả giày</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="aboutus">
                                                                            <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li>
                                                                    <a href="#">THỜI TRANG & PHỤ KIỆN</a>
                                                                    <ul class="submenu">
                                                                        <div class="header-divider-1"></div>
                                                                        <li class="inactive">
                                                                            <a href="">Nửa trên</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=basic-tee-tron">Basic Tee</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list/?gender=&category=&attribute=graphic-tee">Graphic tee</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=sweatshirt">Sweatshirt</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=hoodie">Hoodie</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Phụ kiện</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=hat">Nón</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=shoelaces">Dây giày</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=socks">Vớ</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=backpack">Ba lô & Túi</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Xem tất cả</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="aboutus">
                                                                            <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li class="aboutus">
                                                                    <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                </li>
                                                            </ul>
                                                            <div class="header-divider"></div>
                                                        </li>

                                                        <li>
                                                            <a href="product-list/?gender=women">NỮ</a>
                                                            <ul class="submenu">
                                                                <div class="header-divider-1"></div>
                                                                <li>
                                                                    <a href="#">NỔI BẬT</a>
                                                                    <ul class="submenu">
                                                                        <div class="header-divider-1"></div>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=best-seller">Best Seller</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=new-arrival">New Arrival</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=sale-off">Sale-off</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Bộ sưu tập</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=pineapple-or-ananas">Pineapple Or Ananas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=corluray">Corluray</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men,women&category=&attribute=bst-unsettling">Unsettling</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=irrelevant">Irrelevant</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=temperate">Temperate</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Collaboration</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list/?gender=&category=&attribute=ananas-lucky-luke">Ananas x Lucky Luke</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list/?gender=&category=&attribute=ananas-doraemon-50years">Ananas x Doraemon 50 Years</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="aboutus">
                                                                            <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li>
                                                                    <a href="#">GIÀY</a>
                                                                    <ul class="submenu">
                                                                        <div class="header-divider-1"></div>
                                                                        <li class="inactive">
                                                                            <a href="">Dòng sản phẩm</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=basas">Basas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=vintas">Vintas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=urbas">Urbas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=pattas">Pattas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=creas">Creas</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=track-6">Track 6</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Style</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=high-top?gender=women&category=&attribute=high-top">High Top</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=high-top?gender=women&category=&attribute=low-top">Low Top</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=high-top?gender=women&category=&attribute=slip-on">Slip-on</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="aboutus">
                                                                            <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li>
                                                                    <a href="#">THỜI TRANG & PHỤ KIỆN</a>
                                                                    <ul class="submenu">
                                                                        <div class="header-divider-1"></div>
                                                                        <li class="inactive">
                                                                            <a href="">Nửa trên</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=basic-tee-tron">Basic Tee</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list/?gender=&category=&attribute=graphic-tee">Graphic Tee</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=sweatshirt">Sweatshirt</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=&category=&attribute=hoodie">Hoodie</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Phụ kiện</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=hat">Nón</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=shoelaces">Dây giày</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=men&category=&attribute=socks">Vớ</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li>
                                                                            <a href="product-list?gender=women&category=&attribute=backpack">Ba lô & Túi</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="inactive">
                                                                            <a href="">Xem tất cả</a>
                                                                            <div class="header-divider"></div>
                                                                        </li>
                                                                        <li class="aboutus">
                                                                            <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="header-divider"></div>
                                                                </li>
                                                                <li class="aboutus">
                                                                    <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span class="highlight">DỨA</span> !</a>
                                                                </li>
                                                            </ul>
                                                            <div class="header-divider"></div>
                                                        </li>

                                                        <li>
                                                            <a href="promotion/clearance-sale/">SALE OFF</a>
                                                            <div class="header-divider"></div>
                                                        </li>
                                                        <li>
                                                            <a href="index.php?controller=news">DiscoverYOU</a>
                                                            <div class="header-divider-1"></div>
                                                        </li>

                                                        <li class="settingmenu"><a href="wp-login.php"><img
                                                            src="./document/wp-content/themes/ananas/fe-assets/images//svg/icon_dang_nhap.svg"> Đăng nhập</a>
                                                        </li>
                                                        <li class="settingmenu">
                                                            <a href="your-wishlist"><img
                                                                src="./document/wp-content/themes/ananas/fe-assets/images/svg/icon_heart_header.svg"> Yêu thích</a>
                                                            </li>
                                                            <li class="settingmenu">
                                                                <a href="stores"><img
                                                                    src="./document/wp-content/themes/ananas/fe-assets/images/svg/icon_tim_cua_hang.svg"> Tìm cửa
                                                                hàng</a>
                                                            </li>
                                                            <li class="settingmenu">
                                                                <a href="search-order"><img src="./document/wp-content/themes/ananas/fe-assets/images/svg/icon_tra_cuu_don_hang.svg"> Tra cứu đơn hàng</a>
                                                                <div class="header-divider-1"></div>
                                                            </li>
                                                            <li class="aboutus">
                                                                <a href="coming-soon/">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ <span
                                                                    class="highlight">DỨA</span> !</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="hot-news-cont">
                                                            <div class="hot-news-slide">
                                                                <div class="cont-item"><a href="faqs/">FREE SHIPPING VỚI HOÁ ĐƠN TỪ 800K !</a></div>
                                                                <div class="cont-item"><a href="policy/">HÀNG 2 TUẦN NHẬN ĐỔI - GIÀY NỬA NĂM BẢO HÀNH</a></div>
                                                                <div class="cont-item"><a href="faqs">BUY MORE PAY LESS - ÁP DỤNG KHI MUA PHỤ KIỆN</a></div>
                                                                <div class="cont-item"><a href="faqs">BUY 2 GET 10% OFF - ÁP DỤNG VỚI TẤT CẢ BASIC TEE</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<!-- END HEADER MOBILE