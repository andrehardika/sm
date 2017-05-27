<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="image/favicon.png" rel="icon" />
  <title>Senyum Media</title>
  <meta name="description" content="">
  <!-- CSS Part Start-->
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/fontawesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/theme-homepage.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/owlcarousel/css/owl.carousel.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/owlcarousel/css/owl.transitions.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/theme-homepage-responsive.css') }}" />
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
  <!-- CSS Part End-->
</head>
<body>
  <div class="wrapper-wide">
    <div id="header">
      <!-- Top Bar Start-->
      <nav id="top" class="htop">
        <div class="container">
          <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
            <div class="pull-left flip left-top">
              <div class="links">
                <ul>
                  <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                  <li class="email"><a href="mailto:senyum@example.com"><i class="fa fa-envelope"></i>senyum@example.com</a></li>
                  <li><a href="#">Wish List (0)</a></li>
                  <!-- <li><a href="checkout.html">Checkout</a></li> -->
                </ul>
              </div>
            </div>
            <div id="top-links" class="nav pull-right flip">
              <ul>
                <li><a href="masuk.html">Masuk</a></li>
                <li><a href="daftar.html">Daftar</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- Top Bar End-->
      <!-- Header Start-->
      <header class="header-row">
        <div class="container">
          <div class="table-container">
            <!-- Logo Start -->
            <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
              <div id="logo"><a href="index.html"><img class="img-responsive" src="#" title="Senyum Media" alt="Senyum Media" /></a></div>
            </div>
            <!-- Logo End -->
            <!-- Mini Cart Start-->
            <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div id="cart">
                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                  <span class="cart-icon pull-left flip"></span>
                  <span id="cart-total">Keranjang Belanja</span></button>
                  <!-- <ul class="dropdown-menu">
                    <li>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="text-center"><a href="product.html"><img class="img-thumbnail" title="Xitefun Causal Wear Fancy Shoes" alt="Xitefun Causal Wear Fancy Shoes" src="image/product/sony_vaio_1-50x50.jpg"></a></td>
                            <td class="text-left"><a href="product.html">Xitefun Causal Wear Fancy Shoes</a></td>
                            <td class="text-right">x 1</td>
                            <td class="text-right">$902.00</td>
                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                          </tr>
                          <tr>
                            <td class="text-center"><a href="product.html"><img class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="image/product/samsung_tab_1-50x50.jpg"></a></td>
                            <td class="text-left"><a href="product.html">Aspire Ultrabook Laptop</a></td>
                            <td class="text-right">x 1</td>
                            <td class="text-right">$230.00</td>
                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                          </tr>
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <div>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td class="text-right"><strong>Sub-Total</strong></td>
                              <td class="text-right">$940.00</td>
                            </tr>
                            <tr>
                              <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                              <td class="text-right">$4.00</td>
                            </tr>
                            <tr>
                              <td class="text-right"><strong>VAT (20%)</strong></td>
                              <td class="text-right">$188.00</td>
                            </tr>
                            <tr>
                              <td class="text-right"><strong>Total</strong></td>
                              <td class="text-right">$1,132.00</td>
                            </tr>
                          </tbody>
                        </table>
                        <p class="checkout"><a href="cart.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> Checkout</a></p>
                      </div>
                    </li>
                  </ul> -->
                </div>
              </div>
              <!-- Mini Cart End-->
              <!-- Search Start-->
              <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                <div id="search" class="input-group">
                  <input id="filter_name" type="text" name="search" value="" placeholder="Cari" class="form-control input-lg" />
                  <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <!-- Search End-->
            </div>
          </div>
        </header>
        <!-- Header End-->
        <!-- Main Menu Start-->
        <div class="container">
          <nav id="menu" class="navbar">
            <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li><a class="home_link" title="Home" href="index.html"><span>Home</span></a></li>
                <li class="mega-menu dropdown"><a>Kategori</a>
                  <div class="dropdown-menu">
                    <div class="column col-lg-2 col-md-3"><a href="category.html">Kategori</a>
                      <div>
                        <ul>
                          <li><a href="category.html">Kategori A <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">Sub Kategori A <span>&rsaquo;</span></a>
                                  <div class="dropdown-menu">
                                    <ul>
                                      <li><a href="#">Sub sub kategori A</a></li>
                                    </ul>
                                  </div>
                                </li>
                                <li><a href="category.html">Sub Kategori B</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html" >Kategori B</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="menu_brands dropdown"><a href="#">Produsen</a>
                  <div class="dropdown-menu">
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="Apple" alt="Apple" /></a><a href="#">Produsen</a></div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- Main Menu End-->
      </div>
      <div id="container">
        <!-- Feature Box Start-->
        <div class="container">
          <div class="custom-feature-box row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="feature-box fbox_1">
                <div class="title">Promo</div>
                <p>Lorem ipsum dolor set amet.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="feature-box fbox_2">
                <div class="title">Promo</div>
                <p>Lorem ipsum dolor set amet.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="feature-box fbox_3">
                <div class="title">Promo</div>
                <p>Lorem ipsum dolor set amet.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="feature-box fbox_4">
                <div class="title">Promo</div>
                <p>Lorem ipsum dolor set amet.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Feature Box End-->
        <div class="container">
          <div class="row">
            <!-- Left Part Start-->
            <aside id="column-left" class="col-sm-3 hidden-xs">
              <h3 class="subtitle">Kategori</h3>
              <div class="box-category">
                <ul id="cat_accordion">
                  <li><a href="category.html">Kategori</a> <span class="down"></span>
                    <ul>
                      <li><a href="category.html">Men</a> <span class="down"></span>
                        <ul>
                          <li><a href="category.html">Sub Kategori A</a> <span class="down"></span>
                            <ul>
                              <li><a href="#">Sub sub kategori A</a></li>
                            </ul>
                          </li>
                          <li><a href="category.html">Sub Kategori B</a></li>
                        </ul>
                      </li>
                      <li><a href="category.html">Women</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <h3 class="subtitle">Populer</h3>
              <div class="side-item">
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-50x50.jpg" alt="Brand Fashion Cotton T-Shirt" title="Brand Fashion Cotton T-Shirt" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">Brand Fashion Cotton T-Shirt</a></h4>
                    <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$122.00</span> <span class="saving">-10%</span></p>
                  </div>
                </div>
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/iphone_1-50x50.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">iPhone5</a></h4>
                    <p class="price"> $123.20 </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                  </div>
                </div>
              </div>
              <div class="banner owl-carousel">
                <div class="item"> <a href="#"><img src="image/banner/small-banner1-265x350.jpg" alt="small banner" class="img-responsive" /></a> </div>
                <div class="item"> <a href="#"><img src="image/banner/small-banner-265x350.jpg" alt="small banner1" class="img-responsive" /></a> </div>
              </div>
              <h3 class="subtitle">Terbaru</h3>
              <div class="side-item">
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/iphone_6-50x50.jpg" alt="Hair Care Cream for Men" title="Hair Care Cream for Men" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">Hair Care Cream for Men</a></h4>
                    <p class="price"> $134.00 </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                </div>
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/nikon_d300_5-50x50.jpg" alt="Hair Care Products" title="Hair Care Products" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">Hair Care Products</a></h4>
                    <p class="price"> <span class="price-new">$66.80</span> <span class="price-old">$90.80</span> <span class="saving">-27%</span> </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- Left Part End-->
            <!--Middle Part Start-->
            <div id="content" class="col-sm-9">
              <!-- Slideshow Start-->
              <div class="slideshow single-slider owl-carousel">
                <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-3.jpg" alt="banner 3" /></a> </div>
              </div>
              <!-- Slideshow End-->
              <!-- Produk Populer Start-->
              <h3 class="subtitle">Populer - <a class="viewall" href="#">lihat semua</a></h3>
              <div class="owl-carousel product_carousel">
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-200x200.jpg" alt="Brand Fashion Cotton T-Shirt" title="Brand Fashion Cotton T-Shirt" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">Brand Fashion Cotton T-Shirt</a></h4>
                    <p class="price"><span class="price-new">$110.00</span><span class="price-old">$122.00</span><span class="saving">-10%</span></p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick="cart.add('42');"><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                </div>
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/iphone_1-200x200.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">iPhone5</a></h4>
                    <p class="price"> $123.20 </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Produk Populer End-->
              <!-- Banner Start-->
              <div class="marketshop-banner">
                <div class="row">
                  <div class="col-xs-12"><a href="#"><img src="image/banner/sample-banner-3-400x200.jpg" alt="Sample Banner 3" title="Sample Banner 3" /></a></div>
                </div>
              </div>
              <!-- Banner End-->
              <!-- Produk Terbaru Start-->
              <h3 class="subtitle">Terbaru - <a class="viewall" href="#">lihat semua</a></h3>
              <div class="owl-carousel product_carousel">
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-200x200.jpg" alt="Brand Fashion Cotton T-Shirt" title="Brand Fashion Cotton T-Shirt" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">Brand Fashion Cotton T-Shirt</a></h4>
                    <p class="price"><span class="price-new">$110.00</span><span class="price-old">$122.00</span><span class="saving">-10%</span></p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick="cart.add('42');"><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                </div>
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/iphone_1-200x200.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">iPhone5</a></h4>
                    <p class="price"> $123.20 </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                </div>
                <div class="product-thumb clearfix">
                  <div class="image"><a href="product.html"><img src="image/product/canon_eos_5d_1-200x200.jpg" alt="Long Sleeve Shirt Fashion Men" title="Long Sleeve Shirt Fashion Men" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="product.html">Long Sleeve Shirt Fashion Men</a></h4>
                    <p class="price"> <span class="price-new">$98.00</span> <span class="price-old">$122.00</span> <span class="saving">-20%</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Produk Terbaru End-->
              
              <!-- Brand Logo Carousel Start-->
              <h3 class="subtitle">Produsen</h3>
              <div id="carousel" class="owl-carousel nxt">
                <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="Palm" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="Sony" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="Apple" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="HTC" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="Hewlett-Packard" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>
              </div>
              <!-- Brand Logo Carousel End -->
            </div>
            <!--Middle Part End-->
          </div>
        </div>
      </div>
      <!--Footer Start-->
      <footer id="footer">
        <div class="fpart-first">
          <div class="container">
            <div class="row">
              <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h5>Contact Details</h5>
                <ul>
                  <li class="address"><i class="fa fa-map-marker"></i>Example Street 125, Jember</li>
                  <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                  <li class="email"><i class="fa fa-envelope"></i>Send email via our <a href="contact-us.html">Contact Us</a>
                  </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  <h5>Information</h5>
                  <ul>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="about-us.html">Delivery Information</a></li>
                    <li><a href="about-us.html">Privacy Policy</a></li>
                    <li><a href="about-us.html">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  <h5>Customer Service</h5>
                  <ul>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="sitemap.html">Site Map</a></li>
                  </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  <h5>Extras</h5>
                  <ul>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Gift Vouchers</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Specials</a></li>
                  </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  <h5>My Account</h5>
                  <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Newsletter</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="fpart-second">
            <div class="container">
              <div id="powered" class="clearfix">
                <div class="powered_text pull-left flip">
                  <p>Copyright &copy;<a href="http://www.mascitra.com">Mascitra</a> - 2017</p>
                </div>
                <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>
              </div>
            </div>
          </div>
          <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
        </footer>
        <!--Footer End-->
      </div>
      <!-- JS Part Start-->
      <script type="text/javascript" src="{{ base_url('assets/plugins/jquery/jquery-3.1.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/plugins/jquery-easing/jquery.easing.1.3.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/plugins/jquery-dcjqaccordion/jquery.dcjqaccordion.2.7.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/plugins/owlcarousel/js/owl.carousel.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/js/custom.js') }}"></script>
      <!-- JS Part End-->
    </body>
    </html>