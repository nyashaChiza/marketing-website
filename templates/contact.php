<?php
        include('layouts/header.php');
?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact with us</span>
                                <h2 class="section-title__title">Write a Message to Experts</h2>
                            </div>
                            <p class="contact-page__text">Lorem ipsum is simply free text available in the market dolor
                                sit amet, consectetur notted adipisicing elit sed do.</p>
                            <ul class="list-unstyled contact-page__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>You’re going to use passage.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Lorem Ipsum generators tend.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="contact-page__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="contact-page__right">
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Subject" name="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write a message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Information Start-->
        <section class="information">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single information__single-1">
                            <div class="information__icon">
                                <span class="icon-route"></span>
                            </div>
                            <div class="information__text">
                                <p>86 Road Broklyn Street, 600 <br> New York, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single information__single-2">
                            <div class="information__icon">
                                <span class="icon-telephone-1"></span>
                            </div>
                            <div class="information__text">
                                <h4>
                                    <a href="tel:926668880000" class="information__number-1">92 666 888 0000</a> <br>
                                    <a href="tel:883326800" class="information__number-2">88 332 6800</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single information__single-3">
                            <div class="information__icon">
                                <span class="icon-email-2"></span>
                            </div>
                            <div class="information__text">
                                <h4>
                                    <a href="mailto:needhelp@sominx.com"
                                        class="information__mail-1">needhelp@sominx.com</a> <br>
                                    <a href="mailto:info@company.com" class="information__mail-2">info@company.com</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Information End-->

        <!--Google Map Start-->
        <section class="contact-page-google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="contact-page-google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->
        <?php
        include('layouts/footer.php');
?>