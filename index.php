<?php
/**
 * File Doc Comment
 *
 * @category MainPage
 * @package  MainPage_Index
 * @author   Minh Giang <mtnhatdanh@gmail.com>
 * @license  http://www.ResponsiveWebDesign.vn MinhGiang Licence
 * @link     minhgiang
 *
 */
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Responsive web design</title>
    <meta name="description" content="description" />
    <meta name="keywords" content="" />
    <meta name="author" content="Minh Giang">

    <link rel="shortcut icon" href="clover.png" type="image/x-icon" />

    <!-- Facebook Metadata /-->
    <meta property="fb:page_id" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content=""/>
    <meta property="og:title" content=""/>

    <!-- Google+ Metadata /-->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
       However, there is a blank style.css in the css directory should you prefer -->
    <link rel="stylesheet" href="css/gumby.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    
    <!-- link font-face -->
    <link rel="stylesheet" href="fonts/UTMGloria/stylesheet.css">
    <link rel="stylesheet" href="fonts/facebookfont/stylesheet.css">
    <link rel="stylesheet" href="fonts/neo_sans_intel/stylesheet.css">
    <link rel="stylesheet" href="fonts/robotofontsface/stylesheet.css">

    <script src="js/libs/modernizr-2.6.2.min.js"></script>

</head>

<body>

    <!-- 2.0 for modern browsers, 1.10 for .oldie -->
    <script>
    var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
    if (!oldieCheck) {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
    } else {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
    }
    </script>
    <script>
    if (!window.jQuery) {
    if (!oldieCheck) {
      document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
      document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
    }
    }
    </script>

    <!--
    Include gumby.js followed by UI modules.
    Or concatenate and minify into a single file
    <script src="js/libs/gumby.js"></script>
    <script src="js/libs/ui/gumby.retina.js"></script>
    <script src="js/libs/ui/gumby.fixed.js"></script>
    <script src="js/libs/ui/gumby.skiplink.js"></script>
    <script src="js/libs/ui/gumby.toggleswitch.js"></script>
    <script src="js/libs/ui/gumby.checkbox.js"></script>
    <script src="js/libs/ui/gumby.radiobtn.js"></script>
    <script src="js/libs/ui/gumby.tabs.js"></script>
    <script src="js/libs/ui/gumby.navbar.js"></script>
    <script src="js/libs/ui/gumby.fittext.js"></script>
    <script src="js/libs/ui/jquery.validation.js"></script>
    <script src="js/libs/gumby.init.js"></script>-->

    <script src="js/libs/gumby.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Change UA-XXXXX-X to be your site's ID -->
    <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
    load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
    </script>-->

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->

    <header>
        <nav class="navbar" id="nav3">
            <div class="row">
                <a class="toggle" gumby-trigger="#nav3 > .row > ul" href="#"><i class="icon-menu"></i></a>
                <h1 class="six columns logo">
                    <a href="#">
                        <img src="img/Clover_logo_MG.png" gumby-retina />
                    </a>
                </h1>
                <ul class="six columns">
                    <li><a href="?mod=trangchu">Giới thiệu</a></li>
                    <li>
                        <a href="#">Sản phẩm</a>
                        <div class="dropdown">
                            <ul>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section role="main_container">
    <?php
    if(!isset($mod)) $mod = 'trangchu';
    require 'modules/'.$mod.'.php';
    ?>
    </section>

    <footer>
        <div class="row" id="first_row">
            <div class="five columns text-center border-right">
                <h4>Responsive web design</h4>
                <p>Thiết kế web với độ phản hồi cao, hoạt động trên mọi thiết bị. Công nghệ hướng tới tương lai, tạo lợi thế dễ dàng quảng bá thương hiệu cho doanh nghiệp.</p>
            </div>
            <div class="four columns text-center border-right">
                <h4><i class="icon-chat"></i></h4>
                <h5>Liên lạc trực tuyến</h5>
                <table id="bangll">
                    <tr>
                        <td><i class="icon-skype"></i></td>
                        <td><a href="skype:mtnhatdanh?chat">mtnhatdanh</a></td>
                    </tr>
                    <tr>
                        <td><i class="icon-mail"></i></td>
                        <td><a href="mailto:mtnhatdanh@outlook.com">mtnhatdanh@outlook.com</a></td>
                    </tr>
                </table>
            </div>
            <div class="three columns text-center">
                <h4><i class="icon-monitor"></i><i class="icon-mobile"></i></h4>
                <p>Dựng phần mềm trên nền RWD, xem thông tin, báo cáo mọi lúc, mọi nơi.</p>
            </div>
        </div>
        <div class="row" id="second_row">
            <div class="twelve columns text-center">
                <h4><i class="icon-facebook-squared"></i> <i class="icon-gplus"></i> <i class="icon-twitter"></i></h4>
                <span>Design by: Minh Giang</span><br>
                <span>Copyright © 2013</span>
            </div>
        </div>
    </footer>

</body>
</html>
