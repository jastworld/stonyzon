@extends('layout.main')

@section('content')
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php  $total=0 ?>
                    @foreach($cartItems as $cartItem)
                    <tr>
                        <td>{{ $cartItem->itemInfo[0]->name}}</td>
                        <td>{{ $cartItem->itemInfo[0]->description}}</td>
                        <td>{{ $cartItem->itemInfo[0]->category->name}}</td>
                        <td>{{ $cartItem->quantity}}</td>
                        <td>{{ $cartItem->itemInfo[0]->price}}</td>
                        <?php $total=$total+($cartItem->itemInfo[0]->price*$cartItem->quantity)?>
                        <td><form  action = "{{'/cart/'.$cartItem->shoppingCartId}}" method="post">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit"> <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr>
                <p class="cart-total right">
                    <strong>Total</strong>: ${{$total}}<br>
                </p>
                <hr/>
                <p class="buttons center">
                    <button class="btn" type="button">Update</button>
                    <button class="btn" type="button">Continue</button>
                    <button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
                </p>
            </div>
            <div class="span3 col">
                <div class="block">
                    <ul class="nav nav-list">
                        <li class="nav-header">SUB CATEGORIES</li>
                        <li><a href="#">Nullam semper elementum</a></li>
                        <li class="active"><a href="#">Phasellus ultricies</a></li>
                        <li><a href="#">Donec laoreet dui</a></li>
                        <li><a href="#">Nullam semper elementum</a></li>
                        <li><a href="#">Phasellus ultricies</a></li>
                        <li><a href="#">Donec laoreet dui</a></li>
                    </ul>
                    <br/>
                    <ul class="nav nav-list below">
                        <li class="nav-header">MANUFACTURES</li>
                        <li><a href="#">Adidas</a></li>
                        <li><a href="#">Nike</a></li>
                        <li><a href="#">Dunlop</a></li>
                        <li><a href="#">Yamaha</a></li>
                    </ul>
                </div>
                <div class="block">
                    <h4 class="title">
                        <span class="pull-left"><span class="text">Randomize</span></span>
                        <span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
                    </h4>
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <a href="#"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
                                            <a href="#" class="title">Fusce id molestie massa</a><br/>
                                            <a href="#" class="category">Suspendisse aliquet</a>
                                            <p class="price">$261</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <a href="#"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
                                            <a href="#" class="title">Tempor sem sodales</a><br/>
                                            <a href="#" class="category">Urna nec lectus mollis</a>
                                            <p class="price">$134</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection