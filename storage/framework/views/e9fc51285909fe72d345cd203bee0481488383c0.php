<?php $__env->startSection( 'content' ); ?>

	<div class="container">
		<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="card">
				
				<h5><?php echo e(__('Filters')); ?></h5>
				<form method="GET">
				<hr>

				<strong><?php echo e(__( 'Category' )); ?></strong><br>
				
				<a href="<?php echo e(route('browse-category', [ 'slug' => 'top-companies' ])); ?>">
					<?php echo e(__('Top Companies')); ?>

				</a>
				<br>

				<?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				<a href="<?php echo e(route('browse-category', [ 'slug' => $c->slug ])); ?>">
					<?php echo e($c->name); ?>

				</a><br>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<br>

				<?php if( is_null( $location ) ): ?>
				<strong><?php echo e(__( 'Location' )); ?></strong>
				<input type="text" name="location" class="form-control" id="city_region">
				<input type="hidden" name="lati" id="lati">
				<input type="hidden" name="longi" id="longi">
				<?php else: ?>
				<span class="tag tag-primary"><i class="fa fa-globe"></i> <?php echo e($location); ?> <a href="<?php echo e($resetURL); ?>" class="text-primary">[<?php echo e(__('Reset Location')); ?>]</a></span>
				<br>
				<?php endif; ?>
				<br>
				
				<strong><?php echo e(__( 'Sort By' )); ?></strong>
				<ul class="list-unstyled">
				<li><input type="radio" name="sortBy" value="default" <?php if(!request()->has('sortBy') OR request( 'sortBy' ) == 'default'): ?> checked="" <?php endif; ?>> <?php echo e(__('Default')); ?></li>
				<li><input type="radio" name="sortBy" value="best" <?php if(request('sortBy') == 'best'): ?> checked <?php endif; ?>> <?php echo e(__('Best Rated')); ?></li>
				<li><input type="radio" name="sortBy" value="worst" <?php if(request('sortBy') == 'worst'): ?> checked <?php endif; ?>> <?php echo e(__('Worst Rated')); ?></li>
				<li><input type="radio" name="sortBy" value="most-reviews" <?php if(request('sortBy') == 'most-reviews'): ?> checked <?php endif; ?>> <?php echo e(__('Most Reviewed')); ?></li>
				<li><input type="radio" name="sortBy" value="least-reviews" <?php if(request('sortBy') == 'least-reviews'): ?> checked <?php endif; ?>> <?php echo e(__('Least Reviewed')); ?></li>
				</ul><!-- /.list-unstyled -->

				<strong><?php echo e(__( 'No. of reviews' )); ?></strong>
				<ul class="list-unstyled">
				<li><input type="radio" name="reviewsCount" value="0" <?php if(!request()->has('reviewsCount') OR request('reviewsCount') == '0'): ?> checked <?php endif; ?>> <?php echo e(__('All')); ?></li>
				<li><input type="radio" name="reviewsCount" value="25" <?php if(request('reviewsCount') == 25): ?> checked <?php endif; ?>> 25+</li>
				<li><input type="radio" name="reviewsCount" value="50" <?php if(request('reviewsCount') == 50): ?> checked <?php endif; ?>> 50+</li>
				<li><input type="radio" name="reviewsCount" value="100" <?php if(request('reviewsCount') == 100): ?> checked <?php endif; ?>> 100+</li>
				<li><input type="radio" name="reviewsCount" value="250" <?php if(request('reviewsCount') == 250): ?> checked <?php endif; ?>> 250+</li>
				<li><input type="radio" name="reviewsCount" value="500" <?php if(request('reviewsCount') == 500): ?> checked <?php endif; ?>> 500+</li>
				<li><input type="radio" name="reviewsCount" value="1000" <?php if(request('reviewsCount') == 1000): ?> checked <?php endif; ?>> 1k+</li>
				</ul><!-- /.list-unstyled -->

				<strong><?php echo e(__( 'Company Status' )); ?></strong>
				<ul class="list-unstyled">
				<li><input type="radio" name="companyStatus" value="all" <?php if(!request()->has( 'companyStatus' ) OR request('companyStatus') == 'all'): ?> checked <?php endif; ?>> <?php echo e(__('All')); ?></li>
				<li><input type="radio" name="companyStatus" value="claimed" <?php if(request('companyStatus') == 'claimed'): ?> checked <?php endif; ?>> <?php echo e(__('Claimed')); ?></li>
				<li><input type="radio" name="companyStatus" value="unclaimed" <?php if(request('companyStatus') == 'unclaimed'): ?> checked <?php endif; ?>> <?php echo e(__('Unclaimed')); ?></li>
				</ul><!-- /.list-unstyled -->

				<hr>
				<input type="submit" name="sbFilter" value="<?php echo e(__('Apply Filters')); ?>" class="btn btn-primary">
			</form>
			</div>
		</div><!-- /.col-md-4 col-xs-12 -->

		<div class="col-md-8 col-xs-12">
		<div class="card">
			 <h5><?php echo e(__( 'Showing companies in' ) . ' ' . $category->name); ?></h5>
			 
			 <div class="col-xs-12">
			 	<?php echo e(Options::get_option( 'catAd' )); ?>

			 </div>

		</div><!-- ./card -->
		<br>

		<?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card">
			<h5><?php echo e($site->business_name); ?></h5>
			<span>
				<i class="fa fa-globe"></i> <?php echo e($site->location); ?> 
				<?php if( !is_null($location) ): ?>
				( <?php echo e(number_format($site->distance,2)); ?> <?php echo e(__( 'miles distance' )); ?> )
				<?php endif; ?>
			</span>
			<div class="row">
				<div class="col-6">
		            <h5 class="text-warning">
		                
		            	<?php if( $site->reviews->avg('rating') === 0 ): ?>
                            <img src="/public/star/6.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 1 ): ?>
                            <img src="/public/star/1.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 2 ): ?>
                            <img src="/public/star/2.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 3 ): ?>
                            <img src="/public/star/3.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 4 ): ?>
                            <img src="/public/star/4.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 5 ): ?>
                            <img src="/public/star/5.svg" width="300"style="width:120px" alt="">
                        <?php endif; ?>
                            
                        <?php if( $site->reviews->avg('rating') === 0 ): ?>
                            <img src="/public/star/6.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 1.5 || $site->reviews->avg('rating') === 1.6 || $site->reviews->avg('rating') === 1.7 || $site->reviews->avg('rating') === 1.7 || $site->reviews->avg('rating') === 1.8 ): ?>
                            <img src="/public/star/15.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 2.5 || $site->reviews->avg('rating') === 2.6 || $site->reviews->avg('rating') === 2.7 || $site->reviews->avg('rating') === 2.7 || $site->reviews->avg('rating') === 2.8 ): ?>
                            <img src="/public/star/25.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 3.5 || $site->reviews->avg('rating') === 3.6 || $site->reviews->avg('rating') === 3.7 || $site->reviews->avg('rating') === 3.7 || $site->reviews->avg('rating') === 3.8 ): ?>
                            <img src="/public/star/35.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 4.5 || $site->reviews->avg('rating') === 4.6 || $site->reviews->avg('rating') === 4.7 || $site->reviews->avg('rating') === 4.7 || $site->reviews->avg('rating') === 4.8 ): ?>
                            <img src="/public/star/45.svg" width="300"style="width:120px" alt="">
                        <?php endif; ?>
                        
		                <span class="badge badge-light">
		                	<?php echo e(number_format($site->reviews->avg('rating'),2)); ?>/5.00
		            	</span>
		        	</h5>
	        	</div>
	        	<div class="col-6">
					<h5 class="text-muted"><?php echo e($site->reviews->count()); ?> <?php echo e(__('reviews')); ?></h5>
				</div>
        	</div>
			<hr>
        	<div class="row">
			<?php $__empty_1 = true; $__currentLoopData = $site->reviews()->take(2)->orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="col-6">
		            <h6 class="text-muted"><?php echo e($r->review_title); ?></h6>
		            <small><?php echo e(substr( $r->review_content, 0, 70 )); ?>....</small>
	        	</div>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	        	<h6 class="text-muted">&nbsp;&nbsp;&nbsp; <?php echo e(__( 'No reviews yet' )); ?></h6>
	        <?php endif; ?>	
        	</div>
			
			<hr>
        	<a href="<?php echo e(route( 'reviewsForSite', [ 'site' => $site ] )); ?>" class="text-success"><?php echo e(__('Read all reviews for') . ' ' . $site->url); ?></a>

		</div><!-- ./card -->
		<br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<?php echo e($sites->appends([ 'sortBy' => request('sortBy'), 
		                     'reviewsCount' => request('reviewsCount'), 
		                     'lati' => request('lati'), 
		                     'longi' => request('longi'), 
		                     'location' => request('location'), 
							 'companyStatus' => request( 'companyStatus' ) ])
							 ->links()); ?>


		</div>		
		</div>
	</div><!-- /.container card -->
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'extraJS' ); ?>

 <script src="https://maps.google.com/maps/api/js?libraries=places&key=<?php echo e(Options::get_option('mapsApiKey')); ?>"></script>
  <script>

  // Address autocomplete
    var placeSearch, autocomplete;
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
    };

    function initialize() {
      // Create the autocomplete object, restricting the search
      // to geographical location types.
      autocomplete = new google.maps.places.Autocomplete(
          /** @type  {HTMLInputElement} */(document.getElementById('city_region')),
          { types: ['geocode'] });
      // When the user selects an address from the dropdown,
      // populate the address fields in the form.
      google.maps.event.addListener(autocomplete, 'place_changed', function() {
        fillInAddress();
      });
    }

    // [START region_fillform]
    function fillInAddress() {
      // Get the place details from the autocomplete object.
      var place = autocomplete.getPlace();

      console.log( place.address_components );


      // get latitute and longitude
      var lati = place.geometry.location.lat();
      var longi = place.geometry.location.lng();

      document.getElementById('lati').value = lati;
      document.getElementById('longi').value = longi;

      // get city and state
      var ac = place.address_components;
      var city = ac[ 1 ].long_name;
      var state = ac[ 3 ].long_name;

      document.getElementById('city').value = city;
      document.getElementById('state').value = state;

      // console.log( "City: " + city + ", State: " + state );

      for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = false;
      }

      // Get each component of the address from the place details
      // and fill the corresponding field on the form.
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById(addressType).value = val;
          console.log( addressType + "=" + val );
        }
      }
    }
    // [END region_fillform]

    // [START region_geolocation]
    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = new google.maps.LatLng(
              position.coords.latitude, position.coords.longitude);
          var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
          });
          autocomplete.setBounds(circle.getBounds());
        });
      }
    }
    // [END region_geolocation]

    $( document ).ready( function() {
    	initialize();
    });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/browse-category.blade.php ENDPATH**/ ?>