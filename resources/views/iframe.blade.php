<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Embedded Reviews for {{ $c->url }}</title>
	 <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	 <link href="https://fonts.googleapis.com/css?family=Lato|Patua+One&display=swap" rel="stylesheet">
	  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  	<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
	<script>
	$(document).ready(function () {
		$('.testiSlide').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			responsive: [{
			breakpoint: 850,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			}
			}]
		});
	});
	</script>

	<style>
	html {
		font-family: 'Poppins', sans-serif;
		font-size: 16px;
		font-weight: 400;
		line-height: 1.5;
		-webkit-text-size-adjust: 100%;
		-ms-text-size-adjust: 100%;
		background: {{ Options::get_option('generalBG_' . $c->id , '#000032' ) }};
		color: {{ Options::get_option('generalFC_' . $c->id , '#FFFFFF' ) }};
	}
	body {
		margin:  0;
		background: {{ Options::get_option('generalBG_' . $c->id , '#000032' ) }};
		height: 100vh;
	}
	h3 {
		font-family: 'Patua One', cursive;
		font-weight: 400;
		font-size: 1.4em;
		line-height: 1.4em;
		color: {{ Options::get_option('generalFC_' . $c->id , '#FFFFFF' ) }};
	}
	.container {
		box-sizing: content-box;
		max-width: 490px;
		margin-left: auto;
		margin-right: auto;
		padding-left: 15px;
		padding-right: 15px;
		padding-top: 40px;
		padding-bottom: 40px;
	}
	.indentity {
		margin: 0!important
	}
	figure.testimonial {
		position: relative;
		float: left;
		overflow: hidden;
		margin: 10px 1%;
		padding: 0 20px;
		text-align: left;
		box-shadow: none !important;
		color: {{ Options::get_option('testiFG_' . $c->id , '#FFFFFF' ) }};
	}
	figure.testimonial * {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		-webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
		transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
	}

	figure.testimonial section {
		background-color: {{ Options::get_option('testiGB_' . $c->id , '#ffffff' ) }};
		display: block;
		font-size: 16px;
		font-weight: 400;
		line-height: 1.5em;
		margin: 0;
		padding: 25px 25px 30px;
		position: relative;
		color: {{ Options::get_option('testiFC_' . $c->id , '#333' ) }};
	}

	figure.testimonial .btn {
		top: 100%;
		width: 0;
		height: 0;
		border-left: 0 solid transparent;
		border-right: 25px solid transparent;
		border-top: 25px solid #fff;
		margin: 0;
		position: absolute;
	}
	figure.testimonial .peopl {
		margin: 0;
		color: {{ Options::get_option('generalFC_' . $c->id , '#333' ) }};
		-webkit-transform: translateY(50%);
		transform: translateY(50%);
	}
	figure.testimonial .peopl h3 {
		opacity: 0.9;
		margin: 0;
		font-size:16px;
	}
	.slick-slider {
		position: relative;
		display: block;
		box-sizing: border-box;
		user-select: none;
		-webkit-touch-callout: none;
		-khtml-user-select: none;
		-ms-touch-action: pan-y;
		touch-action: pan-y;
		-webkit-tap-highlight-color: transparent;
	}
	.slick-list {
		position: relative;
		display: block;
		overflow: hidden;
		margin: 0;
		padding: 0;
	}
	.slick-list:focus {
		outline: none;
	}
	.slick-list.dragging {
		cursor: pointer;
		cursor: hand;
	}
	.slick-slider .slick-track, .slick-slider .slick-list {
		transform: translate3d(0, 0, 0);
	}
	.slick-track {
		position: relative;
		top: 0;
		left: 0;
		display: block;
	}
	.slick-track:before, .slick-track:after {
		display: table;
		content: '';
	}
	.slick-track:after {
		clear: both;
	}
	.slick-loading .slick-track {
		visibility: hidden;
	}
	.slick-slide {
		display: none;
		float: left;
		height: 100%;
		min-height: 1px;
	}
	.slick-slide img {
		display: block;
	}
	.slick-slide.slick-loading img {
		display: none;
	}
	.slick-slide.dragging img {
		pointer-events: none;
	}
	.slick-initialized .slick-slide {
		display: block;
	}
	.slick-loading .slick-slide {
		visibility: hidden;
	}
	.slick-vertical .slick-slide {
		display: block;
		height: auto;
		border: 1px solid transparent;
	}
	.slick-btn.slick-hidden {
		display: none;
	}

	.slick-prev, .slick-next {
		font-size: 0;
		line-height: 0;
		position: absolute;
		top: 30%;
		display: block;
		width: 8px;
		height: 8px;
		padding: 0;
		transform: translate(0, -50%) scale(0.8);
		cursor: pointer;
		color: {{ Options::get_option('generalFC_' . $c->id , '#FFFFFF' ) }};
		border: none;
		outline: none;
		background: transparent;
	}
	.slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus {
		color: transparent;
		outline: none;
		background: transparent;
	}
	.slick-prev:hover:before, .slick-prev:focus:before, .slick-next:hover:before, .slick-next:focus:before {
		opacity: 1;
	}
	.slick-prev:before, .slick-next:before {
		font-family: "FontAwesome";
		font-size: 40px;
		line-height: 1;
		opacity: .75;
		color: white;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}
	.slick-prev {
		left: -40px;
	}
	.slick-prev:before {
		content: "\f060";
	}
	.slick-next {
		right: -22px;
	}
	.slick-next:before {
		content: "\f061";
	}
	.full-review-link {
		color: {{ Options::get_option('urlFC_' . $c->id , '#FFFFFF' ) }};
	}
	.slick-prev:before,
	.slick-next:before {
	  color: {{ Options::get_option('generalFC_' . $c->id , '#FFFFFF' ) }};
	}
	.stars {
		color: #ffc107;
	}

	</style>
