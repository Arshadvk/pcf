<style>
    .mobile-btns {
        display: none;
        /* Hide by default */
    }

    .login-btn {
        display: none !important;        /* Hide by default */
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
    }
</style>

<header id="header" class="site-header header-style-2">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col col-md-9">
                    <div class="contact-info">
                        <ul>
                            <li><i class="ti-mobile"></i> +91-9061116222 </li>
                            <li><i class="ti-email"></i> info@pcfgcc.com</li>
                            <li>Organization: <span style="color: #DFB034;">PEOPLE'S CULTURAL FORUM</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end topbar -->
    <nav class="navigation navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img style="height: 75px;" src="assets/img/logo.png" alt></a>

                <div data-swiper-parallax="500" class="mobile-btns">
                    <a href="/register" class="theme-btn">Member ship</a>
                </div>

            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/our-leaders">PDP Leaders</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li class="login-btn"><a href="/login">Login</a></li>

                </ul>
            </div><!-- end of nav-collapse -->

            <div class="search-contact">

                <div class="contact-btn">
                    <a href="/register" class="theme-btn">Member ship</a>
                </div>
                <div class="contact-btn">
                    <a href="/login" class="theme-btn-s2">Login</a>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
