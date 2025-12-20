<style>
    .mobile-btns {
        display: none;
        /* Hide by default */
    }

    .login-btn {
        display: none !important;        /* Hide by default */
    }
    .header-top{
            display: none;
        }
    @media (max-width: 768px) {
        .mobile-btns {
            display: flex;
            /* Show on small screens (mobile) */
            gap: 10px;
            padding-top: 20px;
            padding-left: 35px;
            /* Optional: add space between buttons */
        }
        .login-btn {
            display: flex !important; 
        }

        .header-top{
            display: block;
            background-color: #203E94;
            
        }
    }
</style>

<header id="header" class="site-header header-style-2">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col col-md-9">
                    <div class="contact-info">
                        <ul>
                            {{-- <li><a  style="text-decoration: none; color:aliceblue" href="tel:+919061116222"><i class="ti-mobile"></i> +91 906 111 6222</a> </li>
                            <li><a style="text-decoration: none; color:aliceblue" href="mailto:pcfgcc@gmail.com"><i class="ti-email"></i> pcfgcc@gmail.com</a></li> --}}
                            <li> <span >PEOPLE'S CULTURAL FORUM</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/people/Peoples-Cultural-Forum-PCF-UAE/100064894413911/?mibextid=LQQJ4d"><i class="ti-facebook"></i></a></li>
                            <li><a href="http://youtube.com/channel/UCfLvj9IEQubbtAiu3wXX-BQ?sub_confirmation=1"><i class="ti-youtube"></i></a></li>
                            <!-- <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end topbar -->
    <div class="header-top">
            <h3 style="color: white; margin:0px;padding:10px" class="text-center">PEOPLE'S CULTURAL FORUM</h3>
    </div>
    <nav class="navigation navbar navbar-default">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img style="height: 75px;" src="/assets/img/logo.png" alt></a>

                <div data-swiper-parallax="500" class="mobile-btns">
                    <a href="/register" class="theme-btn">Membership</a>
                </div>

            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/our-leaders">PDP Leaders</a></li>
                     <li class="menu-item-has-children">
                                <a href="#">Emirates</a>
                                <ul class="sub-menu">
                                    <li><a href="/emirate/1">Abu Dhabi</a></li>
                                    <li><a href="/emirate/2">Dubai</a></li>
                                    <li><a href="/emirate/3">Sharjah</a></li>
                                    <li><a href="/emirate/4">Ajman</a></li>
                                    <li><a href="/emirate/5">Umm Al Quwain</a></li>
                                    <li><a href="/emirate/6">Ras Al Khaimah</a></li>
                                    <li><a href="/emirate/7">Fujairah</a></li>
                                    <li><a href="/emirate/8">Al Ain (AD)</a></li>
                                </ul>
                            </li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li class="login-btn"><a href="/login">Login</a></li>

                </ul>
            </div><!-- end of nav-collapse -->

            <div class="search-contact">

                <div class="contact-btn">
                    <a href="/register" class="theme-btn">Membership</a>
                </div>
                <div class="contact-btn">
                    <a href="/login" class="theme-btn-s2">Login</a>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
