@extends('header')
@section('content')




<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" ">
    <div class=" banner-text">
    <img src="/img/banner/shop-1.jpg">
    <div class="center-text">
        <div class="container">
            <h1>Adventures 2016</h1>
            <strong class="subtitle">Four Column Adventure Grid View</strong>
            <!-- breadcrumb -->
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">Shop</a></li>

                </ul>
            </nav>
        </div>
    </div>
    </div>
</section>

<main id="main">
    <!-- content block -->
    <div class="content-block content-sub">
        <div class="container">

            <!-- main article section -->
            <div class="content-holder content-sub-holder">
                <div class="row db-3-col">
                    @foreach($products as $product)

                 


                    <article  class="col-sm-6 col-md-4 col-lg-3 article has-hover-s1">
                    <div  class="thumbnail">
                            <div class="img-wrap">
                                <img style="height:273px ; width:273px" src="{{'/images/' . $product-> pro_primary_img}}"  alt="image description">
                                
                            </div>
                            <h3 style="height: 39px;" class="small-space"><a href="{{'/singelproduct/'. $product->id}}">{{$product -> pro_name}}</a></h3>
                           
                            <p style="height: 105px; width:100% ; text-overflow: ellipsis;overflow: hidden;">{{$product -> pro_desc}}</p>
                            <a href="/singelproduct/{{$product -> id}}" class="btn btn-default">View More</a>
                            <footer>
                                <ul class="social-networks">
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                   
                                </ul>
                                <span style="width: 100%;" class="price"> <span>{{(integer)($product -> pro_price -$product -> pro_price * $product -> pro_discount /100 )}} JOD</span></span>
                            </footer>
                        </div>
                    </article>
                    @endforeach
                    <div class=" text-center">
                        {{$products->links()}}

                    </div>
                </div>
            </div>
            <!-- pagination wrap -->

        </div>
    </div>
    <!-- recent block -->

</main>

@endsection
