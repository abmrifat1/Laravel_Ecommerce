@extends('front.master')

@section('content')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Single</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="single-grids">
                    <div class="col-md-9 single-grid">
                        <div clas="single-top">
                            <div class="single-left">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li data-thumb="{{asset($product->product_image)}}">
                                            <div class="thumb-image"> <img src="{{asset($product->product_image)}}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <li data-thumb="{{asset($product->product_image)}}">
                                            <div class="thumb-image"> <img src="{{asset($product->product_image)}}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <li data-thumb="{{asset($product->product_image)}}">
                                            <div class="thumb-image"> <img src="{{asset($product->product_image)}}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-right simpleCart_shelfItem">
                                <h4>{{$product->product_name}}</h4>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <p class="price item_price">TK.{{$product->product_price}}</p>
                                <div class="description">
                                    <p><span>Quick Overview : </span>{{$product->short_description}}</p>
                                </div>
                                <div class="color-quality">
                                    <h6>Quality :</h6>
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus1">&nbsp;</div>
                                            <div class="entry value1"><span>1</span></div>
                                            <div class="entry value-plus1 active">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        $('.value-plus1').on('click', function(){
                                            var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });

                                        $('.value-minus1').on('click', function(){
                                            var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class="women">
                                    <form action="{{url('/add-to-cart')}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                        <input type="number" value="1" name="qty" min="1"/>
                                        <input type="hidden" value="{{$product->id}}" name="product_id"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Add To Cart" name="btn" class="my-cart-b item_add"/>
                                        </div>
                                    </form>

                                </div>
                                <div class="social-icon">
                                    <a href="#"><i class="icon"></i></a>
                                    <a href="#"><i class="icon1"></i></a>
                                    <a href="#"><i class="icon2"></i></a>
                                    <a href="#"><i class="icon3"></i></a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 single-grid1">
                        <h3>Recent Products</h3>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1"> $ 29.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r1.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1"> $ 19.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r2.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1"> $ 19.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r3.jpg" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1">$ 45.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--Product Description-->
                <div class="product-w3agile">
                    <h3 class="tittle1">Product Description</h3>
                    <div class="product-grids">
                        <div class="col-md-4 product-grid">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item">
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 29.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r1.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 19.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r2.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 19.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r3.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1">$ 45.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r4.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 29.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r5.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 19.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r2.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1"> $ 19.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="recent-grids">
                                        <div class="recent-left">
                                            <a href="single.html"><img class="img-responsive " src="{{asset('/front/')}}/images/r3.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-right">
                                            <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <span class=" price-in1">$ 45.00</span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <img class="img-responsive " src="{{asset('/front/')}}/images/woo2.jpg" alt="">
                        </div>
                        <div class="col-md-8 product-grid1">
                            <div class="tab-wl3">
                                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                        <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li>

                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                            <div class="descr">
                                                 {!! $product->long_description !!}
<!--                                               --><?php //echo $product->long_description ?>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
                                            <div class="descr">
                                                <div class="reviews-top">
                                                    <div class="reviews-left">
                                                        <img src="{{asset('/front/')}}/images/men3.jpg" alt=" " class="img-responsive">
                                                    </div>
                                                    <div class="reviews-right">
                                                        <ul>
                                                            <li><a href="#">Admin</a></li>
                                                            <li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
                                                        </ul>
                                                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="reviews-bottom">
                                                    <h4>Add Reviews</h4>
                                                    <p>Your email address will not be published. Required fields are marked *</p>
                                                    <p>Your Rating</p>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
                                                    </div>
                                                    <form action="#" method="post">
                                                        <label>Your Review </label>
                                                        <textarea type="text" Name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                                                        <div class="row">
                                                            <div class="col-md-6 row-grid">
                                                                <label>Name</label>
                                                                <input type="text" value="Name" Name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                                            </div>
                                                            <div class="col-md-6 row-grid">
                                                                <label>Email</label>
                                                                <input type="email" value="Email" Name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <input type="submit" value="SEND">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!--Product Description-->
            </div>
        </div>
        <!--single-->
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h3 class="tittle1">Related Item</h3>
                <div class="arrivals-grids">

                    @foreach($relatedProducts as $relatedProduct)

                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">

                                            <img  src="{{asset($relatedProduct->product_image)}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{asset($relatedProduct->product_image)}}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">{{$relatedProduct->product_name}}</a></h6>
                                <span class="size">XL / XXL / S </span>
                                <p><em class="item_price">TK. {{$relatedProduct->product_price}}</em></p>

                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--new-arrivals-->
    </div>
@endsection

