@extends('layout.main')

@section('content')
    <section  class="homepage-slider" id="home-slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="themes/images/carousel/banner-1.jpg" alt="" />
                </li>
                <li>
                    <img src="themes/images/carousel/banner-2.jpg" alt="" />
                    <div class="intro">
                        <h1>Mid season sale</h1>
                        <p><span>Up to 50% Off</span></p>
                        <p><span>On selected items online and in stores</span></p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="header_text">
       This is the CSE 305 project for Team 4
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12">
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                        </h4>

                        <div id="myCarousel" class="myCarousel carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails">
                                        <?php $count=0?>
                                        @foreach($datas as $item)
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                @if ($item->type === 1)
                                                    <p><a href={{'/item/'.$item['itemId']}} ><img src="themes/images/iPhone.jpeg" alt="" /></a></p>

                                                @elseif ($item->type == 2)
                                                    <p><a href={{'/item/'.$item['itemId']}} ><img src="themes/images/chair.jpeg" alt="" /></a></p>
                                                @elseif ($item->type == 3)
                                                    <p><a href={{'/item/'.$item['itemId']}} ><img src="themes/images/top.jpeg" alt="" /></a></p>
                                                @else
                                                    <p><a href={{'/item/'.$item['itemId']}} ><img src="themes/images/food.jpg" alt="" /></a></p>
                                                @endif
                                                <a href={{'/item/'.$item['itemId']}} class="title">{{$item['name']}}</a><br/>
                                                <a href={{'/item/'.$item['itemId']}} class="category">{{$item['category']->name}}</a>
                                                <p class="price">${{$item['price']}}</p>

                                            </div>
                                        </li>
                                                <?php $count++?>
                                            @if ($count== 4)
                                                @break
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br/>

                <div class="row feature_box">
                    <div class="span4">
                        <div class="service">
                            <div class="responsive">
                                <img src="themes/images/feature_img_2.png" alt="" />
                                <h4>NEWEST <strong>ITEMS</strong></h4>
                                <p>We get all the products before anyone else does</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="service">
                            <div class="customize">
                                <img src="themes/images/feature_img_1.png" alt="" />
                                <h4>FREE <strong>SHIPPING</strong></h4>
                                <p>We guarantee your item ships in a day.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="service">
                            <div class="support">
                                <img src="themes/images/feature_img_3.png" alt="" />
                                <h4>24/7 LIVE <strong>SUPPORT</strong></h4>
                                <p>Live support from Stonyzon experts 24 hours a day, 7 days a week..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

