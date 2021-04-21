@extends('layouts.front.app')
@section('content')



    <body class="page-showcase">
    <div class="page-wrapper">
        <header class="page-header">

        </header>
        <main class="page-main">
            <div class="page-content">
                <div class="uk-section uk-container">

                    <div class="uk-section-small uk-container">
                        <div class="uk-flex uk-flex-center">
                            <div class="logo"><a class="logo__link" href="index.html"><img class="logo__img" src="assets/img/logo.png" alt="Antek"></a></div>
                        </div>
                    </div>
                    <div class="uk-h3 uk-text-center uk-margin-large-bottom">SELECT PAGE</div>
                    <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-flex-center" data-uk-grid data-uk-scrollspy="target: &gt; div; cls: uk-animation-slide-bottom-small; delay: 300">
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="home.html" style="background-image: url(assets/preview/01_home-dark.jpg);"></a></div>
                            <div class="uk-h3 uk-text-center">Home </div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-catalog.html" style="background-image: url(assets/preview/03_catalogue-dark.jpg);"></a></div>
                            <div class="uk-h3 uk-text-center">Categories 1</div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-catalog-sidebar.html" style="background-image: url(assets/preview/catalog.jpg);"></a></div>
                            <div class="uk-h3 uk-text-center">Categories 2</div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-product.html" style="background-image: url(assets/preview/04_product-dark.jpg);"></a></div>
                            <div class="uk-h3 uk-text-center">Product Page</div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-pizza-builder.html" style="background-image: url(assets/preview/15_food-builder.jpg);"></a></div>
                            <div class="uk-h3 uk-text-center">Food builder</div>
                        </div>

                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-blog.html" style="background-image: url(assets/preview/blog.jpg);"></a></div>
                            <div class="uk-h3 uk-text-center">Blog Page</div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-blog-article.html" style="background-image: url(assets/preview/post.jpg);"></a></div>
                            <div class="uk-h3 uk-text-center">Post Page</div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-contacts.html" style="background-image: url(assets/preview/11_contact.jpg);"></a></div>
                            <div class="uk-h3 uk-text-center">Contacts page</div>
                        </div>

                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-cart.html" style="background-image: url(assets/preview/08_empty-cart.jpg);"></a></div>

                            <div class="uk-h3 uk-text-center">Cart page</div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-404.html" style="background-image: url(assets/preview/10_404-error.jpg);"></a></div>

                            <div class="uk-h3 uk-text-center">404 Page</div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="page-wishlist.html" style="background-image: url(assets/preview/09_empty-wishlist.jpg);"></a></div>

                            <div class="uk-h3 uk-text-center">Wishlist Page</div>
                        </div>
                        <div>
                            <div class="demopage-preview_item"><a class="demopage-preview_inner demopage-img" target="_blank" href="typography.html" style="background-image: url(assets/preview/typography.jpg);"></a></div>

                            <div class="uk-h3 uk-text-center">Typography Page</div>
                        </div>



                    </div>
                </div>
            </div>
        </main>
    </div>

    </body>


@endsection

@push('js')

@endpush
