<!DOCTYPE html>
<html lang="en">

 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet"> 
</head>

<body>

    <!-- Body Inner -->    <div class="body-inner">

        <!-- Header -->
        <header id="header">
            <div class="header-inner">
                <div class="container"> <!--Logo-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-src-dark="images/logo-dark.png">
                            <img src="images/logo.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!-- Search -->
                    <div id="search">
                        <div id="search-logo"><img src="images/logo.png" alt="Polo Logo"></div>
                        <button id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></button>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="search" placeholder="Search..."
                                autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>

                        <div class="search-suggestion-wrapper">


                            <div class="search-suggestion">
                                <h3>News Articles</h3>
                                <p><a href="#">Beautiful nature, and rare feathers!</a></p>
                                <p><a href="#">New costs and rise of the economy!</a></p>
                                <p><a href="#">A true story, that never been told!</a></p>
                            </div>
                            <div class="search-suggestion">
                                <h3>Looking for these?</h3>
                                <p><a href="#">New costs and rise of the economy!</a></p>
                                <p><a href="#">AI can be trusted to take answer calls </a></p>
                                <p><a href="#">Polo now lets you easily create any beautiful clean website</a></p>
                            </div>
                            <div class="search-suggestion">
                                <h3>Blog Posts</h3>
                                <p><a href="#">A true story, that never been told!</a></p>
                                <p><a href="#">Beautiful nature, and rare feathers!</a></p>
                                <p><a href="#">The most happiest time of the day!</a></p>
                            </div>


                        </div>
                    </div>
                    <!-- end: search -->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                                                        <li>
                                <!--search icon-->
                                <a id="btn-search" href="#"> <i class="icon-search1"></i></a>
                                <!--end: search icon-->
                            </li>
                            <li class="d-none d-sm-block">
                                <!--shopping cart-->
                                <div id="shopping-cart" class="p-dropdown">
                                    <a href="shop-cart.html"><span class="shopping-cart-items">8</span><i
                                            class="icon-shopping-cart1"></i></a>
                                    <div class="p-dropdown-content ">
                                        <div class="widget-mycart">
                                            <h4>My Cart</h4>
                                            <div class="cart-item">
                                                <div class="cart-image"> <a href="#"><img
                                                            src="images/shop/products/10.jpg"></a></div>
                                                <div class="cart-product-meta">
                                                    <a href="#">Bolt Sweatshirt</a>
                                                    <span>3 x 28$</span>
                                                </div>
                                                <div class="cart-item-remove">
                                                    <a href="#"><i class="icon-x"></i></a></div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-image"> <a href="#"><img
                                                            src="images/shop/products/11.jpg"></a></div>
                                                <div class="cart-product-meta">
                                                    <a href="#">Yellow Sweatshirt</a>
                                                    <span>1 x 18$</span>
                                                </div>
                                                <div class="cart-item-remove">
                                                    <a href="#"><i class="icon-x"></i></a></div>
                                            </div>
                                            <hr>
                                            <div class="cart-total">
                                                <div class="cart-total-labels">
                                                    <span>Subtotal</span>
                                                    <span>Taxes</span>
                                                    <span><strong>Total</strong></span>
                                                </div>
                                                <div class="cart-total-prices">
                                                    <span>320$</span>
                                                    <span>8%</span>
                                                    <span><strong>385$</strong></span>
                                                </div>

                                            </div>
                                            <div class="cart-buttons text-right">
                                                <button class="btn btn-xs">Checkout</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: shopping cart-->
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-flag11"></i></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                                        <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

<!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul><li><a href="index.html">Home</a></li>
                                    <li class="dropdown"> <a href="#">Layout</a>
                                        <ul class="dropdown-menu">
											<li class="dropdown-submenu"><a href="#">Topbar</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-topbar.html">Light</a></li>
                                                            <li><a href="header-topbar-dark.html">Dark</a></li>
                                                            <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                            <li><a href="header-topbar-colored.html">Colored</a></li>
                                                            <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                        </ul>
                                             </li>									
                                            <li class="dropdown-submenu"><a href="#">Header</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li><a href="header-colored.html">Colored</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a></li>
                                                            <li><a href="header-modern-colored.html">Colored</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                        <li><a href="header-always-fixed.html">Always Fixed</a></li>
                                                        <li><a href="header-disable-fixed.html">Disable Fixed</a></li>
                                                    <li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo</a>
