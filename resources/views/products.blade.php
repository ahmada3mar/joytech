@extends('header')
@section('content')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="gridview-4-col"
        style="background-image: url(/images/{{ $subcat->sub_img }}">
        <div class="banner-text">
            <div class="center-text">
                <div class="container">
                    <h1>{{ $subcat->sub_name }}</h1>
                    <strong class="subtitle">{{ $subcat->sub_desc }}</strong>
                    <!-- breadcrumb -->

                </div>
            </div>
        </div>
    </section>
    <main id="main">


        <div class="content-block content-sub">
            <div class="container" style="width: 95%">
                <div class="content-holder content-sub-holder">
                    <div class="row db-1-col">

                        @foreach ($products as $product)
                            <article class="col-3 col-md-4 col-lg-3 article has-hover-s1">
                                <div class="thumbnail">
                                    <div class="img-wrap">
                                        <img src="{{ asset('images/' . $product->pro_primary_img) }}"
                                            style="width:100%; height:320px ;" alt="image description">
                                    </div>
                                    <div style="height: 16rem">
                                        <h3 class="small-space" style="font-size: 1.7em"><a href="tour-detail.html"
                                                s>{{ $product->pro_name }}</a>
                                        </h3>


                                        <p>{{ $product->pro_desc }}
                                        </p>
                                    </div>
                                    <a href="/singelproduct/{{ $product-> id }}" class="btn btn-default">View More</a>
                                    <footer>
                                        <ul class="social-networks">
                                            <li><a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="{{ asset('images/icons/icon-heart-01.png') }}" alt="ICON">

                                                </a></li>

                                        </ul>
                                        <span class="price" style="max-width: 55%;">Price<span>

                                                {{ $product->pro_price }}.00
                                                JOD</span>
                                        </span>
                                    </footer>
                                </div>
                            </article>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
