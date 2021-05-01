<!DOCTYPE html>
<html lang="en">

@include('layouts.website.head')
    <body class="page-blog dm-dark">

        <div class="login-page vh-100">
            <video loop autoplay muted id="vid">
                <source src="{{asset('website2-assets/img/bg.mp4')}}" type="video/mp4">
                <source src="{{asset('website2-assets/img/bg.mp4')}}" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="px-5 col-md-6 ml-auto">
                    <div class="px-5 col-10 mx-auto">
                        <h2 class="text-dark my-0">Welcome Back</h2>
                        <p class="text-50">Sign in to continue</p>
                        @if(Session::has('error'))

                            <div class="row mr-2 ml-2" >
                                <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                        id="type-error">{{Session::get('error')}}
                                </button>
                            </div>
                        @endif
                        <form class="mt-5 mb-4" method="post" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-dark">Email</label>
                                <input type="email" value="{{ old('email') }}" name="email" placeholder="Enter Email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1" class="text-dark">Password</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control"
                                       id="exampleInputPassword1">
                            </div>

                            <button class="btn btn-primary btn-lg btn-block">SIGN IN</button>
                            <div class="py-2">
                                <button class="btn btn-lg btn-facebook btn-block"><i class="feather-facebook"></i> Connect with
                                    Facebook
                                </button>
                            </div>
                        </form>
                        <a href="forgot_password.html" class="text-decoration-none">
                            <p class="text-center">Forgot your password?</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('get.sign.up')}}">
                                <p class="text-center m-0">Don't have an account? Sign up</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="main-nav">
            <ul class="second-nav">
                <li><a href="home.html"><i class="feather-home mr-2"></i> Homepage</a></li>
                <li><a href="my_order.html"><i class="feather-list mr-2"></i> My Orders</a></li>
                <li>
                    <a href="#"><i class="feather-edit-2 mr-2"></i> Authentication</a>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Register</a></li>
                        <li><a href="forgot_password.html">Forgot Password</a></li>
                        <li><a href="verification.html">Verification</a></li>
                        <li><a href="location.html">Location</a></li>
                    </ul>
                </li>
                <li><a href="favorites.html"><i class="feather-heart mr-2"></i> Favorites</a></li>
                <li><a href="trending.html"><i class="feather-trending-up mr-2"></i> Trending</a></li>
                <li><a href="most_popular.html"><i class="feather-award mr-2"></i> Most Popular</a></li>
                <li><a href="restaurant.html"><i class="feather-paperclip mr-2"></i> Restaurant Detail</a></li>
                <li><a href="checkout.html"><i class="feather-list mr-2"></i> Checkout</a></li>
                <li><a href="successful.html"><i class="feather-check-circle mr-2"></i> Successful</a></li>
                <li><a href="map.html"><i class="feather-map-pin mr-2"></i> Live Map</a></li>
                <li>
                    <a href="#"><i class="feather-user mr-2"></i> Profile</a>
                    <ul>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="favorites.html">Delivery support</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="terms.html">Terms of use</a></li>
                        <li><a href="privacy.html">Privacy & Policy</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="feather-alert-triangle mr-2"></i> Error</a>
                    <ul>
                        <li><a href="not-found.html">Not Found</a>
                        <li><a href="maintence.html"> Maintence</a>
                        <li><a href="coming-soon.html">Coming Soon</a>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="feather-link mr-2"></i> Navigation Link Example</a>
                    <ul>
                        <li>
                            <a href="#">Link Example 1</a>
                            <ul>
                                <li>
                                    <a href="#">Link Example 1.1</a>
                                    <ul>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Link Example 1.2</a>
                                    <ul>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Link Example 2</a></li>
                        <li><a href="#">Link Example 3</a></li>
                        <li><a href="#">Link Example 4</a></li>
                        <li data-nav-custom-content>
                            <div class="custom-message">
                                You can add any custom content to your navigation items. This text is just an example.
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="bottom-nav">
                <li class="email">
                    <a class="text-danger" href="home.html">
                        <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
                        Home
                    </a>
                </li>
                <li class="github">
                    <a href="faq.html">
                        <p class="h5 m-0"><i class="feather-message-circle"></i></p>
                        FAQ
                    </a>
                </li>
                <li class="ko-fi">
                    <a href="contact-us.html">
                        <p class="h5 m-0"><i class="feather-phone"></i></p>
                        Help
                    </a>
                </li>
            </ul>
        </nav>
        <footer class="">
            <button class="light" style="display: inline-block!important;" id="mode-toggler"><span data-uk-icon="paint-bucket" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="paint-bucket"><path d="M10.21,1 L0,11.21 L8.1,19.31 L18.31,9.1 L10.21,1 L10.21,1 Z M16.89,9.1 L15,11 L1.7,11 L10.21,2.42 L16.89,9.1 Z"></path><path fill="none" stroke="#000" stroke-width="1.1" d="M6.42,2.33 L11.7,7.61"></path><path d="M18.49,12 C18.49,12 20,14.06 20,15.36 C20,16.28 19.24,17 18.49,17 L18.49,17 C17.74,17 17,16.28 17,15.36 C17,14.06 18.49,12 18.49,12 L18.49,12 Z"></path></svg></span></button>
        </footer>

        @include('layouts.website.script')
        @yield('scripts')
    </body>
</html>