<ul class="dropdown-menu">
                                                                                                                        <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                            <li><a href="header-logo-fixed-header.html">Header Fixed Logo</a></li>
                                                            <li><a href="header-logo-responsive.html">Header Responsive Logo</a></li>
                                                        </ul>
</li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Main Menu<span class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
													<li><a href="menu-lowercase.html">Lowercase</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-slide.html">Slide Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title.html">Default</a></li>
                                                    <li><a href="page-title-image.html">Image background</a> </li>
                                                    <li><a href="page-title-video.html">Video background</a> </li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a> </li>
                                                    <li><a href="page-title-background-color.html">Colored background</a> </li>
                                                    <li><a href="page-title-parallax.html">Parallax</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title-left.html">Left Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Menu<span class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Default</a></li>
                            <li><a href="page-menu-rounded.html">Rounded</a></li>
                            <li><a href="page-menu-outline.html">Outline</a></li>
                            <li><a href="page-menu-lines.html">Lines</a></li>
                            <li><a href="page-menu-solid.html">Solid</a> </li>
                            <li><a href="page-menu-light.html">Light</a> </li>
                            <li><a href="page-menu-dark.html">Dark</a> </li>
                            <li><a href="page-menu-creative.html">Creative</a> </li>
<li><a href="page-menu.html">Dropdown</a></li>
                                                    
                                                </ul>
                                            </li>
											<li class="dropdown-submenu"><a href="#">Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar-sticky.html">Sticky version</a> </li>
<li><a href="sidebar.html">Left aligned</a> </li>
                                                    <li><a href="sidebar-right.html">Right aligned</a> </li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a> </li>
                                                    <li><a href="sidebar-modern.html">Modern</a> </li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a> </li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a> </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="footer.html#footer">Default</a> </li>
													<li><a href="footer-dark.html#footer">Dark</a> </li>
                                                    <li><a href="footer-1.html#footer">Footer 1</a> </li>
                                                    <li><a href="footer-2.html#footer">Footer 2</a> </li>
                                                    <li><a href="footer-3.html#footer">Footer 3</a> </li>
                                                    <li><a href="footer-4.html#footer">Footer 4</a> </li>
                                                    <li><a href="footer-5.html#footer">Footer 5</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>                                                    
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                </ul>
                                            </li><li class="dropdown-submenu"><a href="#">Options</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Boxed</a></li>
                                                        <li><a href="#">Wide</a></li>
                                                        <li><a href="#">Modern</a></li>
                                                        <li><a href="#">Border</a></li>
                                                        </ul>
                                                    </li> 
<li><a href="preview/index.html">Layout Demos<span class="badge badge-primary">200+</span></a></li> </ul>
                                    </li>
									<li class="dropdown"> <a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                                    <li><a href="slider-owl-slider.html">OWL Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html">Fullscreen Text Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="widgets.html">Widgets </a></li>
                                            <li><a href="page-loaders.html">Page Loaders<span class="badge badge-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Modal Auto Open<span class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                                                                        <li><a href="modal-auto-open-subscription.html">Subscription</a></li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio Player</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
<li><a href="modal-auto-open.html">Sample Text</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Cookie Notify<span class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a> </li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span class="badge badge-danger">NEW</span></a> </li>
                                                    <li><a href="#">Label (hot)<span class="badge badge-danger">HOT</span></a> </li>
                                                    <li><a href="#">Label (popular)<span class="badge badge-success">POPULAR</span></a> </li>
                                                    <li><a href="#">Label (sale)<span class="badge badge-warning">SALE</span></a> </li>
                                                    <li><a href="#">Label (info)<span class="badge badge-info">INFO</span></a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Elements</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-according.html"> <i class="fa fa-list-ul"></i>Accordions</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-alerts.html"> <i class="fa fa-exclamation-circle"></i>Alerts</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-animations.html"> <i class="fa fa-magic"></i>Animations</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-audio-video.html"> <i class="fa fa-play-circle"></i> Audio & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-blockquotes.html"> <i class="fa fa-quote-right"></i>Blockquotes</a>
                                                            </li>
