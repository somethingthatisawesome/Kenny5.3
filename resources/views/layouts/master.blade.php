<!DOCTYPE html>
<!-- saved from url=(0061)http://sangs-fresh-project.webflow.io/contact/contact-style-3 -->
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    {!! HTML::style('la-assets/css/css.css') !!}
    <style type="text/css">
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px
        }
    </style>
    <style type="text/css">
        @media print {
            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }
        
        @media screen {
            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style type="text/css">
        .gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }
        
        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
		#imagepreview
		{
			display:block;
			margin:auto;
			 height: auto; 
			width: auto; 
			max-width: 250px; 
			max-height: 250px;
		}
		#result #colors li
		{
			display:inline-block;
			width:150px;
			height:70px;
		}
		#result #colors .color
		{
			width:100%;
			height:100%;
		}
    </style>
	
    <title>Cons - Construction Ui Kit Webflow Template</title>
    
    {!! HTML::style('la-assets/css/sangs-fresh-project.webflow.21573c96a.css') !!}
    {!! HTML::script('la-assets/js/webfont.js.download') !!}
     {!! HTML::style('la-assets/css/css(1)') !!}
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Poppins:300,regular,500,600,700", "Playfair Display:regular,italic,700,700italic,900,900italic"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a5e_ico-fav.png" rel="shortcut icon" type="image/x-icon">
    <link href="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206b2d_ico-phone.png" rel="apple-touch-icon">
    {!! HTML::script('la-assets/js/common.js.download') !!}
    {!! HTML::script('la-assets/js/util.js.download') !!}
    {!! HTML::script('la-assets/js/marker.js.download') !!}
    {!! HTML::script('la-assets/js/map.js.download') !!}
    {!! HTML::script('la-assets/js/infowindow.js.download') !!}
    <style type="text/css">
        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
        
        .gm-style img {
            max-width: none;
        }
    </style>
    {!! HTML::script('la-assets/js/onion.js.download') !!}
    {!! HTML::script('la-assets/js/controls.js.download') !!}
    {!! HTML::script('la-assets/js/stats.js.download') !!}
	<style>
	.background
	{
		min-height:800px;
	}
	</style>
</head>
    <body>
        @section('menu')
<div class="navigation-style-1 w-nav" data-animation="default" data-collapse="medium" data-duration="400">
        <div class="top-navigation">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-6">
                        <div>
                            <div class="troll-free-text">Toll Free&nbsp;<span class="number">1.800.123.4567</span></div>
                        </div>
                    </div>
                    <div class="w-col w-col-6">
                        <div class="align-right">
                            <div class="in-device social-wrapper">
                                <a class="social-icon w-inline-block" href="./projects/project-style-1#"></a>
                                <a class="social-icon twitter w-inline-block" href="./projects/project-style-1#"></a>
                                <a class="insta social-icon w-inline-block" href="./projects/project-style-1#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top"></div>
        <div class="w-container">
            <a class="brand-logo w-nav-brand" href="{{ URL::to('Home')}}"><img sizes="170px" src="./Product_files/5989714e76433a0001206a93_logo.png" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a93_logo-p-500x159.png 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a93_logo-p-800x254.png 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a93_logo-p-1080x342.png 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a93_logo.png 1701w" width="170"></a>
            <nav class="navigation-menu-style-1 w-nav-menu" role="navigation">
                <a class="navigation-link w-inline-block" data-ix="slide-in-line-navigation-on-hover" href="{{ URL::to('Home')}}" style="transition: opacity 0.2s ease 0s;">
                    <div class="text-link">Giới thiệu</div>
                    <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%;"></div>
                </a>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle" href="{{ URL::to('Product') }}">
                        <div>Sản phẩm</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					<!--
					<a class="dropdown-link w-dropdown-link" href="./homepages/homepage-style-1">Homepage Style 1</a>
					-->
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle" href="./Service.php">
                        <div>Dịch vụ</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					<a class="dropdown-link w-dropdown-link" href="./FAQ.php">Những câu hỏi thường gặp</a>
					<a class="dropdown-link w-dropdown-link" href="./AuthenticProduct.php">Nhận diện sản phẩm chính hãng</a>
					<a class="dropdown-link w-dropdown-link" href="./Model.php">Bộ sưu tập mẫu nhà đẹp</a>
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle" href="Project.php">
                        <div>Dự án</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle" style="transform-style: preserve-3d; transition: transform 200ms; transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%; transition: width 200ms;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle" href="Location.php">
                        <div>Tìm Đại Lý</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle" style="transform-style: preserve-3d; transition: transform 200ms; transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
                        <div 
