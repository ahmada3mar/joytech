@extends('header')

@section('content')






<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="list-view-normal">
    <div class="banner-text">
        <div class="center-text">
            <div class="container" style="display:flex;">

                <img width="300px" style="height:fit-content ; margin-top:11rem ; margin-right:15px" src="/img/banner/user.png">
                <!-- breadcrumb -->
                <div style="margin-top: 20rem;margin-left:1rem;">
                    <p style="color: rgba(240, 248, 255, 0.664);font-family: cursive;font-size:4rem">{{ Auth::user()->name }}</p>

                    <p style="color: rgba(240, 248, 255, 0.664);font-family: cursive;font-size:4rem"">{{ Auth::user()->email }}</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- main container -->
			<main id=" main">
                        <!-- content block -->
                    <div class="content-block content-sub">
                        <div class="container">
                            <div class="filter-option">
                                <h3>your order:</h3>

                            </div>
                            <!-- list view -->
                            <div class="content-holder list-view">
                                @if(count($order) > 0 )
                                @foreach($order as $value)
                                <article class="article">
                                    <div class="thumbnail">

                                        <div class="img-wrap">
                                            @php $pro_d = App\orders_product::where('order_id', $value -> id) ->get()
                                          
                                            @endphp
                                            @php $pro_db = App\Product::find($pro_d [0]-> product_id)
                                           @endphp
                                            <img style="width:250px ; height:250px" src="{{'/images/' .$pro_db-> pro_primary_img}}"  alt="image description">
                                        </div>
                                        <div class="description" style="margin-top: 2rem;">
                                            <div class="col-left">
                                                <header class="heading">

                                                    <h3><a href="#">Beach &amp; Resort Holiday in Thailand</a></h3>
                                                    <div class="info-day">{{$value -> created_at -> format('M , Y ')}}</div>
                                                </header>
                                                @foreach( $pro_d as $details)
                                                <p>{{$details -> order_details}} {{$details -> single_price}} JOD X {{$details -> quantity}} Pcs </p>
                                                @endforeach

                                            </div>
                                            <aside class="info-aside">

                                                <div class="activity-level" style="margin-top: 4rem;">
                                                    <h2 class="text" style="font-family: cursive;">total price</h2>
                                                    <h2 class="text" style="font-family: cursive;">{{$value -> total_price}} JOD</h2>
                                                </div>

                                            </aside>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                                @endif
                            </div>

                        </div>
                        <!-- pagination wrap -->

                    </div>
               
                <!-- recent block -->

                </main>



                @endsection