<li>
                                                                <a href="component-bootstrap-switch.html"> <i class="fas fa-toggle-off"></i>BS Switch<span class="badge badge-danger">NEW</span></a>
                                                            </li>
<li>
                                                                <a href="component-bootstrap-notify.html"> <i class="fas fa-flag-checkered"></i>BS Notify<span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-breadcrumbs.html"> <i class="fa fa-angle-double-right"></i>Breadcrumbs</a>
                                                            </li>
                                                            <li> <a href="shortcode-buttons.html"> <i class="fas fa-external-link-square-alt"></i>Buttons</a> </li>
<li> <a href="component-charts-chartjs.html"> <i class="fas fa-chart-bar"></i>Charts <span class="badge badge-danger">NEW</span></a> </li>
                                                                                                                    </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
<li> <a href="component-calendar.html"> <i class="far fa-calendar-alt"></i>Calendar <span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-client-logo.html"> <i class="far fa-gem"></i>Clients logos</a></li>
                                                            <li>
                                                                <a href="shortcode-calltoaction.html"> <i class="fa fa-plus-square"></i>Call to action</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-carousel.html"> <i class="fas fa-exchange-alt"></i>Carousel</a>
                                                            </li>

                                                            <li>
                                                                <a href="shortcode-code.html"> <i class="fa fa-code"></i>Code</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-countdown-timer.html"> <i class="far fa-clock"></i>Countdown Timers</a>
                                                            </li>
<li>
                                                                <a href="shortcode-countdown.html"> <i class="fa fa-stopwatch"></i>Countdown <span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li><a href="shortcode-counters.html"> <i class="fas fa-sort-numeric-down "></i>Counter Numbers</a></li>
<li> <a href="component-datatable.html"> <i class="fa fa-table"></i>Data Tables <span class="badge badge-danger">NEW</span></a></li><li>
                                                                <a href="component-daterangepicker.html"><i class="fa fa-calendar-alt"></i>Date & Time Pickers</a>
                                                            </li>
 
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-dropcat-highlight.html"> <i class="fa fa-bold"></i>Dropcat & Highlight</a>
                                                            </li>
<li>
                                                                <a href="shortcode-dropdowns.html"> <i class="fa  fa-lightbulb"></i>Dropdown <span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-team-members.html"> <i class="fa fa-users"></i>Team members</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-forms.html"> <i class="fa fa-align-justify"></i>Forms</a>
                                                            </li>
<li>
<a href="shortcode-grid.html"><i class="fa fa-th"></i>Grid System</a></li>
<li>
<a href="shortcode-heading-styles.html"><i class="fa fa-heading"></i>Heading Styles</a>
</li>
                                                            <li>
                                                                <a href="shortcode-icon-boxes.html"> <i class="fa fa-bullseye"></i>Icon Boxes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-lists.html"> <i class="fa fa-flag"></i>Icons
</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-images.html"> <i class="far fa-image"></i>Images</a>
                                                            </li> <li>
                                                                <a href="shortcode-labels-badgets.html"> <i class="fa fa-check-square"></i>Labels and Badges</a>
                                                            </li>

                                                            

                                                        </ul>

                                                    </div>

                                                    <div class="col-lg-2">

                                                        <ul>
                                                                                                                        <li>
                                                                <a href="shortcode-lightbox.html"> <i class="fa fa-arrows-alt"></i>Lightbox</a>
                                                            </li>
<li>
                                                                <a href="shortcode-lists.html"> <i
                                                                        class="fa fa-th-list"></i>Lists & Bullet
                                                                    lists</a>
                                                            </li> <li>

                                                                <a href="shortcode-maps.html"> <i class="fa fa-compass"></i>Maps</a>

                                                            </li>
                                                            <li>

                                                                <a href="shortcode-modal.html"> <i class="fa fa-search-plus"></i>Modal</a>

                                                            </li>
