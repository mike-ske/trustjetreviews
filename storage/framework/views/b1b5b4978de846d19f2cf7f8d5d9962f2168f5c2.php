<?php $__env->startSection( 'content' ); ?>

	<div class="container">
		<div class="row">
		<div class="col-md-8 col-xs-12">
		<div class="card">
			<h2><?php echo e(__('Submit Company')); ?></h2>
			<?php echo e(__( "Didn't find the company you're looking for?" )); ?>	
			<hr>

			<form method="POST" action="<?php echo e(route('storeCompany')); ?>">
			<?php echo csrf_field(); ?>

			<label><?php echo e(__('Website URL')); ?></label>
			<input type="text" name="url" value="<?php echo e(old('url')); ?>" placeholder="<?php echo e(__('http://example.com')); ?>" class="form-control" required="required">
			
			<br>
			<label><?php echo e(__('Company Name')); ?></label>
			<input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('Example Ltd')); ?>" class="form-control" required="required">

			<br>
			<label><?php echo e(__('Category')); ?></label>
			<select class="form-control" name="category_id">
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($c->id); ?>" <?php if(old('category_id') == $c->id): ?> selected <?php endif; ?>><?php echo e($c->name); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			<br>
			<label><?php echo e(__('Location')); ?></label>
			<input type="text" name="city_region" id="city_region" placeholder="<?php echo e(__('Company Location')); ?>"  required="required" autocomplete="off" class="form-control" value="<?php echo e(old('city_region')); ?>">
				
			</select>

			<input type="hidden" name="lati" id="lati" value="<?php echo e(old('lati')); ?>">
			<input type="hidden" name="longi" id="longi" value="<?php echo e(old('longi')); ?>">

			<br>
			<input type="submit" name="sbNewReviewItem" class="btn btn-block btn-primary" value="<?php echo e(__('Submit New Company')); ?>">

			</form>
		</div>
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

<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/submit-company.blade.php ENDPATH**/ ?>