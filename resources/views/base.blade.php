<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="crivion">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>@if(isset($seo_title)) {{ $seo_title }} @else {{ Options::get_option( 'seo_title', 'PHP Trusted Reviews' ) }} @endif</title>

    @if( $d = Options::get_option( 'seo_desc' ) )
    <meta name="description" content="{{ $d }}" />
    @endif

    @if( $k = Options::get_option( 'seo_keys' ) )
    <meta name="keywords" content="{{ $k }}" />
    @endif

    @if (isset($seoReviewMetaTag))
        {!! SEOMeta::generate() !!}
        {!! Artesaos\SEOTools\Facades\OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}
    @else
        
      <!-- HTML Meta Tags -->
      <title>TrustJetReviews</title>
      <meta name="description" content="#1 Business Reviews Platform for customers to share their experiences and for businesses to gather honest reviews about their products and services to supercharge their growth. In an era of keen competition, an important growth hack is customer reviews. Create value and let your raving customers share your amazing works through their reviews.">
      
      <!-- Google / Search Engine Tags -->
      <meta itemprop="name" content="TrustJetReviews">
      <meta itemprop="description" content="#1 Business Reviews Platform for customers to share their experiences and for businesses to gather honest reviews about their products and services to supercharge their growth. In an era of keen competition, an important growth hack is customer reviews. Create value and let your raving customers share your amazing works through their reviews.">
      <meta itemprop="image" content="http://trustjetreviews.com/public/storage/thumbnail.jpeg ">
      
      <!-- Facebook Meta Tags -->
      <meta property="og:url" content="http://trustjetreviews.com">
      <meta property="og:type" content="website">
      <meta property="og:title" content="TrustJetReviews">
      <meta property="og:description" content="#1 Business Reviews Platform for customers to share their experiences and for businesses to gather honest reviews about their products and services to supercharge their growth. In an era of keen competition, an important growth hack is customer reviews. Create value and let your raving customers share your amazing works through their reviews.">
      <meta property="og:image" content="http://trustjetreviews.com/public/storage/thumbnail.jpeg ">
      
      <!-- Twitter Meta Tags -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="TrustJetReviews">
      <meta name="twitter:description" content="#1 Business Reviews Platform for customers to share their experiences and for businesses to gather honest reviews about their products and services to supercharge their growth. In an era of keen competition, an important growth hack is customer reviews. Create value and let your raving customers share your amazing works through their reviews.">
      <meta name="twitter:image" content="http://trustjetreviews.com/public/storage/thumbnail.jpeg ">

      <!-- SOCIAL MEDIA POSTINH - META TAGS -->
      <meta property="og:url" content="{{ request()->fullUrl() }}" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="@yield('title', config('app.name'))" />
      <meta property="og:description" content="Trusted Reviews | Building Trust and Social Proof with Reviews From Customers Like You. A Software as a Service (SaaS) that provides a customer oriented tool for customers to share their experiences" />
      <!--<meta property="og:image" itemprop="image" content="http://trustjetreviews.com/public/storage/1645337720.png"/>-->
      <meta property="og:image:secure_url" itemprop="image" content="http://trustjetreviews.com/public/storage/thumbnail.jpeg " />
      <meta property="og:image:alt" content="Trustjet Reviews Image" />
      <meta property="og:image:type" content="image/jpeg">
      <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
      <meta property="og:image:width" content="300">
      <meta property="og:image:height" content="300">
      <link itemprop="thumbnailUrl" href="http://trustjetreviews.com/public/storage/thumbnail.jpeg"> 
      <meta property="og:locale" content="en_GB" />
      <meta property="fb:page_id" content="1077364553177489" />
      <meta property="fb:app_id" content="1077364553177489" />
      
      <!-- TWITTER SOCIAL POST - META TAG -->
      <!--<meta name="twitter:title" content="@yield('title', config('app.name'))">-->
      <!--<meta name="twitter:description" content="Trusted Reviews | Building Trust and Social Proof with Reviews From Customers Like You. A Software as a Service (SaaS) that provides a customer oriented tool for customers to share their experiences">-->
      <!--<meta name="twitter:image" content="http://trustjetreviews.com/public/storage/thumbnail.jpg">-->
      <!--<meta name="twitter:card" content="summary || summary_large_image || player || app"/>-->
      
    @endif

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Custom styles for this template -->
    <link href="/public/css/cookieconsent.min.css" rel="stylesheet">
    <link href="/public/css/app.css'" rel="stylesheet">
    <link href="/public/css/sweetalert.css'" rel="stylesheet">

    {{-- ALL COMPILED CSS --}}
    <link href="/public/css/app.css" rel="stylesheet">
    <link href="/public/css/boot.css" rel="stylesheet">
    <link href="/public/css/main.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css" integrity="sha512-9my9Mb2+0YO+I4PUCSwUYO7sEK21Y0STBAiFEYoWtd2VzLEZZ4QARDrZ30hdM1GlioHJ8o8cWQiy8IAb1hy/Hg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap Select CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
  

    <!-- extra CSS loaded by other views -->
    @yield( 'extraCSS' )

    @if( Options::get_option( 'extra_js' ) )
        {!! Options::get_option( 'extra_js' ) !!}
    @endif

     <style>
          div#social-links {
              margin: 0 auto;
              max-width: 500px;
          }
          div#social-links ul li {
              display: inline-block;
          }          
          div#social-links ul li a {
              padding: 4px;
              margin: 1px;
              font-size: 15px;
              color: #999;
          }
          div#social-links ul {
            display: flex;
            gap: 10px;
            align-items: self-start;
            margin: 0px;
            padding: 0px;
          }
          div#social-links ul li:hover a {
            color: #222;
          }

      </style>

  </head>

  <body>
    @include( 'partials/navi' )

    <main role="main">
        
     @if( 'home' == Route::currentRouteName() )
      @include( 'partials/home-header' )
     @else
      @include( 'partials/inner-header' )
     @endif

    @yield( 'content' )
    
    </main>
    
    <br/>
    @include( 'partials/footer' )
    
<link itemprop="thumbnailUrl" href="/public/storage/1645337720.png">

<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
    <link itemprop="url" href="/public/storage/1645337720.png.JPG">
</span>

    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- jQuery Lib -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Twitter Bootstrap 4 Lib -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- BS Select JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <!-- Stripe JS SDK -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

  
    <script type="text/javascript">
      Stripe.setPublishableKey('{{ Options::get_option('STRIPE_PUBLISHABLE_KEY') }}');
    </script>

    <!-- App JS -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    {{-- ALL COMPILED JS FILES --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/boot.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>

	@include('sweet::alert')


    {!! Options::get_option( 'siteAnalytics' ) !!}

    <!-- extra JS loaded by other views -->
    @yield( 'extraJS' )

    <script src="{{ asset( 'js/cookieconsent.min.js' ) }}"></script>
    <script>
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#edeff5",
              "text": "#838391"
            },
            "button": {
              "background": "#4b81e8"
            }
          },
          "content": {
            "message": "{{ __("This website uses cookies for a better experience.") }}",
            "dismiss": "{{ __("Ok, I understand") }}",
            "link": "{{ __("Privacy Policy") }}",
            "href": "{{ __("/p-privacy-policy") }}",
          }
        });
    </script>

  </body>
</html>