<li>
                                                                <a href="shortcode-modal-strip.html"> <i class="fas fa-bolt"></i>Modal Strip</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-navs.html"> <i class="fa fa-bars"></i>Navbar & Navs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-paginations.html"> <i class="fa fa-arrow-circle-right"></i>Pagination & Pager</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-panels.html"> <i class="fa fa-list-alt"></i>Panels</a>
                                                            </li>
                                                            <li> <a href="shortcode-pie-chart.html"><i class="fas fa-chart-pie"></i>Pie charts</a> </li>
                                                            <li> <a href="shortcode-popover-tooltip.html"><i class="far fa-lightbulb"></i>Popover & tooltips</a> </li>
                                                            
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul><li> <a href="shortcode-pricing-table.html"><i class="fas fa-dollar-sign"></i>Pricing
                                                                    tables</a> </li>
<li>
                                                                <a href="shortcode-progress-bar.html"> <i class="fa fa-align-left"></i>Progress bars</a>
                                                            </li>
 <li>
                                                                <a href="shortcode-parallax.html"> <i class="fa fa-gift"></i>Parallax</a>
                                                            </li>
<li>
                                                                <a href="shortcode-particles.html"> <i class="fab fa-connectdevelop"></i>Particles <span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-responsive-utilities.html"> <i class="fa fa-laptop"></i>Responsive utilities</a>
                                                            </li>
<li>
                                                                <a href="component-ion-range-slider.html"> <i class="fas fa-exchange-alt"></i>Range Slider<span class="badge badge-danger">NEW</span></a>
                                                            </li>

                                                            <li>
                                                                <a href="shortcode-sections.html"> <i class="fa fa-bookmark"></i>Sections</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-smooth-scrolling.html"> <i class="fa fa-anchor"></i>Smooth Scrolling</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-social-icons.html"> <i class="fab fa-facebook"></i>Social Icons</a>
                                                            </li>
<li>

                                                                <a href="component-toggles-radio-checkboxes.html"> <i class="fas fa-toggle-on"></i>Switch Toggle<span class="badge badge-danger">NEW</span></a>

                                                            </li>
                                                            
                                                            
                                                                                                                    </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
<li>
<a href="shortcode-tables.html"> <i class="fa fa-table"></i>Tables</a></li>
<li>
                                                                <a href="shortcode-textbox.html"> <i class="fa fa-star"></i>Text
                                                                    Boxes</a>
                                                            </li>
<li><a href="shortcode-tabs.html"> <i class="fa fa-indent"></i>Tabs</a>
</li>                                                            <li>
                                                                <a href="shortcode-testimonial.html"> <i class="fa fa-question-circle"></i>Testimonials</a>
                                                            </li>
                                                            
                                                            <li>
                                                                <a href="shortcode-toggles.html"> <i class="fa fa-toggle-on"></i>Toggles</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-typography.html"> <i class="fa fa-font"></i>Typography</a>
                                                            </li><li>
                                                                <a href="shortcode-text-rotator.html"> <i class="fa fa-random"></i>Text Rotator</a>
                                                            </li>
