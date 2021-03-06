<!-- Main Container -->
  <section class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="col-main">
            <div class="jtv-featured-products">
              <div class="slider-items-products">
                <div class="jtv-new-title">
                  <h2>BikesProducts</h2>
                </div>
                
                <div id="featured-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
                    @foreach($products as $product)
                    <div class="item">
                      
                      <div class="item-inner">
                         
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="upload/product/{{$product->image}}" width="263px" height="300px"> </a>
                            <div class="new-label new-top-left">new</div>
                            <div class="mask-shop-white"></div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{$product->name}} </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">R{{$product->price}}</span></span>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                </div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                 <a href="{{url('/product_details/'.$product->id)}}"> <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button></a>
                                </div>
                              </div>
                            </div>


                          </div>
                           

                        </div>

                      </div>

                      
                    </div>
                     @endforeach
                   

                    
                    <!-- <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                            <div class="mask-shop-white"></div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                            <div class="mask-shop-white"></div>
                            <div class="new-label new-top-left">new</div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span></span>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $199.00 </span> </p>
                                </div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                            <div class="sale-label sale-top-left">Sale</div>
                            <div class="mask-shop-white"></div>
                            <div class="new-label new-top-left">new</div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span></span></div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                            <div class="mask-shop-white"></div>
                            <div class="new-label new-top-left">new</div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span></span></div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                            <div class="mask-shop-white"></div>
                            <div class="new-label new-top-left">new</div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$179.00</span></span></div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Trending Products Slider -->
          <div class="jtv-trending-products">
            <div class="slider-items-products">
              <div class="jtv-new-title">
                <h2>Trending Products</h2>
              </div>
              <div id="trending-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="new-label new-top-left">new</div>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$222.79</span></span>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $269.00 </span> </p>
                              </div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="sale-label sale-top-right">Sale</div>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$199.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="sale-label sale-top-right">Sale</div>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span></span>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $269.00 </span> </p>
                              </div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="sale-label sale-top-left">Sale</div>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$189.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$219.00</span></span></div>
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Trending Products Slider --> 
          
          <!-- Latest Blog -->
          <div class="jtv-latest-blog">
            <div class="jtv-new-title">
              <h2>Latest News</h2>
            </div>
            <div class="row">
              <div class="blog-outer-container">
                <div class="blog-inner">
                  <div class="col-xs-12 col-sm-4 blog-preview_item">
                    <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img1.jpg"> </a> </div>
                    <h4 class="blog-preview_title"><a href="blog_single_post.html">Neque porro quisquam est qui</a></h4>
                    <div class="blog-preview_info">
                      <ul class="post-meta">
                        <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                        <li><i class="fa fa-comments"></i><a href="#">8 comments</a></li>
                        <li><i class="fa fa-clock-o"></i><span class="day">12</span><span class="month">Feb</span></li>
                      </ul>
                      <div class="blog-preview_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 blog-preview_item">
                    <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img1.jpg"> </a> </div>
                    <h4 class="blog-preview_title"><a href="blog_single_post.html">Neque porro quisquam est qui</a></h4>
                    <div class="blog-preview_info">
                      <ul class="post-meta">
                        <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                        <li><i class="fa fa-comments"></i><a href="#">20 comments</a></li>
                        <li><i class="fa fa-clock-o"></i><span class="day">25</span><span class="month">Feb</span></li>
                      </ul>
                      <div class="blog-preview_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 blog-preview_item">
                    <div class="entry-thumb jtv-blog-img-hover"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img1.jpg"> </a> </div>
                    <h4 class="blog-preview_title"><a href="blog_single_post.html">Dolorem ipsum quia dolor sit amet</a></h4>
                    <div class="blog-preview_info">
                      <ul class="post-meta">
                        <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                        <li><i class="fa fa-comments"></i><a href="#">8 comments</a></li>
                        <li><i class="fa fa-clock-o"></i><span class="day">15</span><span class="month">Jan</span></li>
                      </ul>
                      <div class="blog-preview_desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem dolore lauda. <a class="read_btn" href="blog_single_post.html">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Latest Blog --> 
        </div>
      </div>
    </div>
  </section>