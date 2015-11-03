@extends('header')
@section('middle')
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Shopping cart</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Shopping cart</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
 		    <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted lead">You currently have 3 item(s) in your cart.</p>
                    </div>


                    <div class="col-md-9 clearfix" id="basket">

                        <div class="box">

                            <form method="post" action="/checkout">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                
                                                <th>Unit price</th>
                                                <th>Discount</th>
                                                <th colspan="2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($item as $single)
                                        <div  >
                                            <tr>
                                            <input class="hidden" name="id[]" value="{{$single->id}}">
                                                <td>
                                                    <a href="#">
                                                        <img src="img/detailsquare.jpg" alt="White Blouse Armani">
                                                    </a>
                                                </td>
                                                <td><a >{{$single->name}}</a>
                                                </td>
                                              
                                                <td id="t" >{{$single->price}}</td>
                                                <td>0.00</td>
                                                <td >{{$single->price}}</td>
                                                <td><a onclick="d()">remove</a>
                                                </td>
                                            </tr>
                                            </div>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th colspan="2">$446.00</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->

                                <div class="box-footer">
                                 
                                    <div class="pull-right">
                                      
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <input type="submit" class="btn btn-template-main" value="Proceed to checkout">
                                        
                                    
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- /.box -->

                        <div class="row">
                            <div class="col-md-3">
                             
                            </div>

                            <div class="col-md-3">
                                <div class="product">
                                
                                  
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-3">
                                <div class="product">
                                   
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-3">
                                <div class="product">
                                    
                                </div>
                                <!-- /.product -->
                            </div>

                        </div>

                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">
                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order summary</h3>
                            </div>
                            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Order subtotal</td>
                                            <th>$446.00</th>
                                        </tr>
                                        <tr>
                                            <td>Shipping and handling</td>
                                            <th>$10.00</th>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <th>$0.00</th>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <th>$456.00</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <div class="box">
                            <div class="box-header">
                                <h4>Coupon code</h4>
                            </div>
                            <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                            <form>
                                <div class="input-group">

                                    <input type="text" class="form-control">

                                    <span class="input-group-btn">

					    <button class="btn btn-template-main" type="button"><i class="fa fa-gift"></i></button>

					</span>
                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                </div>

            </div>

@endsection
