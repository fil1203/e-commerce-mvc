<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>

            <header id="header"><!--header-->
                <div class="header_top"><!--header_top-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="contactinfo">
                                    <ul class="nav navbar-nav collapse navbar-collapse left">


                                        <li><a href="/blog/">Блог |</a></li>
                                        <li><a href="/buy/">Как купить? |</a></li>
                                        <li><a href="/delivery/">Доставка и оплата |</a></li>
                                        <li><a href="/guarantee/">Гарантия |</a></li>
                                        <li><a href="/About/">О нас |</a></li>
                                        <li><a href="/Wholesale/">Опт |</a></li>
                                        <li><a href="/questions/">Вопросы и ответы |</a></li>
                                        <li><a href="/contacts/">Контакты </a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <?php  if (isset($user['role']) && ($user['role'] == 'admin')) :?>
                                <a href="/admin/" class="phone pull-left">Админпанель</a>
                                <?php endif;?>
                                <div class="phone pull-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>   <span>(050) 194-84-20</span>
                                </div>

                                <div class="social-icons">

                                    <ul class="nav navbar-nav">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--header-middle-->
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 ">
                            <div class="logo pull-left">
                                <a href="/"><img src="/template/images/home/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-6 search">
                                <form class="form-inline" role="form" method="post" action="/search/">
                                    <div class="form-group  col-sm-9 ">
                                        <input type="text" name="words"  class="form-control "  placeholder="Поиск">
                                    </div>
                                    <input type="submit" name="bsearch" class="btn btn-info" value="Найти">
                                </form>
                        </div>
                        <div class="col-sm-4  ">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="/cart" class="middle-menu">(<span id="cart-count"><?php echo Cart::countItems();?></span>)<i class="fa fa-shopping-cart "></i> Корзина

                                        </a>
                                    </li>

                                    <?php if (User::isGuest()): ?>
                                        <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                                    <?php else: ?>
                                        <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                        <li><a href="/user/logout/" ><i class="fa fa-unlock"></i> </a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="mainmenu ">
                                <div class=" mainmenu-c">
                                    <ul class="nav  nav-justified ">
                                        <li><a href="/">Главная</a></li>
                                        <?php if(isset($categories)) :?>
                                        <?php foreach($categories as $categoryItem):?>
                                            <li><a href="/category/<?php echo $categoryItem['id'];?>" class="mainmenu" > <?php echo $categoryItem['name'];?></a></li>
                                        <?php endforeach;?>
                                        <?php endif;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->


        </header><!--/header-->