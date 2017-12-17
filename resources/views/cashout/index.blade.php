@extends('layout.main')

@section('content')
<section class="main-content">
    <div class="row">
        <div class="span12">
            <div class="accordion" id="accordion2">
                <div class="accordion-group">

                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Payment Information</a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">

                            <div class="row-fluid">
                                <div class="span6">

                                    <h4>Your Payment Details</h4>
                                    <form method="post" action="{{ route('cashout.store') }}">
                                        {{csrf_field()}}
                                        <div class="control-group">
                                            <label class="control-label">Card Number</label>
                                            <div class="controls">
                                                <input type="text" name ="cardNumber" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Expiration Month</label>
                                            <div class="controls">
                                                <input type="text" name= 'month' placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Expiration Year</label>
                                            <div class="controls">
                                                <input type="text" name='year' placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">CVV</label>
                                            <div class="controls">
                                                <input type="text" name='cvv' placeholder="" class="input-xlarge">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <div class="row-fluid">
                                <div class="control-group">
                                    <label for="textarea" class="control-label">Comments</label>
                                    <div class="controls">
                                        <textarea rows="3" id="textarea" class="span12"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-inverse pull-right">Confirm order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection