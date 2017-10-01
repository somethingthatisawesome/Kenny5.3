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
<body cz-shortcut-listen="true">
    <div class="contact-style-3 sub-banner" id="Top">
        <div class="navigation-style-5 w-nav" data-animation="default" data-collapse="medium" data-duration="400">
            <div class="line-white-color social-wrapper style-2 w-hidden-tiny with-line">
                <a class="social-icon w-inline-block" href="./#"></a>
                <a class="social-icon twitter w-inline-block" href="./#"></a>
                <a class="insta social-icon w-inline-block" href="./#"></a>
            </div>
            <div class="w-container">
                <nav class="blue navigation-menu-style-1 w-nav-menu" role="navigation">
                   <a class="navigation-link w-inline-block white w--current" data-ix="slide-in-line-navigation-on-hover" href="./" style="transition: opacity 0.2s ease 0s;">
                    <div class="text-link">Giới thiệu</div>
                    <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%;"></div>
                </a>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle white" href="{{ URL::to('Product') }}">
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
                    <a class="dropdown-toggle w-dropdown-toggle white" href="{{URL::to('Service')}}">
                        <div>Dịch vụ</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle white" href="{{URL::to('Project')}}">
                        <div>Dự án</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle" style="transform-style: preserve-3d; transition: transform 200ms; transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%; transition: width 200ms;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle white" href="{{ URL::to('Location') }}">
                        <div>Tìm Đại Lý</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle" style="transform-style: preserve-3d; transition: transform 200ms; transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
                        <div 
class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%; transition: width 200ms;"></div>
                    </a>
					<nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle white" href="{{ URL::to('News') }}">
                        <div>Tin tức</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle" style="transform-style: preserve-3d; transition: transform 200ms; transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%; transition: width 200ms;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
                <div class="dropdown navigation-link w-dropdown" data-delay="0" data-hover="1" data-ix="slide-in-line-navigation-on-hover" style="transition: opacity 0.2s ease 0s; max-width: 940px;">
                    <a class="dropdown-toggle w-dropdown-toggle white" href="Employ.php">
                        <div>Tuyển dụng</div>
                        <div class="drop-down-arrow w-icon-dropdown-toggle" style="transform-style: preserve-3d; transition: transform 200ms; transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
                        <div class="line-navigation" data-ix="line-navigation-initial-app" style="width: 0%; transition: width 200ms;"></div>
                    </a>
                    <nav class="dropdown-list w-dropdown-list">
					</nav>
                </div>
				</nav>
                <div class="menu-button style-5 w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
            <div class="w-nav-overlay" data-wf-ignore=""></div>
        </div>
        <div class="container-center in-intro uper w-container">
            <div class="align-center">
                <a class="w-inline-block" data-ix="move-text-up-on-load" href="./" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 200ms, transform 300ms;"><img src="./images/5989714e76433a0001206b07_logo-small.png" width="101"></a>
                <div class="top-margin">
                    <h1 class="heading-white" data-ix="move-text-up-on-load-2" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 200ms, transform 300ms;">Kenny Paint</h1>
                    <div class="top-margin" data-ix="move-text-up-on-load-3" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 200ms, transform 300ms;"><a class="arrow button-icon w-button" href="{{ URL::to('Product') }}">Vào trang chủ</a></div>
                </div>
            </div>
        </div>
    </div>
	<div class="section" id="About">
   <div class="w-container">
      <div>
         <div class="w-row">
            <div class="w-col w-col-6">
               <div class="about-cricle"></div>
            </div>
            <div class="w-col w-col-6">
               <div>
                  <div class="less-margin top-title">
                     <div>
                        <h1 class="title-top">Về công ty</h1>
                     </div>
                  </div>
                  <div>
                    <!--about-->
					 </div>
                  <div class="top-margin"><a class="arrow button-icon w-button" href="./Project.php">Các dự án đã thực hiện</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
        @show

        <div class="container">
            @yield('content')
        </div>
        <div class="gray no-bottom-padding section">
   <div class="w-container">
      <div class="w-row">
         <div class="w-col w-col-5 w-col-stack">
            <div>
               <div class="less-margin top-title">
                  <div class="more top-margin">
                     <div class="sub-text-title">Stay in touch</div>
                     <h1 class="title-top">Bạn muốn liên hệ với chúng tôi?</h1>
                  </div>
               </div>
               <!--contact form-->
            </div>
         </div>
         <div class="w-col w-col-7 w-col-stack">
            <div class="align-center device-margin"><img src="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a11/5989714e76433a0001206ac7_03.jpg"></div>
         </div>
      </div>
   </div>
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
    <div class="contact-pop-up" data-ix="hide-popup-on-initial-apper" style="opacity: 0; transform: scaleX(1.1) scaleY(1.1) scaleZ(1); display: none;">
        <a class="logo-popup w-hidden-tiny w-inline-block" href="./#"></a>
        <div class="container-center uper w-container">
            <div class="top-title w-hidden-small w-hidden-tiny">
                <div class="align-center">
                    <div class="sub-text-title white">work with us</div>
                    <h1 class="heading-white title-top">Let's work together</h1></div>
            </div>
            <div>
                <div class="w-form">
                    <form data-name="Email Form 2" id="email-form-2" name="email-form-2">
                        <div class="w-row">
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-input" data-name="Name 3" id="name-3" maxlength="256" name="name" placeholder="Name" required="required" type="text">
                            </div>
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-input" data-name="Title" id="Title" maxlength="256" name="Title" placeholder="Title" type="text">
                            </div>
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Company" id="Company" maxlength="256" name="Company" placeholder="Company" required="required" type="text">
                            </div>
                        </div>
                        <div class="top-margin">
                            <div class="w-row">
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-input" data-name="Email" id="Email-3" maxlength="256" name="Email" placeholder="Email" required="required" type="email">
                                </div>
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-input" data-name="Phone Number" id="Phone-Number-2" maxlength="256" name="Phone-Number" placeholder="Phone Number" required="required" type="text">
                                </div>
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Budget" id="Budget" maxlength="256" name="Budget" placeholder="Budget" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="top-margin">
                            <textarea class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Project Details" id="Project-Details" maxlength="5000" name="Project-Details" placeholder="Project Details" required="required"></textarea>
                        </div>
                        <div class="top-margin">
                            <div class="align-center">
                                <input class="button-icon form-button w-button" data-wait="Please wait..." type="submit" value="Submit Details">
                            </div>
                        </div>
                    </form>
                    <div class="success-message w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Oops! Something went wrong while submitting the form</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="remove-button" data-ix="close-contact-popup-on-click" style="transition: all 0.3s ease 0s;"></div>
    </div>

<script src="./script/jquery.min.js.download" type="text/javascript"></script>
<script src="./script/webflow.0a61bb22d.js.download" type="text/javascript"></script>
    </body>
</html>