<!DOCTYPE html>
<html>

<head>
    <title>SHOES STORE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="public/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>

    <!-- <script src="public/js/filter.js"></script> -->

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div id="site">
        <div id="container">
            <div id="header-wp">
                <div id="head-top" class="clearfix">
                    <div class="wp-inner">
                        <a href="" title="" id="payment-link" class="fl-left">Hình thức thanh toán</a>
                        <div id="main-menu-wp" class="fl-right">
                            <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="?" title="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="?mod=product" title="">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="?mod=post" title="">Blog</a>
                                </li>
                                <li>
                                    <a href="?mod=page&action=contact" title="">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="?mod=page&action=introduce" title="">Giới thiệu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="head-body" class="clearfix nav-container">
                    <div class="wp-inner d-flex">
                        <a href="?mod=member" title="" id="logo" class="fl-left"><img src="public/images/logo.png" /></a>
                        <div id="search-wp" class="fl-left">
                            <form method="POST" action="">
                                <input type="text" name="s" id="s" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                <button type="submit" id="sm-s">Tìm kiếm</button>
                            </form>
                        </div>
                        <div id="action-wp" class="fl-right d-flex">
                            <div id="advisory-wp" class="fl-left">
                                <span class="title">Tư vấn</span>
                                <span class="phone">0987.654.321</span>
                            </div>
                            <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <a href="?page=cart" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="num">2</span>
                            </a>
                            <div id="cart-wp" class="fl-right">
                                <a href="?mod=cart&action=showCart" style="color: #fff;">
                                    <div id="btn-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            $num_order = $_SESSION['cart']['info']['num_order'];
                                        ?>
                                            <span id="num"><?php echo $num_order ?></span>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </a>
                                <div id="dropdown">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        $num_order = $_SESSION['cart']['info']['num_order'];
                                    ?>
                                        <p class="desc">Có <span><?php echo $num_order ?> sản phẩm</span> trong giỏ hàng</p>
                                        <ul class="list-cart">
                                            <?php
                                            $temp = 0;
                                            foreach ($_SESSION['cart']['buy'] as $data) {
                                                foreach ($data as $item) {
                                                    $temp++;
                                                    if ($temp <= 2) {
                                            ?>
                                                        <li class="clearfix">
                                                            <a href="" title="" class="thumb fl-left">
                                                                <img src="<?php echo base_url(); ?>/admin/<?php echo $item['product_thumb']; ?>" alt="">
                                                            </a>

                                                            <div class="info fl-right">
                                                                <a href="" title="" class="product-name"><?php echo $item['product_name']; ?></a>
                                                                <p class="price"><?php echo currency_format($item['sub_total']); ?></p>
                                                                <p class="qty">Số lượng: <span><?php echo $item['product_quantity']; ?></span></p>
                                                                <p class="qty">Size: <span style="font-weight: bold; color: #282424;"><?php echo $item['product_size']; ?></span></p>
                                                            </div>
                                                        </li>
                                                    <?php
                                                    }
                                                    if ($temp == 3) {
                                                    ?>
                                                        <a href="?mod=cart&action=showCart" class="see_more">Xem thêm .... </a>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>
                                        <div class="total-price clearfix">
                                            <p class="title fl-left">Tổng:</p>
                                            <p class="price fl-right">
                                                <?php
                                                if (isset($_SESSION['cart'])) {
                                                    $total = $_SESSION['cart']['info']['total'];
                                                ?>
                                                    <?php echo currency_format($total); ?>
                                                <?php
                                                }
                                                ?></p>
                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="?mod=cart&action=showCart" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <a href="?mod=checkout" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                        </dic>
                                    <?php
                                    } else {
                                    ?>
                                        <p class="desc_empty">Giỏ hàng chưa có sản phẩm nào</p>
                                        <img src="public/images/empty_cart.png" alt="">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="dropdown">
                                <!-- <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                    <span class="caret"></span></button> -->
                                <div id="member-btn"type="button" data-toggle="dropdown">
                                    <button class="about__box-icon" id="show-login">
                                        <span class="input-icon"><i class="fa fa-user"></i></span>
                                        <div class="member-name">
                                            <span><?php echo $_SESSION['username']; ?></span>
                                        </div>
                                    </button>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a href="?mod=member&action=info">Shoes Member</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?mod=member&action=logout">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay"></div>
    <script src="public/js/login_logout.js"></script>
    