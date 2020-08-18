@extends('front.layouts.master')
@section('content')

   <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span></li>
            <li><a href="shop-grid-sidebar.html" title="">Women</a> <span>/ </span></li>
            <li><a href="shop-grid-sidebar.html" title="">Clothing</a> <span>/</span></li>
            <li> <strong>Product tilte is here </strong> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
        
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="product-view">
          <div class="product-essential">
           
              <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                @if(session('message'))
                             <strong> <p class="alert alert-success">{{session('message')}}</p></strong>
            @endif
          @if(session('error'))
          <strong><p class="alert alert-danger">{{session('error')}}</p></strong>
          @endif
                <div class="product-image">
                  <div class="product-full">
                    <div class="new-label new-top-left"> New </div>
                    <img id="product-zoom" src="../images/products/product-fashion-1.jpg" data-zoom-image="../images/products/product-fashion-1.jpg" alt="product-image"/> </div>

                     
                  <div class="more-views">
                   
                    <div class="slider-items-products">
                      <div id="jtv-more-views-img" class="product-flexslider hidden-buttons product-img-thumb">
                        <div class="slider-items slider-width-col4 block-content">
                           @foreach($ProductImages as $ProductImage)
                          <div class="more-views-items"> 
                           
                            <a href="#" data-image="{{asset('/upload/product/productimages/'.$ProductImage->image)}}" data-zoom-image="{{asset('/upload/product/productimages/'.$ProductImage->image)}}"> <img id="product-zoom"  src="{{asset('/upload/product/productimages/'.$ProductImage->image)}}" alt="product-image"/> </a>
                         
                          </div>
                           @endforeach
                          
                        </div>
                      </div>
                    </div>
                    
                  </div>
                 
                </div>
                <!-- end: more-images --> 
                  
                
              </div>
              <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                <form name="addtoCart" action="{{url('/addCart')}}" method="post">
                        @csrf
                    
                    <input type="hidden" value="{{$productdetails->id}}" name="product_id">
                    <input type="hidden" value="{{$productdetails->product_name}}" name="product_name">
                    <input type="hidden" value="{{$productdetails->product_code}}" name="product_code">
                    
                    <input type="hidden" id="price" value="{{$productdetails->price}}" name="price">
                <div class="product-name">
                  <h1>{{$productdetails->product_name}}</h1>
                </div>
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="price-block">
                  <div class="price-box">
                    <p class="special-price"> <span class="price-label">Special Price</span><span class="price">{{$productdetails->price}} </span></p>
                    <p class="old-price"> <span class="price-label">Regular Price:</span><span class="price"> $299.99 </span></p>
                    <p class="availability in-stock"><span>In Stock</span></p>
                  </div>
                </div>
                <div class="short-description">
                  <h2>Quick Overview</h2>
                  <p>{{$productdetails->description}} </p>
                </div>
                <div class="add-to-box">
                  <div class="add-to-cart">
                    <div class="pull-left">
                      <div class="custom pull-left">
                        <label>Quantity:</label>
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                        <input type="text" name="quantity"class="input-text qty" title="Qty" value="1" maxlength="12" id="qty">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                      </div>
                    </div>
                    <button  class="button btn-cart" title="Add to Cart" type="submit"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                  </div>
                  <div class="email-addto-box">
                    <ul class="add-to-links">
                      <li><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                      <li><a class="link-compare" href="compare.html"><i class="fa fa-signal"></i><span>Add to Compare</span></a></li>
                      <li><a class="email-friend" href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="social">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
                <div class="product-next-prev"> <a class="product-next" href="#"><i class="fa fa-angle-left"></i></a> <a class="product-prev" href="#"><i class="fa fa-angle-right"></i></a> </div>
              </div>
            </form>
          </div>
        </div>
        <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
          <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
            <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a></li>
            <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
            <li><a href="#reviews_tabs" data-toggle="tab">Reviews</a></li>
            <li><a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a></li>
          </ul>
          <div id="productTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="product_tabs_description">
              <div class="std">
                <p>{{$productdetails->description}}</p>
              </div>
            </div>
            <div class="tab-pane fade" id="product_tabs_tags">
              <div class="box-collateral box-tags">
                <div class="tags">
                  <form id="addTagForm" action="#" method="get">
                    <div class="form-add-tags">
                      <label for="productTagName">Add Tags:</label>
                      <div class="input-box">
                        <input class="input-text" name="productTagName" id="productTagName" type="text">
                        <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span></button>
                      </div>
                      <!--input-box--> 
                    </div>
                  </form>
                </div>
                <!--tags-->
                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
              </div>
            </div>
            <div class="tab-pane fade" id="reviews_tabs">
              <div class="box-collateral box-reviews" id="customer-reviews">
                <div class="box-reviews1">
                  <div class="form-add">
                    <form id="review-form" method="post" action="http://www.jtvcommerce.com/review/product/post/id/176/">
                      <h3>Write Your Own Review</h3>
                      <fieldset>
                        <h4>How do you rate this product? <em class="required">*</em></h4>
                        <span id="input-message-box"></span>
                        <table id="product-review-table" class="data-table">
                          <thead>
                            <tr class="first last">
                              <th>&nbsp;</th>
                              <th><span class="nobr">1 *</span></th>
                              <th><span class="nobr">2 *</span></th>
                              <th><span class="nobr">3 *</span></th>
                              <th><span class="nobr">4 *</span></th>
                              <th><span class="nobr">5 *</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="first odd">
                              <th>Price</th>
                              <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                              <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                              <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                              <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                              <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                            </tr>
                            <tr class="even">
                              <th>Value</th>
                              <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                              <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                              <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                              <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                              <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                            </tr>
                            <tr class="last odd">
                              <th>Quality</th>
                              <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                              <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                              <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                              <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                              <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                            </tr>
                          </tbody>
                        </table>
                        <input type="hidden" value="" class="validate-rating" name="validate_rating">
                        <div class="review1">
                          <ul class="form-list">
                            <li>
                              <label class="required" for="nickname_field">Nickname<em>*</em></label>
                              <div class="input-box">
                                <input type="text" class="input-text" id="nickname_field" name="nickname">
                              </div>
                            </li>
                            <li>
                              <label class="required" for="summary_field">Summary<em>*</em></label>
                              <div class="input-box">
                                <input type="text" class="input-text" id="summary_field" name="title">
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="review2">
                          <ul>
                            <li>
                              <label class="required " for="review_field">Review<em>*</em></label>
                              <div class="input-box">
                                <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                              </div>
                            </li>
                          </ul>
                          <div class="buttons-set">
                            <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                <div class="box-reviews2">
                  <h3>Customer Reviews</h3>
                  <div class="box visible">
                    <ul>
                      <li>
                        <table class="ratings-table">
                          <tbody>
                            <tr>
                              <th>Value</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                            <tr>
                              <th>Quality</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                            <tr>
                              <th>Price</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="review">
                          <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                          <small>Review by <span>Sophia </span>on 15/01/2018 </small>
                          <div class="review-txt">Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante.</div>
                        </div>
                      </li>
                      <li class="even">
                        <table class="ratings-table">
                          <tbody>
                            <tr>
                              <th>Value</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                            <tr>
                              <th>Quality</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                            <tr>
                              <th>Price</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="review">
                          <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                          <small>Review by <span>William</span>on 05/02/2018 </small>
                          <div class="review-txt">Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero.</div>
                        </div>
                      </li>
                      <li>
                        <table class="ratings-table">
                          <tbody>
                            <tr>
                              <th>Value</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                            <tr>
                              <th>Quality</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                            <tr>
                              <th>Price</th>
                              <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="review">
                          <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                          <small>Review by <span> Mason</span>on 10/02/2018 </small>
                          <div class="review-txt last">Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.</div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="product_tabs_custom">
              <div class="product-tabs-content-inner clearfix">
                <p>Lorem Ipsum is
                  simply dummy text of the printing and typesetting industry. Lorem Ipsum
                  has been the industry's standard dummy text ever since the 1500s, when 
                  an unknown printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but also the 
                  leap into electronic typesetting, remaining essentially unchanged. It 
                  was popularised in the 1960s with the release of Letraset sheets 
                  containing Lorem Ipsum passages, and more recently with desktop 
                  publishing software like Aldus PageMaker including versions of Lorem 
                  Ipsum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  
  <!-- Related Products Slider -->
  
  <div class="container">
    <div class="jtv-related-products">
      <div class="slider-items-products">
        <div class="jtv-new-title">
          <h2>Related Products</h2>
        </div>
        <div class="related-block">
          <div id="jtv-related-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$115.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$79.90</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$49.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$97.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$199.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                        </div>
                        <div class="actions">
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
  </div>
  <!-- Related Products Slider End --> 
  
  <!-- Upsell Product Slider -->
  
  <div class="container">
    <div class="jtv-upsell-products">
      <div class="slider-items-products">
        <div class="jtv-new-title">
          <h2>Upsell Product</h2>
        </div>
        <div class="upsell-block">
          <div id="jtv-upsell-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$95.99</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$39.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$49.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$69.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$19.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span></span></div>
                        </div>
                        <div class="actions">
                          <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                      <div class="item-title"> <a title="Product tilte is here" href="#"> Product tilte is here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$139.00</span></span></div>
                        </div>
                        <div class="actions">
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
    <!-- End Upsell  Slider --> 
  </div>
  
  <!-- Footer -->




@endsection