<li>
                                                                <a href="component-clipboard.html"> <i class="far fa-clipboard"></i>Clipboard <span class="badge badge-danger">NEW</span></a>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </div></li>
                                        </ul>
                                    </li>
                                     <li class="dropdown"> <a href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="page-about-basic.html">Basic</a> </li>
                                                        <li><a href="page-about-extended.html">Extended</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="page-about-me-creative.html">Creative<span class="badge badge-danger">NEW</span></a></li>
    
                                                        <li><a href="page-about-me-basic.html">Basic</a></li>
    
                                                        <li><a href="page-about-me-extended.html">Extended</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="page-contact-classic.html">Classic</a> </li>
                                                        <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a> </li>
                                                        <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a> </li>
                                                        <li><a href="page-contact-map-bottom.html">Map bottom</a> </li>
                                                        <li><a href="page-contact-sidebar-left.html">Sidebar Left</a> </li>
                                                        <li><a href="page-contact-sidebar-right.html">Sidebar Right</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                                    <ul class="dropdown-menu">
                                                       <li> <a href="page-gallery-2.html">Two Columns</a> </li>
    <li> <a href="page-gallery-3.html">Three Columns</a> </li>
    <li> <a href="page-gallery-4.html">Four Columns</a> </li>
    <li> <a href="page-gallery-5.html">Five Columns</a> </li>
    <li> <a href="page-gallery-6.html">Six Columns</a> </li>
    <li> <a href="page-gallery-sidebar.html">Sidebar version</a> </li>
                                                                <li> <a href="page-gallery-wide.html">Wide version</a> </li>
    <li> <a href="page-gallery-load-more.html">Load more</a> </li>
    <li> <a href="page-gallery-infinite-scroll.html">Infinity Scroll</a> </li>
    <!--<li> <a href="page-gallery-gallery-albums.html">Gallery Albums</a> </li>-->
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="page-user-login.html">Login</a> </li>
    <li><a href="page-user-login-classic.html">Login - Classic</a> </li>
                            <li><a href="page-user-register.html">Register</a> </li>
                            <li><a href="page-user-register-classic.html">Register - Classic</a> </li>
                             <li><a href="page-user-password-recovery.html">Recovery Password</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="page-services.html">Services</a> </li>
                                                <li> <a href="page-our-team.html">Our team</a> </li>
                                                <li> <a href="page-our-clients.html">Our clients</a> </li>
                                                <li> <a href="page-maintenance.html">Maintenance</a> </li>
                                                <li> <a href="page-404.html">404 Page</a> </li>
                        <li> <a href="page-404-parallax.html">404 Page - Parallax</a> </li>
                                                <li> <a href="page-500.html">500 Page</a> </li>
                                                <li> <a href="page-fullwidth.html">Fullwidth page</a> </li>
                                                <li> <a href="page-fullwidth-wide.html">Fullwidth page - Wide</a> </li>
                                                <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                                    <ul class="dropdown-menu">
                                                        <li> <a href="page-sidebar.html">Sidebar Left</a> </li>
                                                        <li> <a href="page-sidebar-right.html">Sidebar Right</a> </li>
                                                        <li> <a href="page-sidebar-both.html">Sidebar Both</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="page-site-map.html">Site Map</a> </li>
                                                <li> <a href="page-faq.html">FAQ</a> </li>
                                            </ul>
                                        </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids</li>
                                                            <li> <a href="portfolio-2.html">Two Columns</a> </li>
                                                            <li> <a href="portfolio-3.html">Three Columns</a> </li>
                                                            <li> <a href="portfolio-4.html">Four Columns</a> </li>
                                                            <li> <a href="portfolio-5.html">Five Columns</a> </li>
                                                            <li> <a href="portfolio-6.html">Six Columns</a> </li>
                                                            <li> <a href="portfolio-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="portfolio-wide-3.html">Wide version</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li> <a href="portfolio-masonry-2.html">Two Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-3.html">Three Columns<span class="badge badge-danger">HOT</span></a> </li>
                                                            <li> <a href="portfolio-masonry-4.html">Four Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-5.html">Five Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-6.html">Six Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="portfolio-masonry-wide-3.html">Wide version</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Styles</li>
                                                            <li> <a href="portfolio-filter-styles.html">Filter Styles</a> </li>
                                                            <li> <a href="portfolio-load-more.html">Load more</a> </li>
                                                            <li> <a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a> </li>
                                                            <li> <a href="portfolio-infinite-scroll.html">Infinity Scroll</a> </li>
                                                            <li> <a href="portfolio-ajax.html">Portfolio Ajax</a> </li>
                                                            <li> <a href="portfolio-gallery-modal.html">Gallery Modal</a> </li>
                                                            <li> <a href="portfolio-video-modal.html">Video Modal</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="portfolio-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="portfolio-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="portfolio-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="portfolio-slider-3.html">Slider Default</a> </li>
                                                            <li> <a href="portfolio-no-page-title.html">No Page Title</a> </li>
                                                            <li> <a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a> </li>
                                                            <li> <a href="portfolio-hover-styles.html">Hover Styles</a> </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Project</li>
                                                            <li> <a href="portfolio-page-grid-gallery.html">Grid Gallery</a> </li>
                                                            <li> <a href="portfolio-page-particles.html">Particles Wide Project</a> </li>
                                                            <li> <a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a> </li>
                                                            <li> <a href="portfolio-page-slider.html">Slider version</a> </li>
                                                            <li> <a href="portfolio-page-background-image.html">Fullscreen image</a> </li>
                                                            <li> <a href="portfolio-page-background-video.html">Fullscreen Video</a> </li>
                                                        </ul>
                                                    </div> <div class="col-md-12 no-padding">
                                                        <div class="d-none d-lg-block m-t-40 m-b-10">
   <div class="container">
    <div class="row">
                                                            <div class="col-lg-9 m-t-10">
                                                                <div class="text-center center">
                                                                    <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a>
                                                            </div>
                                                        </div></div></div>

                                                        <ul class="d-block d-lg-none">
                                                            <li> <a class="mega-menu-title" href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> <li class="dropdown mega-menu-item"> <a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li> <a href="blog-masonry-2.html">Two Columns</a> </li>
                                                            <li> <a href="blog-masonry-3.html">Three Columns<span class="badge badge-danger">HOT</span></a> </li>
                                                            <li> <a href="blog-masonry-4.html">Four Columns</a> </li>
                                                            <li> <a href="blog-masonry-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="blog-masonry-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-masonry-wide.html">Wide version</a> </li>
                                                            <li> <a href="blog-masonry-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-masonry-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids Layout</li>
                                                            <li> <a href="blog-1.html">One Column</a> </li>
                                                            <li> <a href="blog-2.html">Two Columns</a> </li>
                                                            <li> <a href="blog-3.html">Three Columns</a> </li>
                                                            <li> <a href="blog-4.html">Four Columns</a> </li>
                                                            <li> <a href="blog-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-wide.html">Wide version</a> </li>
                                                            <li> <a href="blog-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Left Image</li>
                                                            <li> <a href="blog-left-image-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="blog-left-image-no-sidebar.html">No Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-left-image-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-left-image-author-info.html">Author Info</a> </li>
                                                            <li> <a href="blog-left-image-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="blog-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="blog-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="blog-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="blog-fullwidth.html">Fullwidth</a> </li>
                                                            <li class="mega-menu-title">Post Item Styles</li>
                                                            <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                            <li><a href="blog-style-textual.html">Textual</a></li>
                                                            <li><a href="blog-style-grey-bg.html">Grey Background</a></li>
                                                            <li><a href="blog-style-author-info.html">Author Info</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Post</li>
                                                            <li> <a href="blog-single.html">Default</a> </li>
                                                            <li> <a href="blog-single-slider.html">Slider</a> </li>
                                                            <li> <a href="blog-single-video.html">Video</a> </li>
                                                            <li> <a href="blog-single-audio.html">Audio</a> </li>
                                                            <li> <a href="blog-single-creative.html">Creative</a> </li>
                                                            <li class="mega-menu-title">Comments<span class="badge badge-danger">NEW</span></li>
                                                            <li> <a href="blog-comments.html#comments">Default Comments</a> </li>
                                                            <li> <a href="blog-comments-disqus.html#comments">Disqus Comments</a> </li>
                                                            <li> <a href="blog-comments-facebook.html#comments">Facebook Comments</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Shop</a>                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Columns</li>
                                                            <li> <a href="shop-columns-2.html">Two Columns</a> </li>
                                                            <li> <a href="shop-columns-3.html">Three Columns</a> </li>
                                                            <li> <a href="shop-columns-4.html">Four Columns</a> </li>
                                                            <li> <a href="shop-columns-5.html">Five Columns</a> </li>
