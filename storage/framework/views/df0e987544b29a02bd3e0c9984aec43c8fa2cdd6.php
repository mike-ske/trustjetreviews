<!doctype html>
<html lang="en">
  <head prefix="og: https://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="crivion">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title><?php if(isset($seo_title)): ?> <?php echo e($seo_title); ?> <?php else: ?> <?php echo e(Options::get_option( 'seo_title', 'PHP Trusted Reviews' )); ?> <?php endif; ?></title>

    <?php if(!isset($seoReviewMetaTag)): ?>
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
      <meta property="og:url" content="<?php echo e(request()->fullUrl()); ?>" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="<?php echo $__env->yieldContent('title', config('app.name')); ?>" />
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
       
        <?php if( $d = Options::get_option( 'seo_desc' ) ): ?>
        <meta name="description" content="<?php echo e($d); ?>" />
        <?php endif; ?>
    
        <?php if( $k = Options::get_option( 'seo_keys' ) ): ?>
        <meta name="keywords" content="<?php echo e($k); ?>" />
        <?php endif; ?>
        
    <?php else: ?>
        <?php echo SEOMeta::generate(); ?>

        <?php echo Artesaos\SEOTools\Facades\OpenGraph::generate(); ?>

        <?php echo Twitter::generate(); ?>

        <?php echo JsonLd::generate(); ?>

        <meta name="description" content="Find out what our raving customers are saying about us.">
        <meta property="og:image:alt" content="<?php echo e($seo_title); ?>" />
        <meta property="og:image:type" content="image/jpeg">
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        
        <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">
        <link itemprop="thumbnailUrl" href="http://trustjetreviews.com/public/storage/thumbnail.jpeg"> 
        <meta property="og:locale" content="en_GB" />
        <meta property="fb:page_id" content="1077364553177489" />
        <meta property="fb:app_id" content="1077364553177489" />
    <?php endif; ?>
   

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/cookieconsent.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/sweetalert.css')); ?>" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
    
    

    <!-- Bootstrap Select CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    
    <!-- extra CSS loaded by other views -->
    <?php echo $__env->yieldContent( 'extraCSS' ); ?>

    <?php if( Options::get_option( 'extra_js' ) ): ?>
        <?php echo Options::get_option( 'extra_js' ); ?>

    <?php endif; ?>
    
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
          .a2a_default_style:not(.a2a_flex_style) a{
              transform:scale(0.8);
          }
          .a2a_default_style .a2a_counter img, .a2a_default_style .a2a_dd, .a2a_default_style .a2a_svg{
              background-color: #c0c0ca !important;
              border-radius: 0px !important;
          }
          /*
            STAR REVIEW WIDGET STYLE
          */
        .stars {
            display: inline-block;
            position: relative;
        }
        
        .stars label .str {
            color: #ffffff;
            background: #ccc;
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
            width: 50px;
            height: 50px;
            text-align: center;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
        }
      @media  only screen and (max-width: 768px) {
        .stars label .str {
            width: 40px;
            height: 40px;
            font-size: 30px;
        }
      }
      </style>

  </head>

  <body>
    <?php echo $__env->make( 'partials/navi' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main role="main">
        
     <?php if( 'home' == Route::currentRouteName() ): ?>
      <?php echo $__env->make( 'partials/home-header' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php else: ?>
      <?php echo $__env->make( 'partials/inner-header' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php endif; ?>

    <?php echo $__env->yieldContent( 'content' ); ?>
    
    </main>
    
    <link itemprop="thumbnailUrl" href="http://trustjetreviews.com/public/storage/54127843962023b489fccf.jpg">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="http://trustjetreviews.com/public/54127843962023b489fccf.jpg">
        <meta itemprop="width" content="1200">
        <meta itemprop="height" content="800">
    </span>
    
    
    <br/>
    <?php echo $__env->make( 'partials/footer' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>

    <!-- jQuery Lib -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Twitter Bootstrap 4 Lib -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- BS Select JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <!-- Stripe JS SDK -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      
    <script src="//cdn.jsdelivr.net/npm/goodshare.js@6/goodshare.min.js"></script>
    
    <script type="text/javascript">
      Stripe.setPublishableKey('<?php echo e(Options::get_option('STRIPE_PUBLISHABLE_KEY')); ?>');
    </script>

    <!-- App JS -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    
    <!-- STAR REVIEWS WIDJET JS -->
    <script src="<?php echo e(asset('js/widget.js')); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo Options::get_option( 'siteAnalytics' ); ?>


    <!-- extra JS loaded by other views -->
    <!--<?php echo $__env->yieldContent( 'extraJS' ); ?>-->
    <script>
      $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        jQuery(document).ready(function($) {

            // handle upvoting
            $( '.upvote' ).click( function() {

                var review = parseInt($( this ).data( 'review' ));

                $.getJSON( 'http://trustjetreviews.com/vote/review/' + review, function( r ) {

                    if (r.hasOwnProperty('error')) {
                        var oopsMsg = 'Oops...';
                        sweetAlert(oopsMsg, r.error, "error");
                    }else{
                        $( 'span.upvotes[data-review="' + review +'"]' ).html( r.upvotes );
                    }

                });
                
            });
    
            // handle text when hovering stars!
            $( '.star' ).hover( function() {

                // define which star was clicked
                var dataNo = $( this ).data( 'no' );

                // hide all other texts
                $( '.text-star' ).hide();

                // reveal text under hovered star
                $( '.text-star-' + dataNo ).css('display', 'table-footer-group');

            }, 
            function() {

            });

            // add rating value into the form input
            $( '.star' ).click( function() {

                var rating = $( this ).data( 'rating' );
                
                $( "input[name=rating]" ).val( rating );

                console.log( 'Rating Chosen: ' + rating );

            });

            $( '.btn-toggle-review-form' ).click( function() {

                $( '.review-form-toggle' ).toggle();

            });

            $( '.btn-reply' ).click( function() {
                var replyID = $( this ).data( 'id' );
                $(this).hide();
                
                var replyForm = $("form[name=replyAsCompany" + replyID + "]");
                replyForm.show();



            });

        });
  
    </script>

    <script src="<?php echo e(asset( 'js/cookieconsent.min.js' )); ?>"></script>
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
            "message": "<?php echo e(__("This website uses cookies for a better experience.")); ?>",
            "dismiss": "<?php echo e(__("Ok, I understand")); ?>",
            "link": "<?php echo e(__("Privacy Policy")); ?>",
            "href": "<?php echo e(__("/p-privacy-policy")); ?>",
          }
        });
    </script>

  
  <script src="https://use.fontawesome.com/99a65d622e.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
  

  </body>
</html><?php /**PATH /home2/trustjetreviews/public_html/resources/views/base.blade.php ENDPATH**/ ?>