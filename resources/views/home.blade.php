@extends('layout.main')
@section('title','Item')
@section('content')

    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
        <h4><span> Your Profile</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <div class="row">

                    <div class="span5">
                        <address>

                            <strong>Member ID:</strong> <span>{{$user['customerId']}}</span><br>
                            <h3><strong></strong> <span>{{$user->firstName}} {{$user->lastName}}</span><br></h3>
                            <strong>Email:</strong> <span>{{$user->email}}</span><br>
                            <strong>Phone number:</strong> <span>{{$user->phoneNumber}}</span><br>
                            <strong>Address:</strong> <span>{{$user->address}}</span><br>
                            <h4>Payment Information</h4>
                            @isset($payment)
                                <strong>Card Number:</strong> <span>{{$payment->cardNumber}}</span><br>
                                <strong>Month:</strong> <span>{{$payment->month}}</span><br>
                                <strong>Year:</strong> <span>{{$payment->year}}</span><br>
                            @endisset


                        </address>
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