<li> <a href="shop-columns-6.html">Six Columns</a> </li>
<li> <a href="shop-sidebar-sticky.html">Sidebar Sticky</a> </li>
<li> <a href="shop-wide.html">Wide version</a> </li>
<li> <a href="shop-no-page-title.html">No page title</a> </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            
                                                            
                                                            
                                                            
                                                            
<li class="mega-menu-title">Layouts</li>
<li> <a href="shop-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="shop-fullwidth.html">Fullwidth (Wide)</a> </li>
<li class="mega-menu-title">Loading Styles</li>

                                                            <li> <a href="shop-load-more.html">Load more</a>
<a href="shop-load-more-sidebar.html">Load Sidebar</a> </li>
                                                            
                                                            <li> <a href="shop-infinite-scroll.html">Infinity Scroll</a> </li>
                                                        </ul>
                                                    </div>
<div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li> <a class="animsition-link" href="shop-cart.html">Shoping Cart</a> </li>
                                                            <li> <a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a> </li>
                                                            <li> <a class="animsition-link" href="shop-checkout.html">Checkout</a> </li>
                                                            <li> <a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a> </li>
                                                            <li> <a href="shop-wishlist.html">Wishlist</a> </li>
                                                            <li> <a href="shop-wishlist-empty.html">Wishlist Empty</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li> <a href="shop-single-product.html">Fullwidth</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-both.html">Both Sidebars</a> </li>
                                                        </ul>
                                                    </div>
