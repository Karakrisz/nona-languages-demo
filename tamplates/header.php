<div class="audio-box">
    <audio id="beep__active" src="http://freesound.org/data/previews/263/263133_2064400-lq.mp3"></audio>
</div>
<!--modal window loader-->
<div class="loader center-block">

    <div class="loaders loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
</div>
<!--modal window loader end-->

<!--main page loader-->
<div class="main-loader center-block">

    <div class="loaders loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>

</div>
<div class="side_nav cursor-light">
    <div class="my-sticky-nav">
        <div class="side_menu">
            <a class="brand-logo" href="/">
                <img src="/portfolio/img/logo.png" alt="logo" />
            </a>
            <div id="my_tog" class="my_tog cursor-light" onmouseover="my_click();">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="side-nav-menu ">
                <ul class="nav-menu nav-fill">
                    <li class="nav-item"> <span>.</span>
                        <!-- <p class="count1" data-count="1">1</p><span>.</span> --><a class="nav-link"
                            href="#home">HOME<span class="active"></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#services-sec">Rólunk<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#project-sec">Tanáraink/Lektoraink<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#pricing-sec">Képzések/Foglalkozások<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Vállalati képzések/Business Coaching<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Események/Szórakozás idegennyelven<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Euroexam<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Próbanyelvvizsgák<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Nyelvvizsga típusok<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Online bejelentkezés<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">E-learning<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Fordítási szolgáltatások<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Galléria<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#client-sec">Könyvajánló/Rendelhető Könyvek<span></span></a>
                    </li>
                    <li class="nav-item"><span>.</span>
                        <a class="nav-link" href="#contact-us-sec">Kapcsolat<span></span></a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-danger btn-login" data-toggle="modal"
                            data-target="#loginModal">BEJELENTKEZÉS /
                            REGISZTRÁCIÓ<span></span></button>
                    </li>
                </ul>
                <div class="slider-social side-icons cursor-light">
                    <ul class="list-unstyled">
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                    class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <p class="rites-res"><span class="d-block" style="color: #f73859;">© 2020 MegaOne.</span>
                    Made with love by Themes Industry</p>
            </nav>
        </div>
    </div>
