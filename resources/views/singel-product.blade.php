@extends('header')

@section('content')

<style>
    #header {


        background-color: #252525;

    }
    .swal-button{
        background-color: #9a8c5a !important;
    }
</style>
<main id="main">

    <section style="padding-top: 100px;" class="container-fluid trip-info">
        <div class="same-height two-columns row">
            <div style="height: 653px ; padding:0;" class=" col-md-6">
                <!-- top image slideshow -->
                <div id="tour-slide">
                    <div class="slide">
                        <div class="">
                            <img style="width: 100% ; height:653px;" src="/images/{{$Product -> pro_primary_img}}" alt="image descriprion">
                        </div>
                    </div>
                    @foreach($Product -> images as $image)
                    <div class="slide">
                        <div>
                            <img style="width: 100% ; height:653px;" src="/images/{{$image -> pro_images}}" alt="image descriprion">
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div style="height: 653px ; padding:0;" class=" col-md-6 text-col">
                <div  style="text-align: left; padding-left:50px" class="holder">
                    <h1 class="small-size">Name :<span class="js-name-detail">{{$Product->pro_name}}</span></h1>
                    <div class="price">
                        <span id="{{$Product->id}}" class="js-name-detail-price"> Price :
                            {{($Product->pro_price) - ($Product->pro_price * $Product->pro_discount)/100 }}
                        </span> JOD
                    </div>
                    <ul style="margin-bottom: 0;" class="reviews-info">
									<li>
										<div class="info-left">
											<strong class="title">Reviews</strong>
											<span class="value">75 Reviews</span>
										</div>
										<div class="info-right">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<span class="value">5/5</span>
										</div>
									</li>
                    </ul>
                    <div style="margin: 0; width:70%" class="description">
                        <p>{{$Product->pro_desc}}</p>
                    </div>
                    <div  style="padding:0 ; margin:0" class="btn-holder">
                        <div onclick="down()" class="btn btn-info">
                            -
                        </div>
                        <input style="text-align: center; margin:0" id="qty" value="1" class="js-name-detail-qty" type="number" name="num-product">
                        <div onclick="up()" class="btn btn-info">
                         +
                        </div>
                    </div>
                    <div class="btn-holder" style="padding:0 ; margin:unset ; margin-top:15px">
                        <button class="btn btn-md btn-info js-addcart-detail">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- recent block -->

    <aside class="recent-block recent-gray recent-wide-thumbnail">
        <div class="container">
            <h2 class="text-center text-uppercase" id="best-seller">Related Products</h2>
            <div class="row">
                @php $productsS = App\Product::where('subcategory_id' ,$Product->subcategory_id ) ->get()
                @endphp 
                @foreach($productsS as $product)
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space"><a href="#">{{$product->pro_name}}</a></h3>
                            <strong class="info-title">{{$Product->pro_desc}}</strong>
                            <div class="img-wrap">
                                <img src="/images/{{$product->pro_primary_img}}" alt="IMG-PRODUCT" style="width: 100%; height: 250px;">
                            </div>
                            <div class="d-flex align-content-center">
                                <a href="/singelproduct/{{ $product->id }}"  class="btn btn-default">explore</a>
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span style="text-decoration:line-through">{{sprintf("%.2f", $product->pro_price)}}JOD</span>
                                    <span>{{sprintf("%.2f", $product->pro_price) - sprintf("%.2f", $product->pro_price) * $product-> pro_discount /100 }}JOD</span>
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup">
                                                Hiking
                                            </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup">
                                                Mountain
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </aside>

</main>
<script>
    function up(){
        $("#qty").val(parseInt( $("#qty").val())  +1 ) ;
    }

    function down(){

        if (parseInt($("#qty").val())  > 1) {

            $("#qty").val( parseInt( $("#qty").val()) -1 ) ;
        }
    }

</script>
@endsection