<div class="col-lg-2-5 p-l-0">

                                        <h4 class="text-theme">BIG SALE <small>Up to</small></h4>

                                        <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                        <p class="m-b-0">The most happiest time of the day!. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p>

                                        <a class="btn btn-shadow btn-rounded btn-block m-t-10">SHOP NOW!</a><small class="t300"><p class="text-center m-0"><em>* Limited time Offer</em></p></small>
                          
</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Page Content -->
        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="content col-lg-9">
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="images/blog/1.jpg">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>Standard post with a single image</h2>
                                        <div class="post-meta">

                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                            <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle, Magazine</a></span>
                                            <div class="post-meta-share">
                                                <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span>Facebook</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                                    <i class="fab fa-twitter"></i>
                                                    <span>Twitter</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                                    <i class="fab fa-instagram"></i>
                                                    <span>Instagram</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                                    <i class="far fa-envelope"></i>
                                                    <span>Mail</span>
                                                </a>
                                            </div>
                                        </div>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit. Nulla facilisi. Pellentesque sed nibh a quam accumsan dignissim quis quis urna. The most happiest time of the day!. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus.M</p>
                                        <div class="blockquote">
                                            <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
                                            <small>by <cite>Albert Einstein</cite></small>
                                        </div>
                                        <p> The most happiest time of the day!. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendisse vel lacus est, sit amet tincidunt erat. Etiam purus sem, euismod eu vulputate eget, porta quis sapien. Donec tellus est, rhoncus vel scelerisque id, iaculis eu nibh.</p>


                                        <p>Donec posuere bibendum metus. Quisque gravida luctus volutpat. Mauris interdum, lectus in dapibus molestie, quam felis sollicitudin mauris, sit amet tempus velit lectus nec lorem. Nullam vel mollis neque. The most happiest time of the day!. Nullam vel enim dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed tincidunt accumsan massa id viverra. Sed sagittis, nisl sit amet imperdiet convallis, nunc tortor consequat tellus, vel molestie neque nulla non ligula. Proin tincidunt tellus ac porta volutpat. Cras mattis congue lacus id bibendum. Mauris ut sodales libero. Maecenas feugiat sit amet enim in accumsan.</p>

                                        <p>Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>

                                    </div>
                                    <div class="post-tags">
                                        <a href="#">Life</a>
                                        <a href="#">Sport</a>
                                        <a href="#">Tech</a>
                                        <a href="#">Travel</a>
                                    </div>
                                    <div class="post-navigation">
                                        <a href="blog-single-slider.html" class="post-prev">
                                            <div class="post-prev-title"><span>Previous Post</span>Post with a slider and lightbox</div>
                                        </a>
                                        <a href="blog-masonry-3.html" class="post-all">
                    <i class="icon-grid">                </i>
                </a>
                                        <a href="blog-single-video.html" class="post-next">
                                            <div class="post-next-title"><span>Next Post</span>Post with YouTube Video</div>
                                        </a>
                                    </div>
                                    <!-- Comments -->
                                    <div class="comments" id="comments">
                                        <div class="comment_number">
                                            Comments <span>(2)</span>
                                        </div>
                                        <div class="comment-list">
                                            <!-- Comment -->
                                            <div class="comment" id="comment-1">
                                                <div class="image"><img alt="" src="images/blog/author.jpg" class="avatar"></div>
                                                <div class="text">
                                                    <h5 class="name">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                                <!-- Comment -->
                                                <div class="comment" id="comment-1-1">
                                                    <div class="image"><img alt="" src="images/blog/author2.jpg" class="avatar"></div>
                                                    <div class="text">
                                                        <h5 class="name">John Doe</h5>
                                                        <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                        <div class="text_holder">
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: Comment -->
                                                <!-- Comment -->
                                                <div class="comment" id="comment-1-2">
                                                    <div class="image"><img alt="" src="images/blog/author3.jpg" class="avatar"></div>
                                                    <div class="text">
                                                        <h5 class="name">John Doe</h5>
                                                        <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                        <div class="text_holder">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: Comment -->
                                            </div>
                                            <!-- end: Comment -->
                                            <!-- Comment -->
                                            <div class="comment" id="comment-2">
                                                <div class="image"><img alt="" src="images/blog/author2.jpg" class="avatar"></div>
                                                <div class="text">
                                                    <h5 class="name">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: Comment -->
                                        </div>
                                    </div>
                                    <!-- end: Comments -->
                                    <div class="respond-form" id="respond">
                                        <div class="respond-comment">
                                            Leave a <span>Comment</span></div>
                                        <form class="form-gray-fields">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="upper" for="name">Name</label>
                                                        <input class="form-control required" name="senderName" placeholder="Enter name" id="name" aria-required="true" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="upper" for="email">Email</label>
                                                        <input class="form-control required email" name="senderEmail" placeholder="Enter email" id="email" aria-required="true" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="upper" for="website">Website</label>
                                                        <input class="form-control website" name="senderWebsite" placeholder="Enter Website" id="website" aria-required="false" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="upper" for="comment">Your comment</label>
                                                        <textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group text-center">
                                                        <button class="btn" type="submit">Submit Comment</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post single item-->
                        </div>

                    </div>
                    <!-- end: content -->

                    <!-- Sidebar-->
                                       <div class="sidebar sticky-sidebar col-lg-3">
                            <!--widget newsletter-->
                            <div class="widget  widget-newsletter">

                                <form id="widget-search-form-sidebar" action="search-results-page.html" method="get" class="form-inline">
                                    <div class="input-group">
                                        <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                                         <div class="input-group-append">
    <span class="input-group-btn">
                  <button type="submit" id="widget-widget-search-form-button" class="btn"><i class="fa fa-search"></i></button>
                  </span>
  </div> </div>
                                </form>
                            </div>
                            <!--end: widget newsletter-->

                            <!--Tabs with Posts-->
                            <div class="widget">                         <div class="tabs">
                                <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tabs-posts-content">
                                    <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/5.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">A true story, that never been told!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/6.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/7.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/6.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/7.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/8.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">New costs and rise of the economy!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/7.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/8.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">New costs and rise of the economy!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="images/blog/thumbnail/6.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!--End: Tabs with Posts-->

                            

                            <!--widget tags -->
                            <div class="widget  widget-tags">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tags">
                                    <a href="#">Design</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Digital</a>
                                    <a href="#">Branding</a>
                                    <a href="#">HTML</a>
                                    <a href="#">Clean</a>
                                    <a href="#">Peace</a>
                                    <a href="#">Love</a>
                                    <a href="#">CSS3</a>
                                    <a href="#">jQuery</a>
                                </div>
                            </div>
                            <!--end: widget tags -->


                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Page Content -->
        <!-- Footer -->
        <footer id="footer">
          
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2019 POLO -  Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="http://www.inspiro-media.com" target="_blank"> INSPIRO</a> </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>

 <!--Plugins-->
 <script src="js/jquery.js"></script>
 <script src="js/plugins.js"></script>

<!--Template functions-->
 <script src="js/functions.js"></script> 

</body>

</html>
