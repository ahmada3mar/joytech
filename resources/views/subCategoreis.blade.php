@extends('header')
@section('content')

    

<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="list-view-detail"
        style="background-image: url(/images/{{ $category->cat_img }})">
        <div class="banner-text">
            <div class="center-text">
                <div class="container">
                    <h1 style="font-size: 5em">{{ $category->cat_name }}</h1>
                    <strong class="subtitle" style="font-size: 2em">{{ $category->cat_desc }}</strong>
                    <!-- breadcrumb -->
                </div>
            </div>
        </div>
    </section>

    <div class="content-block content-sub">
        <div class="container">
            <div class="content-holder list-view">
                @foreach ($sub_cats as $subcategory)

                    <article class="article has-hover-s2">
                        <div class="thumbnail">
                            <div class="img-wrap" style="width: 350px; height: 300px">
                                <img style="height: 290px;" src="/images/{{ $subcategory->sub_img }}" 
                                    alt="image description" />
                            </div>
                            <div class="description">
                                <div class="col-left" style="width: 100%">
                                    <header class="heading">
                                        <h1>
                                            <a href="#">{{ $subcategory->sub_name }}</a>
                                        </h1>
                                    </header>
                                    <p style="font-size: 1.5em">
                                        {{ $subcategory->sub_desc }}
                                    </p>
                                    <div class="reviews-holder">
                                        <div class="star-rating">
                                            <span><span class="icon-star"></span></span>
                                            <span><span class="icon-star"></span></span>
                                            <span><span class="icon-star"></span></span>
                                            <span><span class="icon-star"></span></span>
                                            <span class="disable"><span class="icon-star"></span></span>
                                        </div>
                                    </div>
                                    <footer class="info-footer">
                                        <ul class="ico-list">
                                            <li class="pop-opener">
                                                <a href="/products/{{ $subcategory->id }}"
                                                    class="btn btn-default">explore</a>
                                                <div class="popup">Beach</div>
                                            </li>
                                            <li class="pop-opener">
                                                <span class="icon-beach"></span>
                                                <div class="popup">Beach</div>
                                            </li>
                                            <li class="pop-opener">
                                                <span class="icon-boat"></span>
                                                <div class="popup">Boat</div>
                                            </li>

                                            <li class="pop-opener">
                                                <span class="icon-water"></span>
                                                <div class="popup">Water</div>
                                            </li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                

            </div>
        </div>
    </div>
@endsection