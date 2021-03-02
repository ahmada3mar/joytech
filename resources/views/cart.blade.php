@extends('header')

@section('content')
<style>
    #header {
        background: #252525;
    }

</style>
@if((!empty(Session::get('cart.teams'))))

<main style="margin-top: 100px;" id="main">
    <!-- top information area -->

    <div class="inner-main common-spacing container">
        <!-- cart information holder -->
        <div class="cart-holder table-container">
            <div class="table-responsive">
                <table class="table table-hover table-align-right">
                    <thead style="background: #252525; color: whitesmoke">
                        <tr>
                            <th>
                                &nbsp;
                            </th>
                            <th>
                                <strong class="date-text">Selected Tours</strong>
                                <span class="sub-text">Confirmed Dates</span>
                            </th>
                            <th>
                                <strong class="date-text">Price (PP)</strong>
                                <span class="sub-text">Updated Today</span>
                            </th>
                            <th>
                                <strong class="date-text">No. of People</strong>
                                <span class="sub-text">Including Children</span>
                            </th>
                            <th>
                                <strong class="date-text">Total Price</strong>
                                <span class="sub-text">Excluding Flights</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(Session::get('cart.teams') as $k => $product )


                        <tr id="{{$k}}">
                            <td>
                                <div class="cell">
                                    <div class="middle">
                                        <a class="delete"
                                            onclick="removeFromCart({{($product -> pro_price - ($product -> pro_price * $product -> pro_discount/100)) * $product -> qty}} , {{$k}});"><span
                                                class="icon-trash"></span></a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div class="middle">
                                        <div class="info">
                                            <div class="img-wrap">
                                                <img src="{{'/images/' . $product -> pro_primary_img}}" height="240"
                                                    width="350" alt="image description">
                                            </div>
                                            <div class="text-wrap">
                                                <strong class="product-title">{{$product -> pro_name}}</strong>
                                                <time class="time" datetime="2016-11-05">{{ date('Y-m-d H:i') }}</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div class="middle">
                                        <span
                                            id="cart_price">{{($product -> pro_price - ($product -> pro_price * $product -> pro_discount/100))}}</span>
                                        JOD
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div class="middle">
                                        <div class="num-hold">
                                            <a href="#" class="minus control"><span
                                                    class="icon-minus-normal"></span></a>
                                            <a href="#" class="plus control"><span class="icon-plus-normal"></span></a>
                                            <span class="val">{{$product->qty}}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div class="middle">
                                        <span class="price">
                                            {{ $tot[] = ($product -> pro_price - ($product -> pro_price * $product -> pro_discount/100)) * $product -> qty}}
                                            JOD</span>
                                    </div>
                                </div>
                            </td>
                        </tr>


                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="cart-option">
                <div class="coupon-hold">
                    <div class="submit-wrap">
                        <button class="btn btn-default" type="submit">APPLY COUPON</button>
                    </div>
                    <div class="input-hold">
                        <input type="text" class="form-control" placeholder="Enter Coupon Code.....">
                    </div>
                </div>
                <div class="button-hold">
                    <a data-toggle="modal" data-target="{{Auth::user() ? '#myModal11' : '#myModalLogin'}}"  class="btn btn-default">CHECKOUT( <span id="cart_total_price_of_shipping"
                            class="mtext-110 cl2">

                            {{array_sum($tot)}}
                        </span> JOD ) </a>
                    <a href="/categories" class="btn btn-default">Contune Shopping</a>
                </div>
            </div>
        </div>

    </div>

</main>
<div class="demo-wrapper">
    <div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-v2">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
              <div class="hold">
                  <label for="uname">Username or Email</label>
                  <input type="text" id="uname" class="form-control">
              </div>
              <div class="hold">
                  <label for="pass">Password</label>
                  <input type="password" id="pass" class="form-control">
              </div>
              <div class="hold btn-holder">
                  <button type="button" class="btn btn-info-sub btn-md">Login</button>
              </div>
            </div>
            <div class="log-option text-center">
                <div><a href="#">Forget Password?</a></div>
                <div><a href="#">Register an account?</a></div>
            </div>
            <div class="seperator text"><span>OR</span></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-md btn-fb-login no-border"><span class="icon-facebook"></span> facebook</button>
              <button type="button" class="btn btn-info-sub btn-md btn-google-login no-border"><span class="icon-google-plus"></span> Google</button>
            </div>
          </div>
        </div>
      </div>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Conferm your parshuse</h4>
          </div>
          <div class="modal-body">
            <p>The total price is {{array_sum($tot)}} JOD.</p>
            <br>
            <p>Plase click on Checkout to Complete Order </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">Cancel</button>
            <a href="/checkout" type="button" class="btn btn-info-sub btn-md">Checkout</a>
          </div>
        </div>
      </div>
    </div>
</div>
@else
<div style="width: 100vw; display: flex; flex-direction: column; align-items: center; justify-content: center; height: 800px; margin-top: 15px;">
    <img width="550px" height="600px" src="/images/empty.svg" alt="">
        <h1>Cart is empty</h1>
    </div>
@endif



@endsection
