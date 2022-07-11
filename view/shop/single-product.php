<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="view/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="view/assets/img/favicon.png">
    <title>
        Soft UI Dashboard PRO by Creative Tim
    </title>


    <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href=view/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="view/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=BFmLLKZGRCjfqKvFZiTrf8dMIqVFfGzCl7QHZu8bPGL0nERgXp_b1dfiP8hIvlcIWUHFyJ7-e2qU9TSwcKZjvuogGz0HikDgtLvbU9C3aCFrRcJ5RchtrfuxHZBdYxy1zSZauNCk4e3T3IS84yuByoJJ9wdrpV7sdPlxUkacjqk" charset="UTF-8"></script><script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="view/assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="view/assets/css/soft-ui-dashboard.min.css?v=1.0.9" rel="stylesheet" />


</head>
<body class="g-sidenav-show  bg-gray-100">

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <?php if(isset($_SESSION["errors"])){?>
                    <div class=" p-3 mb-2 bg-danger text-white d-flex align-items-center mt-3" role="alert">
                        <div>
                            <?php
                               foreach ($_SESSION["errors"] as $error) {
                                    echo "<li>".$error;
                               }
                                    unset($_SESSION["errors"]);
                            ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col text-center">
                        <form method="post" action="checkout">
                        <img class="w-100 border-radius-lg shadow-lg mx-auto" src="<?php echo $_SESSION["productinfo"][0]["picture"]?>" alt="chair">
<!--                                <div class="my-gallery d-flex mt-4 pt-2" itemscope itemtype="http://schema.org/ImageGallery">-->
<!--                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">-->
<!--                                        <a href="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg" itemprop="contentUrl" data-size="500x600">-->
<!--                                            <img class="w-75 min-height-100 max-height-100 border-radius-lg shadow" src="--><?php //echo $_SESSION["productinfo"][0]["picture"]?><!--" itemprop="thumbnail" alt="Image description" />-->
<!--                                        </a>-->
<!--                                    </figure>-->
<!--                                </div>-->
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                    <div class="pswp__bg"></div>

                                    <div class="pswp__scroll-wrap">


                                        <div class="pswp__container">
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                        </div>

                                        <div class="pswp__ui pswp__ui--hidden">
                                            <div class="pswp__top-bar">

                                                <div class="pswp__counter"></div>
                                                <button class="btn btn-white btn-sm pswp__button pswp__button--close">Close (Esc)</button>
                                                <button class="btn btn-white btn-sm pswp__button pswp__button--fs">Fullscreen</button>
                                                <button class="btn btn-white btn-sm pswp__button pswp__button--arrow--left">Prev
                                                </button>
                                                <button class="btn btn-white btn-sm pswp__button pswp__button--arrow--right">Next
                                                </button>


                                                <div class="pswp__preloader">
                                                    <div class="pswp__preloader__icn">
                                                        <div class="pswp__preloader__cut">
                                                            <div class="pswp__preloader__donut"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                <div class="pswp__share-tooltip"></div>
                                            </div>
                                            <div class="pswp__caption">
                                                <div class="pswp__caption__center"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-auto">
                                <h3 class="mt-lg-0 mt-4 text-uppercase"><?php echo $_SESSION["productinfo"][0]["name"]?></h3>
                                <div class="rating">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                </div>
                                <br>
                                <h5><?php echo $_SESSION["productinfo"][0]["price_product"]."€"?></h5>
                                <br>
                                <label class="mt-4">Description</label>
                                <ul>
                                    <li><?php echo $_SESSION["productinfo"][0]["description"]?></li>
                                </ul>
                                <div class="row mt-4">
                                    <div class="col-lg-2">
                                        <label>Quantité</label>
                                            <select class="form-control" name="choices-quantity" id="choices-quantity">
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-5">
                                        <button type="submit" class="btn bg-gradient-primary mb-0 mt-lg-auto w-100">Payer maintenant</button>
                                    </div>
                                </div>
                                    </form>
                            </div>
                        </div>
<!--                        <div class="row mt-5  ">-->
<!--                            <div class="col-12">-->
<!--                                <h5 class="ms-3">Other Products</h5>-->
<!--                                <div class="table table-responsive">-->
<!--                                    <table class="table align-items-center mb-0">-->
<!--                                        <thead>-->
<!--                                        <tr>-->
<!--                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>-->
<!--                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>-->
<!--                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Review</th>-->
<!--                                        </tr>-->
<!--                                        </thead>-->
<!--                                        <tbody>-->
<!--                                        <tr>-->
<!--                                            <td>-->
<!--                                                <div class="d-flex px-2 py-1">-->
<!--                                                    <div>-->
<!--                                                        <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg" class="avatar avatar-md me-3" alt="table image">-->
<!--                                                    </div>-->
<!--                                                    <div class="d-flex flex-column justify-content-center">-->
<!--                                                        <h6 class="mb-0 text-sm">Christopher Knight Home</h6>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <p class="text-sm text-secondary mb-0">$89.53</p>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <div class="rating ms-lg-n4">-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>-->
<!--                                                <div class="d-flex px-2 py-1">-->
<!--                                                    <div>-->
<!--                                                        <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-pink.jpg" class="avatar avatar-md me-3" alt="table image">-->
<!--                                                    </div>-->
<!--                                                    <div class="d-flex flex-column justify-content-center">-->
<!--                                                        <h6 class="mb-0 text-sm">Bar Height Swivel Barstool</h6>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <p class="text-sm text-secondary mb-0">$99.99</p>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <div class="rating ms-lg-n4">-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>-->
<!--                                                <div class="d-flex px-2 py-1">-->
<!--                                                    <div>-->
<!--                                                        <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-steel.jpg" class="avatar avatar-md me-3" alt="table image">-->
<!--                                                    </div>-->
<!--                                                    <div class="d-flex flex-column justify-content-center">-->
<!--                                                        <h6 class="mb-0 text-sm">Signature Design by Ashley</h6>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <p class="text-sm text-secondary mb-0">$129.00</p>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <div class="rating ms-lg-n4">-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>-->
<!--                                                <div class="d-flex px-2 py-1">-->
<!--                                                    <div>-->
<!--                                                        <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-wood.jpg" class="avatar avatar-md me-3" alt="table image">-->
<!--                                                    </div>-->
<!--                                                    <div class="d-flex flex-column justify-content-center">-->
<!--                                                        <h6 class="mb-0 text-sm">Modern Square</h6>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <p class="text-sm text-secondary mb-0">$59.99</p>-->
<!--                                            </td>-->
<!--                                            <td>-->
<!--                                                <div class="rating ms-lg-n4">-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star" aria-hidden="true"></i>-->
<!--                                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                            <td class="align-middle text-sm">-->
<!--                                                <div class="progress mx-auto">-->
<!--                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--                                                </div>-->
<!--                                            </td>-->
<!--                                            <td class="align-middle text-center">-->
<!--                                                <span class="text-secondary text-sm">001992</span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        </tbody>-->
<!--                                    </table>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>

        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg blur">
        <div class="card-header pb-0 pt-3  bg-transparent ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>

        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">

            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                </div>
            </a>

            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

            <div class="mt-3">
                <h6 class="mb-0">Navbar Fixed</h6>
            </div>
            <div class="form-check form-switch ps-0">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
            </div>
            <hr class="horizontal dark mb-1 d-xl-block d-none">
            <div class="mt-2 d-xl-block d-none">
                <h6 class="mb-0">Sidenav Mini</h6>
            </div>
            <div class="form-check form-switch ps-0 d-xl-block d-none">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
            </div>
            <hr class="horizontal dark mb-1 d-xl-block d-none">
            <div class="mt-2 d-xl-block d-none">
                <h6 class="mb-0">Light/Dark</h6>
            </div>
            <div class="form-check form-switch ps-0 d-xl-block d-none">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Buy now</a>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free demo</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard">View documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/ct-soft-ui-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>

<script src="view/assets/js/core/popper.min.js"></script>
<script src="view/assets/js/core/bootstrap.min.js"></script>
<script src="view/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="view/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="view/assets/js/plugins/choices.min.js"></script>
<script src="view/assets/js/plugins/photoswipe.min.js"></script>
<script src="view/assets/js/plugins/photoswipe-ui-default.min.js"></script>
<script>
    if (document.getElementById('choices-quantity')) {
        var element = document.getElementById('choices-quantity');
        const example = new Choices(element, {
            searchEnabled: false,
            itemSelectText: ''
        });
    };

    if (document.getElementById('choices-material')) {
        var element = document.getElementById('choices-material');
        const example = new Choices(element, {
            searchEnabled: false,
            itemSelectText: ''
        });
    };

    if (document.getElementById('choices-colors')) {
        var element = document.getElementById('choices-colors');
        const example = new Choices(element, {
            searchEnabled: false,
            itemSelectText: ''
        });
    };

    // Gallery Carousel
    if (document.getElementById('products-carousel')) {
        var myCarousel = document.querySelector('#products-carousel')
        var carousel = new bootstrap.Carousel(myCarousel)
    }


    // Products gallery

    var initPhotoSwipeFromDOM = function(gallerySelector) {

        // parse slide data (url, title, size ...) from DOM elements
        // (children of gallerySelector)
        var parseThumbnailElements = function(el) {
            var thumbElements = el.childNodes,
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;

            for (var i = 0; i < numNodes; i++) {

                figureEl = thumbElements[i]; // <figure> element
                // include only element nodes
                if (figureEl.nodeType !== 1) {
                    continue;
                }

                linkEl = figureEl.children[0]; // <a> element

                size = linkEl.getAttribute('data-size').split('x');

                // create slide object
                item = {
                    src: linkEl.getAttribute('href'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };

                if (figureEl.children.length > 1) {
                    // <figcaption> content
                    item.title = figureEl.children[1].innerHTML;
                }

                if (linkEl.children.length > 0) {
                    // <img> thumbnail element, retrieving thumbnail url
                    item.msrc = linkEl.children[0].getAttribute('src');
                }

                item.el = figureEl; // save link to element for getThumbBoundsFn
                items.push(item);
            }

            return items;
        };

        // find nearest parent element
        var closest = function closest(el, fn) {
            return el && (fn(el) ? el : closest(el.parentNode, fn));
        };

        // triggers when user clicks on thumbnail
        var onThumbnailsClick = function(e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : e.returnValue = false;

            var eTarget = e.target || e.srcElement;

            // find root element of slide
            var clickedListItem = closest(eTarget, function(el) {
                return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
            });

            if (!clickedListItem) {
                return;
            }

            // find index of clicked item by looping through all child nodes
            // alternatively, you may define index via data- attribute
            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.childNodes,
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;

            for (var i = 0; i < numChildNodes; i++) {
                if (childNodes[i].nodeType !== 1) {
                    continue;
                }

                if (childNodes[i] === clickedListItem) {
                    index = nodeIndex;
                    break;
                }
                nodeIndex++;
            }



            if (index >= 0) {
                // open PhotoSwipe if valid index found
                openPhotoSwipe(index, clickedGallery);
            }
            return false;
        };

        // parse picture index and gallery index from URL (#&pid=1&gid=2)
        var photoswipeParseHash = function() {
            var hash = window.location.hash.substring(1),
                params = {};

            if (hash.length < 5) {
                return params;
            }

            var vars = hash.split('&');
            for (var i = 0; i < vars.length; i++) {
                if (!vars[i]) {
                    continue;
                }
                var pair = vars[i].split('=');
                if (pair.length < 2) {
                    continue;
                }
                params[pair[0]] = pair[1];
            }

            if (params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            return params;
        };

        var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                gallery,
                options,
                items;

            items = parseThumbnailElements(galleryElement);

            // define options (if needed)
            options = {

                // define gallery index (for URL)
                galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                getThumbBoundsFn: function(index) {
                    // See Options -> getThumbBoundsFn section of documentation for more info
                    var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();

                    return {
                        x: rect.left,
                        y: rect.top + pageYScroll,
                        w: rect.width
                    };
                }

            };

            // PhotoSwipe opened from URL
            if (fromURL) {
                if (options.galleryPIDs) {
                    // parse real index when custom PIDs are used
                    // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                    for (var j = 0; j < items.length; j++) {
                        if (items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    // in URL indexes start from 1
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }

            // exit if index not found
            if (isNaN(options.index)) {
                return;
            }

            if (disableAnimation) {
                options.showAnimationDuration = 0;
            }

            // Pass data to PhotoSwipe and initialize it
            gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };

        // loop through all gallery elements and bind events
        var galleryElements = document.querySelectorAll(gallerySelector);

        for (var i = 0, l = galleryElements.length; i < l; i++) {
            galleryElements[i].setAttribute('data-pswp-uid', i + 1);
            galleryElements[i].onclick = onThumbnailsClick;
        }

        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = photoswipeParseHash();
        if (hashData.pid && hashData.gid) {
            openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
        }
    };

    // execute above function
    initPhotoSwipeFromDOM('.my-gallery');
</script>

<script src="view/assets/js/plugins/dragula/dragula.min.js"></script>
<script src="view/assets/js/plugins/jkanban/jkanban.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="view/assets/js/soft-ui-dashboard.min.js?v=1.0.9"></script>
</body>
</html>