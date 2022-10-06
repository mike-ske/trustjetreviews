@if( is_null( auth()->user()->provider_id))
<div class="alert alert-danger">
{{ __( 'Please verify your email address before being able to post a review.' ) }}
</div><!-- /.alert alert-info -->
@else
<div style="display:none;overflow:hidden" id="drpdn" class="card review-form-toggle">
<div class="star-source">
  <svg>
    <symbol id="star" viewBox="153 89 106 108">   
      <polygon id="star-shape" stroke="url(#grad)" stroke-width="5" fill="currentColor" points="206 162.5 176.610737 185.45085 189.356511 150.407797 158.447174 129.54915 195.713758 130.842203 206 95 216.286242 130.842203 253.552826 129.54915 222.643489 150.407797 235.389263 185.45085"></polygon>
    </symbol>
</svg>
</div><!-- ./star-source -->

<form method="post" action="{{ route('takeReview', [ 'site' => $review ]) }}">
@csrf

 <input type="hidden" name="rating">
 
 <div style="width:100%;display:flex;justify-content:center;align-item:center">
        <div style="margin:auto" class="star-container stars">
             
          <input type="radio" name="star" id="five">
          <input type="radio" name="star" id="four">
          <input type="radio" name="star" id="three">
          <input type="radio" name="star" id="two">
          <input type="radio" name="star" id="one">
           
          <label for="one">
              <span class="str star" id="str1" title="Great" data-no="one" data-rating="1" data-toggle="modal" data-target="#review-modal">&#9733;</span>
            <div class="text-star text-star-one">
        
             {{ __('Bad') }}
           </div>
          </label>
         
          <label for="two">
              <span class="str star" id="str2" title="Good"  data-toggle="modal" data-target="#review-modal" data-rating="2" data-no="two">&#9733;</span>
        
            <div class="text-star text-star-two">
            {{ __('Poor') }}
           </div>
          </label>
        
          <label for="three">
              <span class="str star" id="str3" title="Okay" data-toggle="modal" data-target="#form-modal" data-no="three" data-rating="3">&#9733;</span>
            <div class="text-star text-star-three">
            {{ __('Average') }} 
           </div>
          </label>
          
          <label for="four">
              <span class="str star" id="str4" title="Subpar"  data-toggle="modal" data-target="#form-modal" data-no="four" data-rating="4">&#9733;</span>
            <div class="text-star text-star-four">
            {{ __('Great') }}
           </div>
          </label>
          
          <label for="five">
              <span class="str star" id="str5" title="Bad" data-toggle="modal" data-target="#form-modal" data-no="five" data-rating="5">&#9733;</span>
           <div class="text-star text-star-five">
               {{ __('Excellent') }}
           </div>
          </label>
          
          
        </div><!-- ./star-container -->
 </div>

<div class="form-group">
<label>{{ __('Review Title') }}</label>
<input class="form-control" type="text" placeholder="{{ __('ie. Very good company') }}" name="review_title" value="{{ old('review_title') }}" required="required">
</div>
<div class="form-group">
<label>{{ __( 'Description' ) }}</label>
<textarea class="form-control" style="height: 180px;" name="review_content" placeholder="{{ __('Let others know about your experience with this company') }}" required="required">{{ old( 'review_content' ) }}</textarea>
</div>
<button type="submit" name="sbReview" class="btn btn-primary btn-block">{{ __('Post Review') }}</button>

</form>
</div>
@endif