class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%; transition: width 200ms;"></div>
                    </a>
					<nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle" href="About.php">
                        <div>Tin tức</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle" style="transform-style: preserve-3d; transition: transform 200ms; transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%; transition: width 200ms;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle" href="Employ.php">
                        <div>Tuyển dụng</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle" style="transform-style: preserve-3d; transition: transform 200ms; transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%; transition: width 200ms;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
            </nav>
            <div class="menu-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
        <div class="w-nav-overlay" data-wf-ignore=""></div>
    </div>
    
        @show

        <div class="container">
            @yield('content')
        </div>
    @section('footer')
    <footer class="footer-style-2">
        <div class="social-footer w-clearfix w-hidden-tiny">
            <a class="in-footer social-icon w-inline-block" href="http://sangs-fresh-project.webflow.io/service/service-style-3#"></a>
            <a class="in-footer social-icon twitter w-inline-block" href="http://sangs-fresh-project.webflow.io/service/service-style-3#"></a>
            <a class="in-footer insta social-icon w-inline-block" href="http://sangs-fresh-project.webflow.io/service/service-style-3#"></a>
            <a class="google in-footer social-icon w-inline-block" href="http://sangs-fresh-project.webflow.io/service/service-style-3#"></a>
            <div class="triangle-footer"></div>
        </div>
        <div class="w-container">
            <div class="align-center">
                <a class="w-inline-block" href="http://sangs-fresh-project.webflow.io/"><img sizes="(max-width: 479px) 100vw, 250px" src="./Service_files/5989714e76433a0001206a93_logo.png" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a93_logo-p-500x159.png 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a93_logo-p-800x254.png 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a93_logo-p-1080x342.png 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206a93_logo.png 1701w" width="250"></a>
            </div>
            <div class="more top-margin">
                <div class="w-row">
                    <div class="w-col w-col-4">
                        <div>
                            <div>
                                <h4 class="heading-footer-style-2">New York</h4>
                                <div class="top-margin">
                                    <div class="contact-list">
                                        <p>204 S Blanche St Mounds,
                                            <br>IL 62964-1104</p>
                                    </div>
                                    <div class="contact-list phone">
                                        <p>1.800.123.4567</p>
                                    </div>
                                    <div class="contact-list mail">
                                        <p>mail@cons.io</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-col w-col-4">
                        <div>
                            <h4 class="heading-footer-style-2">Melbourne</h4>
                            <div class="top-margin">
                                <div class="contact-list">
                                    <p>204 S Blanche St Mounds,
                                        <br>IL 62964-1104</p>
                                </div>
                                <div class="contact-list phone">
                                    <p>1.800.123.4567</p>
                                </div>
                                <div class="contact-list mail">
                                    <p>mail@cons.io</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-col w-col-4">
                        <div>
                            <div>
                                <h4 class="heading-footer-style-2">Milano</h4>
                                <div class="top-margin">
                                    <div class="contact-list">
                                        <p>204 S Blanche St Mounds,
                                            <br>IL 62964-1104</p>
                                    </div>
                                    <div class="contact-list phone">
                                        <p>1.800.123.4567</p>
                                    </div>
                                    <div class="contact-list mail">
                                        <p>mail@cons.io</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    @show
      {!! HTML::script('la-assets/js/jquery.min.js.download') !!}
      {!! HTML::script('la-assets/js/webflow.0a61bb22d.js.download') !!}
    </body>
</html>