</head>
<body>
	
<div class="container">
<div class="testiSlide">

@forelse( $reviews as $r )

<div>
<figure class="testimonial"> 
<section>
    <div style="display:flex;column-gap:19px;justify-content:center;align-items:center;margin:auto">
        <div>
            @if( $r->rating === 0 )
                <strong style="font-weight:500">Bad</strong>
            @elseif( $r->rating === 1 || $r->rating === 1.2 || $r->rating === 1.3 || $r->rating === 1.4 || $r->rating === 1.5 || $r->rating === 1.6 || $r->rating === 1.7 )
                <strong style="font-weight:500">Bad</strong>
            @elseif(  $r->rating === 2 || $r->rating === 2.2 || $r->rating === 2.3 || $r->rating === 2.4 || $r->rating === 2.5 || $r->rating === 2.6 || $r->rating === 2.2 )
                <strong style="font-weight:500">Poor</strong>
            @elseif(  $r->rating === 3 || $r->rating === 3.2 || $r->rating === 3.3 || $r->rating === 3.4 || $r->rating === 3.5 || $r->rating === 3.6 || $r->rating === 3.7)
                <strong style="font-weight:500">Good</strong>
            @elseif(  $r->rating === 4 || $r->rating === 4.2 || $r->rating === 4.3 || $r->rating === 4.4 || $r->rating === 4.5 || $r->rating === 4.6 || $r->rating === 4.7)
                <strong style="font-weight:500">Very Good</strong>
            @elseif(  $r->rating === 5 )
                <strong style="font-weight:500">Excellent</strong>
            @endif
        </div> 
        <small class="stars">
            @if($r->rating === 0)
                <img src="/public/star/6.svg" width="200"style="width:200" alt="">
            @elseif($r->rating === 1)
                <img src="/public/star/1.svg" width="200"style="width:200" alt="">
            @elseif($r->rating === 2)
                <img src="/public/star/2.svg" width="200"style="width:200" alt="">
            @elseif($r->rating === 3)
                <img src="/public/star/3.svg" width="200"style="width:200" alt="">
            @elseif($r->rating === 4)
                <img src="/public/star/4.svg" width="200"style="width:200" alt="">
            @elseif($r->rating === 5)
                <img src="/public/star/5.svg" width="200"style="width:200" alt="">
            @endif
           
            @if( $r->rating === 0 )
                <img src="/public/star/6.svg" width="200"style="width:200" alt="">
            @elseif( $r->rating === 1.2 || $r->rating === 1.3 || $r->rating === 1.4 || $r->rating === 1.5 || $r->rating === 1.6 || $r->rating === 1.7 )
                <img src="/public/star/15.svg" width="200"style="width:200" alt="">
            @elseif( $r->rating === 2.2 || $r->rating === 2.3 || $r->rating === 2.4 || $r->rating === 2.5 || $r->rating === 2.6 || $r->rating === 2.2 )
                <img src="/public/star/25.svg" width="200"style="width:200" alt="">
            @elseif( $r->rating === 3.2 || $r->rating === 3.3 || $r->rating === 3.4 || $r->rating === 3.5 || $r->rating === 3.6 || $r->rating === 3.7)
                <img src="/public/star/35.svg" width="200"style="width:200" alt="">
            @elseif( $r->rating === 4.2 || $r->rating === 4.3 || $r->rating === 4.4 || $r->rating === 4.5 || $r->rating === 4.6 || $r->rating === 4.7)
                <img src="/public/star/45.svg" width="200"style="width:200" alt="">
            @endif
        </small> 
    </div> <br>
<small style="text-align:center;display:flex;justify-content:center">Rated &nbsp;<b>{{ number_format($r->rating,2)  }}/5.00 &nbsp;&nbsp;</b> <strong>|</strong> <img src="/public/star/logo.png" style="margin:0 10px;height:20px" alt=""> <strong>Trustjet Review</strong> </small> <br> 
<strong>{{ substr($r->review_title, 0, 24) }}</strong><br>

<div id="section">"{{ substr( $r->review_content, 0, 99 )}}"</div>

</section>
<div class="peopl">
	<h3>{{ $r->user->name }}</h3>
</div>
<p>
<a href="{{ $c->slug }}" style="font-size:12px;" target="_blank" class="full-review-link">{{ __('Read full review') }}</a>
</p><!-- /.btn -->
</figure>
</div>

@empty
	{{ __('No reviews for this company yet') }}
@endforelse

</div><!--./testiSlide -->
</div><!-- /.container -->
</body>
</html>