</div>
<!-- nabvar start-->
<header id="home">
    <nav class="navbar navbar-light bg-light cursor-light">
        <div class="my_nav_tog d-block d-md-none">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a class="navbar-brand ml-auto mr-auto" href="/">
            <img class="navbar-brand__logo-img" src="/karaKrisz/img/logo_vertical_white_optimized.jpg" alt="images" />
        </a>
        <!-- <button type="button" class="btn btn-danger btn-mobile-login" data-toggle="modal"
            data-target="#loginModal">BEJELENTKEZÉS /
            REGISZTRÁCIÓ<span></span></button> -->
        <!--Slider Social-->
        <div class="slider-social d-none d-md-block">
            <ul class="list-unstyled">
                <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                            class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                            class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <?php if ((isset($_SESSION['user']))): ?>
        <div class="user-login-data">
            <p class="user-login-data__p"><i class="user-login-data__p__i">Üdv Nálunk:</i>
                <?php esc($_SESSION["user"]["name"])?></p>
            <a class="user-login-data__link" href="/logout">Kijelentkezés</a>
        </div>
        <?php endif?>
        <!--Cursor-->
    </nav>

    <!--Animated Cursor-->
    <div class="aimated-cursor">
        <div class="cursor">
            <div class="cursor-loader"></div>
        </div>
    </div>
    <!--Animated Cursor End-->

    <div class="broad">
        <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
        <nav class="side-nav-menu">
            <a class="brand-logo" href="#">
                <img src="karaKrisz/img/logo_horizontal_white_optimized.jpg" alt="images"
                    style="height: 90%;width: 90%;" />
            </a>
            <ul class="nav-menu nav-fill">
                <li class="nav-item">
                    <span>01.</span><a class="nav-link" href="#portfolio-sec">HOME<span class="active"></span></a>
                </li>
                <li class="nav-item">
                    <span>02.</span><a class="nav-link" href="#services-sec">Rólunk<span></span></a>
                </li>
                <li class="nav-item">
                    <span>03.</span><a class="nav-link" href="#project-sec">Tanáraink/Lektoraink<span></span></a>
                </li>
                <li class="nav-item">
                    <span>04.</span><a class="nav-link" href="#pricing-sec">Képzések/Foglalkozások<span></span></a>
                </li>
                <li class="nav-item">
                    <span>05.</span><a class="nav-link" href="#client-sec">Vállalati képzések/Business
                        Coaching<span></span></a>
                </li>
                <li class="nav-item">
                    <span>06.</span><a class="nav-link" href="#client-sec">Események/Szórakozás
                        idegennyelven<span></span></a>
                </li>
                <li class="nav-item">
                    <span>07.</span><a class="nav-link" href="#client-sec">Euroexam<span></span></a>
                </li>
                <li class="nav-item">
                    <span>08.</span><a class="nav-link" href="#client-sec">Próbanyelvvizsgák<span></span></a>
                </li>
                <li class="nav-item">
                    <span>09.</span><a class="nav-link" href="#client-sec">Nyelvvizsga típusok<span></span></a>
                </li>
                <li class="nav-item">
                    <span>10.</span><a class="nav-link" href="#client-sec">Online bejelentkezés<span></span></a>
                </li>
                <li class="nav-item">
                    <span>11.</span><a class="nav-link" href="#client-sec">E-learning<span></span></a>
                </li>
                <li class="nav-item">
                    <span>12.</span><a class="nav-link" href="#client-sec">Fordítási szolgáltatások<span></span></a>
                </li>
                <li class="nav-item">
                    <span>13.</span><a class="nav-link" href="#client-sec">Galléria<span></span></a>
                </li>
                <li class="nav-item">
                    <span>13.</span><a class="nav-link" href="#client-sec">Könyvajánló/Rendelhető
                        Könyvek<span></span></a>
                </li>
                <li class="nav-item">
                    <span>10.</span><a class="nav-link" href="#contact-us-sec">Kapcsolat<span></span></a>
                </li>
            </ul>
            <div class="social-icons">
                <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                <span><a href="#"><i class="fab fa-instagram"></i></a></span>
            </div>
            <p class="rites-res"><span class="d-block">© 2020 youSite.</span> Minden jog fenntartva</p>

        </nav>
    </div>
</header>

<!-- The Modal start -->
<!--Modal: Login / Register Form-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i
                                class="fas fa-user mr-1"></i>
                            Bejelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i
                                class="fas fa-user-plus mr-1"></i>
                            Regisztráció</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body mb-2">
                            <form method="POST" action="/login">
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" name="email" id="email"
                                        class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Email
                                        címe</label>
                                </div>

                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" name="password" id="password"
                                        class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Jelszava</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="submit" class="btn login-btn">Bejelentkezés <i
                                            class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect ml-auto"
                                data-dismiss="modal">Bezárás</button>
                        </div>
                    </div>
                    <!--/.Panel 7-->
                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <div class="modal-body">
                            <form id="Registration" method="POST">
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-user"></i>
                                    <input name="register_name" id="register_name"
                                        class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Az Ön
                                        neve</label>
                                </div>
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" name="register_email" id="register_email"
                                        class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Az email
                                        címe</label>
                                </div>
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" name="register_password" id="register_password"
                                        class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">A
                                        jelszava</label>
                                </div>
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" name="register_password_2" id="register_password_2"
                                        class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Jelszó
                                        újra</label>
                                </div>
                                <div class="md-form form-sm mb-2 request-box">
                                    <input type="text" name="request_id" id="request_id"
                                        class="form-control form-control-sm validate">
                                </div>
                                <div class="alert alert-danger inserted-alert-danger login-alert">
                                    <p id="incorrect_password">
                                    </p>
                                </div>
                                <div class="alert alert-success inserted-alert-success login-alert">
                                    <p id="inserted">
                                    </p>
                                </div>
                                <div class="text-center form-sm mt-2">
                                    <button type="submit" class="btn login-btn">Regisztráció <i
                                            class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect ml-auto"
                                data-dismiss="modal">Bezárás</button>
                        </div>
                        <!--Body-->
                    </div>
                    <!--/.Panel 8-->
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- The Modal end -->