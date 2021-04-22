<footer class="page-footer">
    <div class="page-footer__top">
        <div class="uk-container">
            <div class="page-footer__logo">
                <div class="logo"> <a class="logo__link" href="#"><img class="logo__img" src="{{asset('website-assets/img/logo-white.png')}}" alt="logo"></a></div>
            </div>
            <div class="page-footer__contacts">
                <div class="contact-item-box">
                    <div class="contact-item-box__title">Our Address </div>
                    <div class="contact-item-box__value">430 Barfield Lane, Indianapolis,<br> CA 46278, USA</div>
                </div>
                <div class="contact-item-box">
                    <div class="contact-item-box__title">Opening Hours</div>
                    <div class="contact-item-box__value">Mon – Sat: 10:00 AM – 11:30 PM<br> Sun: 9:00 AM – 4:00 PM</div>
                </div>
                <div class="contact-item-box">
                    <div class="contact-item-box__title">Contact us</div>
                    <div class="contact-item-box__value">Email: <a href="mailto:food@our-example.com">food@our-example.com</a><br> Phone: <a href="tel:3205448749">320-544-8749</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-footer__middle">
        <div class="uk-container">
            <ul class="uk-navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Menu</a></li>
                <li><a href="#">Offers</a></li>
                <li><a href="#">404</a></li>
                <li><a href="#">Wishlist</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="page-footer__bottom">
        <div class="uk-container">
            <div class="page-footer__social">
                <ul class="social">
                    <li class="social-item"><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="page-footer__copy"><span>© Copyrights 2020 Spedito. All rights reserved.</span><a href="#">Terms and Conditions</a></div>
        </div>
    </div>
    <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
            <div class="uk-margin-top">
                <ul class="uk-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Spedito</a></li>
                    <li><a href="#">Order Online</a></li>
                    <li><a href="#">Our Menu</a></li>
                    <li><a href="#">Latest News</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <hr class="uk-margin">
            <ul class="uk-nav uk-nav-parent-icon" data-uk-nav>
                <li><a href="#">Burgers</a></li>
                <li class="uk-parent"><a href="#">Pizzas </a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Sriracha Beef</a></li>
                        <li><a href="#">Garlic Prawn Pizza</a></li>
                        <li><a href="#">Classic Pepproni</a></li>
                        <li><a href="#">Pizza Margherita</a></li>
                        <li><a href="#">Hot n Spicy Pizza</a></li>
                    </ul>
                </li>
                <li><a href="#">Noodles</a></li>
                <li><a href="#">Sushi</a></li>
                <li><a href="#">Desserts</a></li>
                <li><a href="#">Salads</a></li>
                <li><a href="#">Drinks</a></li>
            </ul>
            <hr class="uk-margin">
            <div class="uk-margin-bottom">
                <div class="block-with-phone"><img src="{{asset('website-assets/img/icons/delivery.svg')}}" alt="delivery" data-uk-svg>
                    <div> <span>For Delivery, Call us</span><a href="tel:13205448749">1-320-544-8749</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-flex-top" id="callback" data-uk-modal="">
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close=""></button>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="uk-modal-full uk-modal" id="modal-full" data-uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport><button class="uk-modal-close-full" type="button" data-uk-close></button>
            <form class="uk-search uk-search-large"><input class="uk-search-input uk-text-center" type="search" placeholder="Search..." autofocus></form>
        </div>
    </div>
</footer>
