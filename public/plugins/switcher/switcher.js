function addSwitcher()
{
	var currentURL      = window.location.href; 
	var urlLTR = '';
	var urlRTL = '';
	if(currentURL.indexOf('xhtml-rtl') > -1){
		urlLTR = currentURL.replace('xhtml-rtl', 'xhtml')
		urlRTL = currentURL;
	}else{
		urlRTL = currentURL.replace('xhtml', 'xhtml-rtl')
		urlLTR = currentURL;
	}
	
	var dzSwitcher = '<div id="dzSwitcher-right" class="styleswitcher-right"><div class="switcher-btn-bx"><a class="switch-btn closed"><span class="fa fa-cogs fa-lg"></span></a></div><div class="styleswitcher-inner"><a href="javascript:void(0);" class="dez-page btn btn-sm" onclick="deleteAllCookie()">Delete All Cookie</a><div class="theme-box"><h5 class="switcher-title"><span>Theme</span></h5><h6 class="switcher-title">Standard</h6><ul val="themeFullColor" class="color-skins-db theme-panel-save"><li><a class="theme-skin skin-1" href="#" dir="css/skin/skin-1" data-logo-selector=".logo-dark img, .logo-white img, .site-header.center .logo-header img" data-logo-image="images/logo-dark.png, images/logo-white.png,images/logo.png" logo="images/logo.png"></a></li><li><a class="theme-skin skin-2" href="#" dir="css/skin/skin-2" data-logo-selector=".logo-dark img, .logo-white img, .site-header.center .logo-header img" data-logo-image="images/logo-dark-2.png, images/logo-white-2.png,images/logo-2.png" logo="images/logo-2.png"></a></li><li><a class="theme-skin skin-3" href="#" dir="css/skin/skin-3" data-logo-selector=".logo-dark img, .logo-white img, .site-header.center .logo-header img" data-logo-image="images/logo-dark-3.png, images/logo-white-3.png,images/logo-3.png" logo="images/logo-3.png"></a></li><li><a class="theme-skin skin-4" href="#" dir="css/skin/skin-4" data-logo-selector=".logo-dark img, .logo-white img, .site-header.center .logo-header img" data-logo-image="images/logo-dark-4.png, images/logo-white-4.png,images/logo-4.png" logo="images/logo-4.png"></a></li><li><a class="theme-skin skin-5" href="#" dir="css/skin/skin-5" data-logo-selector=".logo-dark img, .logo-white img, .site-header.center .logo-header img" data-logo-image="images/logo-dark-5.png, images/logo-white-5.png,images/logo-5.png" logo="images/logo-5.png"></a></li><li><a class="theme-skin skin-6" href="#" dir="css/skin/skin-6" data-logo-selector=".logo-dark img, .logo-white img, .site-header.center .logo-header img" data-logo-image="images/logo-dark-6.png, images/logo-white-6.png,images/logo-6.png" logo="images/logo-6.png"></a></li><li><a class="theme-skin skin-7" href="#" dir="css/skin/skin-7" data-logo-selector=".logo-dark img, .logo-white img, .site-header.center .logo-header img" data-logo-image="images/logo-dark-7.png, images/logo-white-7.png,images/logo-7.png" logo="images/logo-7.png"></a></li><li><a class="theme-skin skin-8" href="#" dir="css/skin/skin-8" data-logo-selector=".logo-dark img, .logo-white img, .site-header.center .logo-header img" data-logo-image="images/logo-dark-8.png, images/logo-white-8.png,images/logo-8.png" logo="images/logo-8.png"></a></li></ul></div><div class="theme-box"><h5 class="switcher-title"><span>Layout</span></h5><ul val="layout" class="layout-view theme-panel-save"><li class="wide-layout active"><a href="#" dir="wide-layout">Wide</a></li><li class="boxed"><a href="#" dir="boxed">Boxed</a></li><li class="frame"><a href="#" dir="frame">Frame</a></li></ul><div id="ThemeRangeSlider" class="price-slide-2 range-slider" style="display:none"><div class="price"><input type="text" id="FramePadding" class="amount" readonly="" value="20px"><div id="slider-range-3"></div></div></div></div><div class="theme-box"><h5 class="switcher-title"><span>Header</span></h5><ul val="header" class="header-view theme-panel-save"><li class="header-fixed active"><a href="#" dir="sticky-header">Fixed</a></li><li class="header-static"><a href="#" dir="sticky-no">Static</a></li></ul></div><div class="theme-box"><h5 class="switcher-title"><span>Background</span></h5><h6 class="switcher-title">Color</h6><ul val="bgColor" class="bg-color-switcher theme-panel-save"><li><a class="bg-color-1" href="#" dir="#e8262e"></a></li><li><a class="bg-color-2" href="#" dir="#60cac8"></a></li><li><a class="bg-color-3" href="#" dir="#ab5ea4"></a></li><li><a class="bg-color-4" href="#" dir="#7baf4b"></a></li><li><a class="bg-color-5" href="#" dir="#d1a068"></a></li><li><a class="bg-color-6" href="#" dir="#f2a809"></a></li><li><a class="bg-color-7" href="#" dir="#5492f7"></a></li><li><a class="bg-color-8" href="#" dir="#f35711"></a></li></ul><h6 class="switcher-title">Image</h6><ul val="bgImage" class="background-switcher theme-panel-save"><li><img src="images/switcher/switcher-bg/bg1.jpg" dir="images/background/bg-main/bg1.jpg" alt=""></li><li><img src="images/switcher/switcher-bg/bg2.jpg" dir="images/background/bg-main/bg2.jpg" alt=""></li><li><img src="images/switcher/switcher-bg/bg3.jpg" dir="images/background/bg-main/bg3.jpg" alt=""></li><li><img src="images/switcher/switcher-bg/bg4.jpg" dir="images/background/bg-main/bg4.jpg" alt=""></li></ul><h6 class="switcher-title">Pattern</h6><ul val="bgPatten" class="pattern-switcher theme-panel-save"><li><img src="images/switcher/switcher-patterns/bg1.jpg" dir="images/pattern/pt1.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg2.jpg" dir="images/pattern/pt2.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg3.jpg" dir="images/pattern/pt3.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg4.jpg" dir="images/pattern/pt4.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg5.jpg" dir="images/pattern/pt5.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg6.jpg" dir="images/pattern/pt6.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg7.jpg" dir="images/pattern/pt7.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg8.jpg" dir="images/pattern/pt8.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg9.jpg" dir="images/pattern/pt9.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg10.jpg" dir="images/pattern/pt10.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg11.jpg" dir="images/pattern/pt11.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg12.jpg" dir="images/pattern/pt12.jpg" alt=""></li></ul></div></div></div>';
	
	if($("#dzSwitcher").length == 0) {
		jQuery('body').append(dzSwitcher);
	}
}

