@extends('layout.main')
@section('title','Item')
@section('content')

        <section class="header_text sub">
            <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
            <h4><span>Product Detail</span></h4>
        </section>
        <section class="main-content">
            <div class="row">
                <div class="span9">
                    <div class="row">


                        <div class="span5">
                            <address>

                                <strong>Name:</strong> <span>{{$item->name}}</span><br>
                                <strong>Description:</strong> <span>{{$item->description}}</span><br>
                                <strong>Category:</strong> <span>{{$item->category['name']}}</span><br>

                            </address>
                            <h4><strong>Price: ${{$item->price}}</strong></h4>
                        </div>
                        <div class="span5">
                            <form class="form-inline" action="{{'/cartId/'.$item->itemId}}" method="POST">
                                {{csrf_field()}}

                                <p>&nbsp;</p>
                                <label>Qty:</label>
                                <input type="text" class="span1" value="1" name="quantity">
                                <button class="btn btn-inverse" type="submit">Add to cart</button>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <script src="themes/js/common.js"></script>
    <script>
        $(function () {
            $('#myTab a:first').tab('show');
            $('#myTab a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            })
        })
        $(document).ready(function() {
            $('.thumbnail').fancybox({
                openEffect  : 'none',
                closeEffect : 'none'
            });

            $('#myCarousel-2').carousel({
                interval: 2500
            });
        });
    </script>
@endsection