function setheaderfooter()
{
	var currentURL      = window.location.href;
	
	if(currentURL.indexOf('header-style') > -1 || currentURL.indexOf('footer-style') > -1){
		return false;
	}
	
	var header_v1 = '<header class="site-header header center mo-left header-style-2"> <div class="sticky-header main-bar-wraper navbar-expand-lg"> <div class="main-bar clearfix "> <div class="container clearfix"> <div class="logo-header mostion"><a href="index.html" class="dez-page"><img src="images/logo-2.png" alt=""></a></div><button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button> <div class="header-nav navbar-collapse collapse justify-content-between" id="navbarNavDropdown"><div class="logo-header mostion"><a href="index.html" class="dez-page"><img src="images/logo-2.png" alt=""></a></div><ul class="nav navbar-nav nav1"><li class="active"><a href="javascript:void(0);">Home<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="index.html">Home - Pizza & Burger</a></li><li><a href="index-2.html">Home - Cake Bakery</a></li><li><a href="index-3.html">Home - South Indian</a></li><li><a href="index-4.html">Home - Pizza 2</a></li></ul></li><li><a href="javascript:void(0);">Pages<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="about-1.html">About Us</a></li><li><a href="our-services.html">Our Services</a></li><li><a href="faq.html">FAQs</a></li><li><a href="booking.html">Booking</a></li><li><a href="error-404.html">404 Error</a></li><li><a href="calendar.html">Calendar</a></li><li><a href="coming-soon.html">Coming Soon</a></li><li><a href="team.html">Team</a></li><li><a href="javascript:void(0);">Contact Us <i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="contact-1.html">Contact Us 1</a></li><li><a href="contact-2.html">Contact Us 2</a></li></ul></li></ul></li><li><a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a><ul class="sub-menu tab-content"><li><a href="javascript:;">Header Style <i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="header-style-1.html">Header 1</a></li><li><a href="header-style-2.html">Header 2</a></li><li><a href="header-style-3.html">Header 3</a></li><li><a href="header-style-4.html">Header 4</a></li></ul></li><li> <a href="javascript:;">Footer Style<i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="footer-style-1.html">Footer 1 </a></li><li><a href="footer-style-2.html">Footer 2</a></li><li><a href="footer-style-3.html">Footer 3</a></li><li><a href="footer-style-4.html">Footer 4</a></li></ul></li></ul></li></ul><ul class="nav navbar-nav nav2"><li><a href="javascript:void(0);">Our Menu<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="our-menu.html">Menu Style 1</a></li><li><a href="our-menu-2.html">Menu Style 2</a></li><li><a href="our-menu-3.html">Menu Style 3</a></li><li><a href="our-menu-4.html">Menu Style 4</a></li></ul></li><li><a href="javascript:void(0);">Shop <i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="shop.html">Shop</a></li><li><a href="shop-sidebar.html">Shop Sidebar</a></li><li><a href="shop-product-details.html">Product Details</a></li><li><a href="shop-cart.html">Cart</a></li><li><a href="shop-wishlist.html">Wishlist</a></li><li><a href="shop-checkout.html">Checkout</a></li><li><a href="shop-login.html">Login</a></li><li><a href="shop-register.html">Register</a></li></ul></li><li class="has-mega-menu"><a href="javascript:void(0);">Blog<i class="fa fa-chevron-down"></i></a><ul class="mega-menu"><li> <a href="javascript:;">Blog Grid</a><ul><li><a href="blog-grid-2.html">Grid 2</a></li><li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li><li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li><li><a href="blog-grid-3.html">Grid 3</a></li></ul></li><li> <a href="javascript:;">Blog Half Image</a><ul><li><a href="blog-half-img.html">Half image</a></li><li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li><li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li></ul></li><li> <a href="javascript:;">Blog Large Image</a><ul><li><a href="blog-large-img.html">Large image</a></li><li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li><li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li></ul></li><li> <a href="javascript:;">Blog Details</a><ul><li><a href="blog-single.html">Single</a></li><li><a href="blog-single-sidebar.html">Single sidebar</a></li><li><a href="blog-single-left-sidebar.html">Single sidebar right</a></li></ul></li></ul></li></ul> </div></div></div></div></header>';
	
	var footer_v1 = '<footer class="site-footer " style="background-image: url(images/background/bg2.jpg); background-size: cover;"><div class="footer-top bg-line-top"><div class="container"><div class="row"><div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"><div class="widget widget_getintuch"><h5 class="footer-title text-white">Contact Us</h5><ul><li> <i class="fa fa-map-marker"></i><p>Marmora City, Vietnam</p></li><li> <i class="fa fa-phone"></i><p>0800-123456</p></li><li> <i class="fa fa-mobile"></i><p>(+91) 0800-123456</p></li><li> <i class="fa fa-envelope"></i><p>info@example.com</p></li></ul></div></div><div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"><div class="widget recent-posts-entry"><h4 class="footer-title">Recent Post</h4><div class="widget-post-bx"><div class="widget-post clearfix"><div class="dlab-post-media radius-sm"> <img src="images/blog/recent-blog/pic1.jpg" alt=""></div><div class="dlab-post-info"><div class="dlab-post-header"><h6 class="post-title"><a href="blog-single.html">The Background Of Bakery Now</a></h6></div><div class="dlab-post-meta"><ul><li class="post-date"> <i class="la la-clock-o"></i><strong>March 25, 2020</strong></li></ul></div></div></div><div class="widget-post clearfix"><div class="dlab-post-media radius-sm"> <img src="images/blog/recent-blog/pic2.jpg" alt=""></div><div class="dlab-post-info"><div class="dlab-post-header"><h6 class="post-title"><a href="blog-single.html">How Bakery Can Increase Your Profit</a></h6></div><div class="dlab-post-meta"><ul><li class="post-date"> <i class="la la-clock-o"></i><strong>March 25, 2020</strong></li></ul></div></div></div></div></div></div><div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"><div class="widget widget_services border-0"><h4 class="footer-title">Quick Links</h4><ul class="list-2"><li><a href="index.html">Home</a></li><li><a href="about-1">About</a></li><li><a href="our-menu.html">Our Menu</a></li><li><a href="faq.html">FAQ</a></li><li><a href="blog-grid-2.html">Blog</a></li><li><a href="shop.html">Shop</a></li><li><a href="contact-1.html">Contact</a></li><li><a href="team.html">Team</a></li><li><a href="calendar.html">Calendar</a></li></ul></div></div><div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"><div class="widget border-0"><h4 class="footer-title">Opening Hours</h4><p class="m-b20">Our support available to help you 24 hours a day, seven days a week.</p><ul class="work-hour-list"><li> <span class="day"><span>Monday to Friday</span></span> <span class="timing">7AM - 5PM</span></li><li> <span class="day"><span>Saturday</span></span> <span class="timing">10AM - 5PM</span></li><li> <span class="day"><span>Sunday</span></span> <span class="timing">Closed</span></li></ul></div></div></div></div></div><div class="footer-bottom"><div class="container"><div class="row"><div class="col-lg-6 col-md-6 text-left"> <span>Copyright © 2020 DexignZone. all rights reserved.</span></div><div class="col-lg-6 col-md-6 text-right"><div class="widget-link"><ul><li><a href="about-1.html">About Us</a></li><li><a href="faq.html">Faq</a></li></ul></div></div></div></div></div> </footer>';
	
	var header_v2 = '<header class="site-header mo-left header primary pizza-header"> <div class="sticky-header main-bar-wraper navbar-expand-lg"> <div class="main-bar clearfix "> <div class="container clearfix"> <div class="logo-header mostion"><a href="index.html"><img src="images/pizza-logo.png" alt=""></a></div><button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button> <div class="extra-nav"> <div class="extra-cell"><ul class="extra-info"><li><div class="header-phone-no"><img src="images/icons/telephone.png" alt=""/><span>24/7 pizza delivery service</span><h2>920 234 5768</h2></div></li><li><div class="menu-btn"><span></span><span></span><span></span></div></li></ul></div></div><div class="dlab-quik-search "> <form action="#"> <input name="search" value="" type="text" class="form-control" placeholder="Type to search"> <span id="quik-search-remove"><i class="ti-close"></i></span> </form> </div><div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown"><div class="logo-header"><a href="index.html"><img src="images/pizza-logo.png" alt=""></a></div><ul class="nav navbar-nav"><li class="active"><a href="javascript:void(0);">Home<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="index.html">Home - Pizza & Burger</a></li><li><a href="index-2.html">Home - Cake Bakery</a></li><li><a href="index-3.html">Home - South Indian</a></li><li><a href="index-4.html">Home - Pizza 2</a></li></ul></li><li><a href="javascript:void(0);">Pages<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="about-1.html">About Us</a></li><li><a href="our-services.html">Our Services</a></li><li><a href="faq.html">FAQs</a></li><li><a href="booking.html">Booking</a></li><li><a href="error-404.html">404 Error</a></li><li><a href="calendar.html">Calendar</a></li><li><a href="coming-soon.html">Coming Soon</a></li><li><a href="team.html">Team</a></li><li><a href="javascript:void(0);">Contact Us <i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="contact-1.html">Contact Us 1</a></li><li><a href="contact-2.html">Contact Us 2</a></li></ul></li></ul></li><li><a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a><ul class="sub-menu tab-content"><li><a href="javascript:;">Header Style <i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="header-style-1.html">Header 1</a></li><li><a href="header-style-2.html">Header 2</a></li><li><a href="header-style-3.html">Header 3</a></li><li><a href="header-style-4.html">Header 4</a></li></ul></li><li> <a href="javascript:;">Footer Style<i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="footer-style-1.html">Footer 1 </a></li><li><a href="footer-style-2.html">Footer 2</a></li><li><a href="footer-style-3.html">Footer 3</a></li><li><a href="footer-style-4.html">Footer 4</a></li></ul></li></ul></li><li><a href="javascript:void(0);">Our Menu<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="our-menu.html">Menu Style 1</a></li><li><a href="our-menu-2.html">Menu Style 2</a></li><li><a href="our-menu-3.html">Menu Style 3</a></li><li><a href="our-menu-4.html">Menu Style 4</a></li></ul></li><li><a href="javascript:void(0);">Shop <i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="shop.html">Shop</a></li><li><a href="shop-sidebar.html">Shop Sidebar</a></li><li><a href="shop-product-details.html">Product Details</a></li><li><a href="shop-cart.html">Cart</a></li><li><a href="shop-wishlist.html">Wishlist</a></li><li><a href="shop-checkout.html">Checkout</a></li><li><a href="shop-login.html">Login</a></li><li><a href="shop-register.html">Register</a></li></ul></li><li class="has-mega-menu"><a href="javascript:void(0);">Blog<i class="fa fa-chevron-down"></i></a><ul class="mega-menu"><li> <a href="javascript:;">Blog Grid</a><ul><li><a href="blog-grid-2.html">Grid 2</a></li><li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li><li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li><li><a href="blog-grid-3.html">Grid 3</a></li></ul></li><li> <a href="javascript:;">Blog Half Image</a><ul><li><a href="blog-half-img.html">Half image</a></li><li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li><li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li></ul></li><li> <a href="javascript:;">Blog Large Image</a><ul><li><a href="blog-large-img.html">Large image</a></li><li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li><li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li></ul></li><li> <a href="javascript:;">Blog Details</a><ul><li><a href="blog-single.html">Single</a></li><li><a href="blog-single-sidebar.html">Single sidebar</a></li><li><a href="blog-single-left-sidebar.html">Single sidebar right</a></li></ul></li></ul></li></ul><div class="dlab-social-icon"><ul><li><a class="site-button sharp-sm fa fa-facebook" href="javascript:void(0);"></a></li><li><a class="site-button sharp-sm fa fa-twitter" href="javascript:void(0);"></a></li><li><a class="site-button sharp-sm fa fa-linkedin" href="javascript:void(0);"></a></li><li><a class="site-button sharp-sm fa fa-instagram" href="javascript:void(0);"></a></li></ul></div><div class="pizza-btn-close">&times;</div></div></div></div></div></header>';
	
	var header_v3 = '<header class="site-header header mo-left header-basic"> <div class="sticky-header main-bar-wraper navbar-expand-lg"> <div class="main-bar clearfix "> <div class="container clearfix"> <div class="logo-header mostion logo-dark"><a href="index.html"><img src="images/logo-dark-6.png" alt=""></a></div><button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button> <div class="extra-nav"> <div class="extra-cell"><ul class="extra-info"><li><a href="contact-1.html" class="btn">Contact Us</a></li></ul></div></div><div class="dlab-quik-search "> <form action="#"> <input name="search" value="" type="text" class="form-control" placeholder="Type to search"> <span id="quik-search-remove"><i class="ti-close"></i></span> </form> </div><div class="header-nav navbar-collapse collapse justify-content-end primary" id="navbarNavDropdown"><div class="logo-header"><a href="index.html"><img src="images/logo-dark-6.png" alt=""></a></div><ul class="nav navbar-nav"><li class="active"><a href="javascript:void(0);">Home<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="index.html">Home - Pizza & Burger</a></li><li><a href="index-2.html">Home - Cake Bakery</a></li><li><a href="index-3.html">Home - South Indian</a></li><li><a href="index-4.html">Home - Pizza 2</a></li></ul></li><li><a href="javascript:void(0);">Pages<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="about-1.html">About Us</a></li><li><a href="our-services.html">Our Services</a></li><li><a href="faq.html">FAQs</a></li><li><a href="booking.html">Booking</a></li><li><a href="error-404.html">404 Error</a></li><li><a href="calendar.html">Calendar</a></li><li><a href="coming-soon.html">Coming Soon</a></li><li><a href="team.html">Team</a></li><li><a href="javascript:void(0);">Contact Us <i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="contact-1.html">Contact Us 1</a></li><li><a href="contact-2.html">Contact Us 2</a></li></ul></li></ul></li><li><a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a><ul class="sub-menu tab-content"><li><a href="javascript:;">Header Style <i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="header-style-1.html">Header 1</a></li><li><a href="header-style-2.html">Header 2</a></li><li><a href="header-style-3.html">Header 3</a></li><li><a href="header-style-4.html">Header 4</a></li></ul></li><li> <a href="javascript:;">Footer Style<i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="footer-style-1.html">Footer 1 </a></li><li><a href="footer-style-2.html">Footer 2</a></li><li><a href="footer-style-3.html">Footer 3</a></li><li><a href="footer-style-4.html">Footer 4</a></li></ul></li></ul></li><li><a href="javascript:void(0);">Our Menu<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="our-menu.html">Menu Style 1</a></li><li><a href="our-menu-2.html">Menu Style 2</a></li><li><a href="our-menu-3.html">Menu Style 3</a></li><li><a href="our-menu-4.html">Menu Style 4</a></li></ul></li><li><a href="javascript:void(0);">Shop <i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="shop.html">Shop</a></li><li><a href="shop-sidebar.html">Shop Sidebar</a></li><li><a href="shop-product-details.html">Product Details</a></li><li><a href="shop-cart.html">Cart</a></li><li><a href="shop-wishlist.html">Wishlist</a></li><li><a href="shop-checkout.html">Checkout</a></li><li><a href="shop-login.html">Login</a></li><li><a href="shop-register.html">Register</a></li></ul></li><li class="has-mega-menu"><a href="javascript:void(0);">Blog<i class="fa fa-chevron-down"></i></a><ul class="mega-menu"><li> <a href="javascript:;">Blog Grid</a><ul><li><a href="blog-grid-2.html">Grid 2</a></li><li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li><li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li><li><a href="blog-grid-3.html">Grid 3</a></li></ul></li><li> <a href="javascript:;">Blog Half Image</a><ul><li><a href="blog-half-img.html">Half image</a></li><li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li><li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li></ul></li><li> <a href="javascript:;">Blog Large Image</a><ul><li><a href="blog-large-img.html">Large image</a></li><li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li><li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li></ul></li><li> <a href="javascript:;">Blog Details</a><ul><li><a href="blog-single.html">Single</a></li><li><a href="blog-single-sidebar.html">Single sidebar</a></li><li><a href="blog-single-left-sidebar.html">Single sidebar right</a></li></ul></li></ul></li></ul> </div></div></div></div></header>';
	
	var header_v4 = '<header class="site-header header mo-left header-basic header-transparent"> <div class="sticky-header main-bar-wraper navbar-expand-lg"> <div class="main-bar clearfix "> <div class="container clearfix"> <div class="logo-header mostion logo-white"><a href="index.html"><img src="images/logo-white-8.png" alt=""></a></div><button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button> <div class="extra-nav"> <div class="extra-cell"><ul class="extra-info"><li><a href="contact-1.html" class="btn">Contact Us</a></li></ul></div></div><div class="dlab-quik-search "> <form action="#"> <input name="search" value="" type="text" class="form-control" placeholder="Type to search"> <span id="quik-search-remove"><i class="ti-close"></i></span> </form> </div><div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown"><div class="logo-header"><a href="index.html"><img src="images/logo-dark-8.png" alt=""></a></div><ul class="nav navbar-nav"><li class="active"><a href="javascript:void(0);">Home<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="index.html">Home - Pizza & Burger</a></li><li><a href="index-2.html">Home - Cake Bakery</a></li><li><a href="index-3.html">Home - South Indian</a></li><li><a href="index-4.html">Home - Pizza 2</a></li></ul></li><li><a href="javascript:void(0);">Pages<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="about-1.html">About Us</a></li><li><a href="our-services.html">Our Services</a></li><li><a href="faq.html">FAQs</a></li><li><a href="booking.html">Booking</a></li><li><a href="error-404.html">404 Error</a></li><li><a href="calendar.html">Calendar</a></li><li><a href="coming-soon.html">Coming Soon</a></li><li><a href="team.html">Team</a></li><li><a href="javascript:void(0);">Contact Us <i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="contact-1.html">Contact Us 1</a></li><li><a href="contact-2.html">Contact Us 2</a></li></ul></li></ul></li><li><a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a><ul class="sub-menu tab-content"><li><a href="javascript:;">Header Style <i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="header-style-1.html">Header 1</a></li><li><a href="header-style-2.html">Header 2</a></li><li><a href="header-style-3.html">Header 3</a></li><li><a href="header-style-4.html">Header 4</a></li></ul></li><li> <a href="javascript:;">Footer Style<i class="fa fa-angle-right"></i></a><ul class="sub-menu"><li><a href="footer-style-1.html">Footer 1 </a></li><li><a href="footer-style-2.html">Footer 2</a></li><li><a href="footer-style-3.html">Footer 3</a></li><li><a href="footer-style-4.html">Footer 4</a></li></ul></li></ul></li><li><a href="javascript:void(0);">Our Menu<i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="our-menu.html">Menu Style 1</a></li><li><a href="our-menu-2.html">Menu Style 2</a></li><li><a href="our-menu-3.html">Menu Style 3</a></li><li><a href="our-menu-4.html">Menu Style 4</a></li></ul></li><li><a href="javascript:void(0);">Shop <i class="fa fa-chevron-down"></i></a><ul class="sub-menu"><li><a href="shop.html">Shop</a></li><li><a href="shop-sidebar.html">Shop Sidebar</a></li><li><a href="shop-product-details.html">Product Details</a></li><li><a href="shop-cart.html">Cart</a></li><li><a href="shop-wishlist.html">Wishlist</a></li><li><a href="shop-checkout.html">Checkout</a></li><li><a href="shop-login.html">Login</a></li><li><a href="shop-register.html">Register</a></li></ul></li><li class="has-mega-menu"><a href="javascript:void(0);">Blog<i class="fa fa-chevron-down"></i></a><ul class="mega-menu"><li> <a href="javascript:;">Blog Grid</a><ul><li><a href="blog-grid-2.html">Grid 2</a></li><li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li><li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li><li><a href="blog-grid-3.html">Grid 3</a></li></ul></li><li> <a href="javascript:;">Blog Half Image</a><ul><li><a href="blog-half-img.html">Half image</a></li><li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li><li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li></ul></li><li> <a href="javascript:;">Blog Large Image</a><ul><li><a href="blog-large-img.html">Large image</a></li><li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li><li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li></ul></li><li> <a href="javascript:;">Blog Details</a><ul><li><a href="blog-single.html">Single</a></li><li><a href="blog-single-sidebar.html">Single sidebar</a></li><li><a href="blog-single-left-sidebar.html">Single sidebar right</a></li></ul></li></ul></li></ul> </div></div></div></div></header>';
	
	var footer_v2 = '<footer class="site-footer pizza-footer"><div class="p-tb60 text-center bg-black-1"><div class="container"><div class="row"><div class="col-md-12"><div class="logo-footer"> <a href="index.html"><img src="images/pizza-logo.png" alt=""></a></div><div class="widget-link"><ul><li><a href="index.html">Home</a></li><li><a href="error-404.html">About Us</a></li><li><a href="faq.html">Faq</a></li><li><a href="contact-1.html">Contact Us</a></li></ul></div><p class="copyright">Copyright © 2020 DexignZone. all rights reserved.</p><ul class="dlab-social-icon"><li><a class="btn white outline circle"><i class="fa fa-facebook"></i></a></li><li><a class="btn white outline circle"><i class="fa fa-google-plus"></i></a></li><li><a class="btn white outline circle"><i class="fa fa-linkedin"></i></a></li><li><a class="btn white outline circle"><i class="fa fa-twitter"></i></a></li></ul></div></div></div></div> </footer>';
	
	var footer_v3 = '<footer class="site-footer food-footer"> <div class="footer-top"> <div class="container"> <div class="row"> <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"> <div class="widget widget_getintuch"> <h5 class="footer-title text-white">Contact Us</h5> <ul> <li><i class="fa fa-map-marker"></i> <p>Marmora City, Vietnam</p></li><li><i class="fa fa-phone"></i> <p>0800-123456</p></li><li><i class="fa fa-mobile"></i> <p>(+91) 0800-123456</p></li><li><i class="fa fa-envelope"></i> <p>info@example.com</p></li></ul> </div></div><div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"> <div class="widget recent-posts-entry"> <h4 class="footer-title">Recent Post</h4><div class="widget-post-bx"><div class="widget-post clearfix"><div class="dlab-post-media radius-sm"> <img src="images/blog/recent-blog/pic1.jpg" alt=""> </div><div class="dlab-post-info"><div class="dlab-post-header"><h6 class="post-title"><a href="blog-single.html">The Background Of Bakery Now</a></h6></div><div class="dlab-post-meta"><ul><li class="post-date"> <i class="la la-clock-o"></i><strong>March 25, 2020</strong> </li></ul></div></div></div><div class="widget-post clearfix"><div class="dlab-post-media radius-sm"> <img src="images/blog/recent-blog/pic2.jpg" alt=""> </div><div class="dlab-post-info"><div class="dlab-post-header"><h6 class="post-title"><a href="blog-single.html">How Bakery Can Increase Your Profit</a></h6></div><div class="dlab-post-meta"><ul><li class="post-date"> <i class="la la-clock-o"></i><strong>March 25, 2020</strong> </li></ul></div></div></div></div></div></div><div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"> <div class="widget widget_services border-0"> <h4 class="footer-title">Quick Links</h4> <ul class="list-2"><li><a href="index.html">Home</a></li><li><a href="about-1">About</a></li><li><a href="our-menu.html">Our Menu</a></li><li><a href="faq.html">FAQ</a></li><li><a href="blog-grid-2.html">Blog</a></li><li><a href="shop.html">Shop</a></li><li><a href="contact-1.html">Contact</a></li><li><a href="team.html">Team</a></li><li><a href="calendar.html">Calendar</a></li></ul> </div></div><div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"><div class="widget border-0"> <h4 class="footer-title">Opening Hours</h4> <p class="m-b20">Our support available to help you 24 hours a day, seven days a week.</p><ul class="work-hour-list"><li><span class="day"><span>Monday to Friday</span></span> <span class="timing">7AM - 5PM</span></li><li><span class="day"><span>Saturday</span></span><span class="timing">10AM - 5PM</span></li><li><span class="day"><span>Sunday</span></span><span class="timing">Closed</span></li></ul></div></div></div></div></div><div class="footer-bottom"> <div class="container"> <div class="row"> <div class="col-lg-6 col-md-6 text-left"> <span>Copyright © 2020 DexignZone. all rights reserved.</span> </div><div class="col-lg-6 col-md-6 text-right"> <div class="widget-link"> <ul><li><a href="about-1.html">About Us</a></li><li><a href="faq.html">Faq</a></li></ul></div></div></div></div></div></footer>';
	
	var footer_v4 = '<footer class="site-footer footer-full"> <div class="p-tb60 bg-dark"> <div class="container"> <div class="row"><div class="col-md-6 text-md-left text-center footer-logo logo-white"><img src="images/logo-white-8.png" alt="" width="150"><p class="m-b0 m-t10 text-white">Copyright &copy; 2020 DexignZone</p></div><div class="col-md-6 text-md-right text-center"><div class="widget-link "> <ul><li><a href="index.html">Home</a></li><li><a href="about-1.html">About us</a></li><li><a href="our-menu.html">Our Menu</a></li><li><a href="our-services.html">Our Services</a></li><li><a href="contact-1.html">Contact Us</a></li></ul></div><ul class="list-inline m-b0 m-t10"><li><a href="javascript:void(0);" class="btn circle hover"><i class="fa fa-facebook"></i></a></li><li><a href="javascript:void(0);" class="btn circle hover"><i class="fa fa-google-plus"></i></a></li><li><a href="javascript:void(0);" class="btn circle hover"><i class="fa fa-linkedin"></i></a></li><li><a href="javascript:void(0);" class="btn circle hover"><i class="fa fa-instagram"></i></a></li><li><a href="javascript:void(0);" class="btn circle hover"><i class="fa fa-twitter"></i></a></li></ul></div></div></div></div></footer>';
	
	
	var header = getCookie('header');
	var footer = getCookie('footer');
	
	if(header == 'header_v1')
	{
		jQuery('header').replaceWith(header_v1);
		
	}else if(header == 'header_v2')
	{
		jQuery('header').replaceWith(header_v2);
	}
	else if(header == 'header_v3')
	{
		jQuery('header').replaceWith(header_v3);
	}
	else if(header == 'header_v4')
	{
		jQuery('header').replaceWith(header_v4);
	}
	
	
	if(footer == 'footer_v1')
	{
		jQuery('footer').replaceWith(footer_v1);
		
	}else if(footer == 'footer_v2')
	{
		jQuery('footer').replaceWith(footer_v2);
	}
	else if(footer == 'footer_v3')
	{
		jQuery('footer').replaceWith(footer_v3);
	}
	else if(footer == 'footer_v4')
	{
		jQuery('footer').replaceWith(footer_v4);
	}
}

jQuery(window).on('load',function(){
	
	//=== Switcher panal slide function	=====================//
	jQuery('.styleswitcher').animate({
		'left': '-220px'
	});
	jQuery('.styleswitcher-right').animate({
		'right': '-220px',
		'left': 'auto'
	});
	jQuery('.switch-btn').addClass('closed');
	//=== Switcher panal slide function END	=====================//
	
});
	
$(function(){		
	"use strict";
	
	
	setheaderfooter();
	
	
	
	addSwitcher();
	
	//=== Switcher panal slide function	=====================//
	jQuery('.switch-btn').on('click',function () {	
		if (jQuery(this).hasClass('open')) {
			jQuery(this).addClass('closed');
			jQuery(this).removeClass('open');
			jQuery('.styleswitcher').animate({
				'left': '-220px'
			});
			jQuery('.styleswitcher-right').animate({
				'right': '-220px',
				'left': 'auto'
			});
		} else {
			if (jQuery(this).hasClass('closed')) {
			jQuery(this).addClass('open');
			jQuery(this).removeClass('closed');
			jQuery('.styleswitcher').animate({
				'left': '0'
			});
			jQuery('.styleswitcher-right').animate({
				'right': '0',
				'left': 'auto'
			});
			}
		}	
	});
	//=== Switcher panal slide function END	=====================//

	//=== Color css change function	=====================//

		
	jQuery(document).on('click', '.color-skins-db li a', function(){
		jQuery('.color-skins-db li').removeClass('active');
		jQuery(this).parent('li').addClass('active');
		
		jQuery(".skin").attr("href", jQuery(this).attr('dir') + '.css');
		
		var logoSelectorArr = jQuery(this).data('logo-selector').split(',');
		var logoSrcArr		= jQuery(this).data('logo-image').split(',');
		var arrCount = logoSelectorArr.length;
		for(var i=0; i<arrCount; i++){
			jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i]);
		}
		
		return false;
	});
		
	
	/* url color set */
	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
		return false;
	};
	
	var themeColor =  getUrlParameter('color-full');
	if(themeColor){
		var index = themeColor?.split('_')[1];
		const logoUrls = document.querySelectorAll('.color-skins-db li a');
		var logoImage = $(logoUrls[index - 1]).attr('data-logo-image');
		var logoSelector = $(logoUrls[index - 1]).attr('data-logo-selector');
		if(logoUrls && index){
			deleteCookie('themeStandardColor_value');
			deleteCookie('themeStandardColor_logo_selector');
			deleteCookie('themeStandardColor_logo_image');
			setCookie('themeFullColor_value','css/skin/skin-'+index,1);
			setCookie('themeFullColor_logo_selector',logoSelector,1);
			setCookie('themeFullColor_logo_image',logoImage,1);
		}
	}
	/* url color set */
		
		
	//=== Color css change function	=====================//	
	
	
	
	
	//=== Background image change function	=====================//
	jQuery('.background-switcher li img').on('click',function(){
	 var imgbg = jQuery(this).attr('dir');
	 //console.<span id="IL_AD2" class="IL_AD">log</span>(imgbg);
	 jQuery('#bg').css({backgroundImage: "url("+imgbg+")"});
		
		jQuery('.background-switcher li, .pattern-switcher li, .bg-color-switcher li').removeClass('active');
		jQuery(this).parent('li').addClass('active');
	 
	 });
	//=== Background image change function	End=====================//
	
	
	//=== Background pattern change function	=====================//
	jQuery('.pattern-switcher li img').on('click',function(){
	 var imgbg = jQuery(this).attr('dir');
	 //console.<span id="IL_AD2" class="IL_AD">log</span>(imgbg);
	 jQuery('#bg').css({backgroundImage: "url("+imgbg+")"});
	 jQuery("#bg").css( "background-size", "auto");
	 jQuery('.background-switcher li, .pattern-switcher li, .bg-color-switcher li').removeClass('active');
		jQuery(this).parent('li').addClass('active');
	 
	 });
	//=== Background pattern change function End=====================//
	
	//=== Background pattern change function	=====================//
	jQuery('.bg-color-switcher li a').on('click',function(){
	 var bgcolor = jQuery(this).attr('dir');
	 //alert(bgcolor);
	 //console.<span id="IL_AD2" class="IL_AD">log</span>(bgcolor);
		jQuery('#bg').css('background-color', bgcolor);
		jQuery('#bg').css('background-image', '');
		
		jQuery('.background-switcher li, .pattern-switcher li, .bg-color-switcher li').removeClass('active');
		jQuery(this).parent('li').addClass('active');
	 });
	//=== Background pattern change function End=====================//
	

	//=== Layout boxed & fullscreen change function	=====================//
	jQuery('.layout-view li ').on('click', function(){
		jQuery('.layout-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	jQuery('.skin-view li ').on('click', function(){
		jQuery('.skin-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.wide-layout').on('click',function() { 
		jQuery("body").addClass('wide-layout');
		jQuery("body").removeClass('boxed');
		jQuery("body").removeClass('frame').removeAttr("style");
		jQuery('#ThemeRangeSlider').hide('slow');
	});
	
	jQuery('.boxed').on('click',function() { 
		jQuery("body").addClass('boxed');
		jQuery("body").removeClass('wide-layout');
		jQuery("body").removeClass('frame').removeAttr("style");
		jQuery('#ThemeRangeSlider').hide('slow');
	});
	jQuery('.frame').on('click',function() { 
		jQuery("body").addClass('frame');
		jQuery("body").removeClass('wide-layout');
		jQuery("body").removeClass('boxed');
		jQuery("body").removeClass('boxed');
		jQuery('#ThemeRangeSlider').show('slow');
		//themeFramePadding();
		jQuery(".main-bar-wraper").addClass('sticky-no');
		jQuery(".main-bar-wraper").removeClass('sticky-header');
	});
	themeFramePadding();
	//=== Layout boxed & fullscreen change function	END=====================//
	


	//=== Nav light & dark change function	END=====================//
	jQuery('.nav-view li ').on('click', function(){
		jQuery('.nav-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.nav-light').on('click',function() { 
		jQuery(".header-nav").addClass('nav-light');
		jQuery(".header-nav").removeClass('nav-dark');
	});
	
	jQuery('.nav-dark').on('click',function() { 
		jQuery(".header-nav").addClass('nav-dark');
		jQuery(".header-nav").removeClass('nav-light');
	});
	//=== Nav light & dark change function	END=====================//	
	
	/* Header View */
	jQuery('.header-view li ').on('click', function(){
		jQuery('.header-view li ').removeClass('active');
		jQuery(this).addClass('active');
	});
	
	jQuery('.header-fixed').on('click',function() { 
		jQuery(".main-bar-wraper").addClass('sticky-header');
		jQuery(".main-bar-wraper").removeClass('sticky-no');
	});
	
	jQuery('.header-static').on('click',function() { 
		jQuery(".main-bar-wraper").addClass('sticky-no');
		jQuery(".main-bar-wraper").removeClass('sticky-header');
	});
	/* Header View END */
});

/* Theme Panel Save */
	
	
	var themeOption = ['themeStandardColor','themeFullColor','layout','header','bgColor','bgImage','bgPatten'];
	themeOption['layout'] = ['wide','boxed','frame','frame_value','layout_value'];
	themeOption['themeStandardColor'] = ['skin-1','skin-2','skin-3','skin-4','skin-5','skin-6','skin-7','skin-8','themeStandardColor_value','themeStandardColor_logo'];
	themeOption['themeFullColor'] = ['css/skin/skin-1','css/skin/skin-2','css/skin/skin-3','css/skin/skin-4','css/skin/skin-5','css/skin/skin-6','css/skin/skin-7','css/skin/skin-8','themeFullColor_value','themeFullColor_logo'];
	themeOption['header'] = ['fixed','static','header_value'];
	themeOption['bgColor'] = ['#e8262e','#60cac8','#ab5ea4','#7baf4b','#d1a068','#f2a809','#5492f7','#f35711','bgColor_value'];
	themeOption['bgImage'] =['bg1.jpg','error-404.html','error-404.html','error-404.html','bgImage_value'];
	themeOption['bgPatten'] =['pt1.jpg','error-404.html','error-404.html','error-404.html','error-404.html','error-404.html','error-404.html','error-404.html','error-404.html','error-404.html','error-404.html','error-404.html','bgPatten_value'];

jQuery(document).ready(function(){
	jQuery('.theme-panel-save li a, .theme-panel-save li img').on('click', function() {
			//alert(1);
			var optionValue =  jQuery(this).attr('dir');
			var optionData =  jQuery(this).parent().parent().attr('val');
			//themeOption[optionData][optionData+'_value'] = data;
			//alert(data+' '+optionData);
			
			if(optionData == 'bgColor'){
				deleteCookie('bgImage_value');
				deleteCookie('bgPatten_value');
			}else if(optionData == 'bgImage'){
				deleteCookie('bgColor_value');
				deleteCookie('bgPatten_value');
			}else if(optionData == 'bgPatten'){
				deleteCookie('bgColor_value');
				deleteCookie('bgImage_value');
			}else if(optionData == 'themeStandardColor'){
				deleteCookie('themeFullColor_value');
				deleteCookie('themeFullColor_logo_selector');
				deleteCookie('themeFullColor_logo_image');
				var themeLogoSelector =  jQuery(this).data('logo-selector');
				var themeLogoImage =  jQuery(this).data('logo-image');
				setCookie(optionData+'_logo_selector',themeLogoSelector,1);
				setCookie(optionData+'_logo_image',themeLogoImage,1);
			}else if(optionData == 'themeFullColor'){
				deleteCookie('themeStandardColor_value');
				deleteCookie('themeStandardColor_logo_selector');
				deleteCookie('themeStandardColor_logo_image');
				var themeLogoSelector =  jQuery(this).data('logo-selector');
				var themeLogoImage =  jQuery(this).data('logo-image');
				setCookie(optionData+'_logo_selector',themeLogoSelector,1);
				setCookie(optionData+'_logo_image',themeLogoImage,1);
			}else if(optionData == 'themeStandardColor' || optionData == 'themeFullColor'){
				var themeLogo =  jQuery(this).attr('logo');
				setCookie(optionData+'_logo',themeLogo,1);
			}
			
			
			setCookie(optionData+'_value',optionValue,1);
	});
	
	
	setThemePanel();
	//deleteAllCookie();
	//alert(document.cookie);
	
	
	
});

function themeFramePadding(){
	var themeOptionFrameValue = getCookie('frame_value');
	if(themeOptionFrameValue == ''){
		themeOptionFrameValue = 20;
	}
	
	if($("#slider-range-3").length > 0 )
	{
		
		$("#slider-range-3").unbind().slider({
				min: 20,
				max: 80,
				//value: 20,
				value: themeOptionFrameValue,
				animate:"slow",
				orientation: "horizontal",
				slide: function( event, ui ) {
					frameSlider = ui.value;
					$('#' + this.id).prev().val(frameSlider+"px");
					$( "#bg" ).css('padding',frameSlider+"px");
					setCookie('frame_value',frameSlider,1);
			   }
		});
	}
}

function setThemePanel(){
	jQuery.each(themeOption, function(index, themeOptionItem) {
		themeOptionItemValue = getCookie(themeOptionItem+'_value');
		//alert(themeOptionItem+' '+themeOptionItemValue);
		if(themeOptionItemValue != ''){
				if(themeOptionItem == 'themeStandardColor'){
					jQuery(".skin").attr("href", themeOptionItemValue+".css");
					setThemeLogo(themeOptionItem);
				}else if(themeOptionItem == 'themeFullColor'){
					jQuery(".skin").attr("href", themeOptionItemValue+".css");
					setThemeLogo(themeOptionItem);
					jQuery('.color-skins-db [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}else if(themeOptionItem == 'layout'){
					jQuery('.'+themeOptionItem+'-view li').removeClass('active');
					jQuery('.'+themeOptionItem+'-view').find('.'+themeOptionItemValue).addClass('active');
					if(themeOptionItemValue == 'frame'){
						jQuery('#ThemeRangeSlider').show('slow');
						jQuery("body").addClass(themeOptionItemValue);
						themeOptionFrameValue = getCookie('frame_value');
						if(themeOptionFrameValue == ''){
							themeOptionFrameValue = 20;
						}
						jQuery('#FramePadding').val(themeOptionFrameValue+"px");
						jQuery("#bg").css('padding',themeOptionFrameValue+"px");
					}else{
						jQuery("body").addClass(themeOptionItemValue);	
					}
				}else if(themeOptionItem == 'header'){
					jQuery('.'+themeOptionItem+'-view li').removeClass('active');
					if( themeOptionItemValue == 'sticky-header'){
						jQuery('.'+themeOptionItem+'-view').find('.header-fixed').addClass('active');	
					}else if( themeOptionItemValue == 'sticky-no'){
						jQuery('.'+themeOptionItem+'-view').find('.header-static').addClass('active');
					}
					jQuery(".main-bar-wraper").addClass(themeOptionItemValue);
				}else if(themeOptionItem == 'bgColor'){
					jQuery('#bg').css('background-color', themeOptionItemValue);
					jQuery('#bg').css('background-image', '');
					/* To Selected */
					jQuery('.bg-color-switcher li').removeClass('active');
					jQuery('.bg-color-switcher [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
					
				}else if(themeOptionItem == 'bgImage'){
					jQuery('#bg').css({backgroundImage: "url("+themeOptionItemValue+")"});
					/* To Selected */
					jQuery('.background-switcher li').removeClass('active');
					jQuery('.background-switcher [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}else if(themeOptionItem == 'bgPatten'){
					jQuery('#bg').css({backgroundImage: "url("+themeOptionItemValue+")"});
					jQuery("#bg").css( "background-size", "auto");
					/* To Selected */
					jQuery('.pattern-switcher li').removeClass('active');
					jQuery('.pattern-switcher [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}
		}
	});
	
	var tf_logo_selector = getCookie('themeFullColor_logo_selector');
	var ts_logo_selector = getCookie('themeStandardColor_logo_selector');
		
	if(tf_logo_selector != '')
	{
		var tf_logo_image = getCookie('themeFullColor_logo_image');
		
		var logoSelectorArr = tf_logo_selector.split(',');
		var logoSrcArr		= tf_logo_image.split(',');
		var arrCount = logoSelectorArr.length;
		for(var i=0; i<arrCount; i++){
			jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i]);
		}
	}
	if(ts_logo_selector != '')
	{
		var ts_logo_image = getCookie('themeStandardColor_logo_image');
		
		var logoSelectorArr = ts_logo_selector.split(',');
		var logoSrcArr		= ts_logo_image.split(',');
		var arrCount = logoSelectorArr.length;
		for(var i=0; i<arrCount; i++){
			jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i]);
		}
	}
}

function setThemeLogo(themeOptionItemAttr){
	var logo = getCookie(themeOptionItemAttr+'_logo');
	if(logo != ''){
		jQuery(".logo-header img").attr("src", logo);
	}
}

function setCookie(cname, cvalue, exhours) {
		var d = new Date();
		d.setTime(d.getTime() + (30*60*1000)); /* 30 Minutes*/
		var expires = "expires="+ d.toString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function deleteCookie(cname) {
		var d = new Date();
		d.setTime(d.getTime() + (1)); /* 1/1000 second*/
		var expires = "expires="+ d.toString();
		document.cookie = cname + "=1;" + expires + ";path=/";
}

function deleteAllCookie() {
	jQuery.each(themeOption, function(index, themeOptionItem) {
			deleteCookie(themeOptionItem+'_value');
			deleteCookie(themeOptionItem+'_logo_selector');
			deleteCookie(themeOptionItem+'_logo_image');
	});
	deleteCookie('logo_value');
	deleteCookie('header');
	deleteCookie('footer');
	location.reload();
}
