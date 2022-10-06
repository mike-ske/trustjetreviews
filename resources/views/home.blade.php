@extends( 'base' )

@section( 'content' )
<div class="container">
@if( !empty( Options::get_option( 'homeAd' ) ) )
    <div class="row">
    <div class="col-xs-12">
    {!! Options::get_option( 'homeAd' ) !!}
    <br><br>
</div><!-- /.col-xs-12 -->
</div><!-- /.row -->
@endif
    <div class="row">

@forelse($reviews as $r)

    <div class="col-md-4 margin-bottom-25">
        <div class="card card_bx">
            <p class="text-warning">
                @if($r->rating === 0)
                    <img src="/public/star/6.svg" width="300"style="width:120px" alt="">
                @elseif($r->rating === 1)
                    <img src="/public/star/1.svg" width="300"style="width:120px" alt="">
                @elseif($r->rating === 2)
                    <img src="/public/star/2.svg" width="300"style="width:120px" alt="">
                @elseif($r->rating === 3)
                    <img src="/public/star/3.svg" width="300"style="width:120px" alt="">
                @elseif($r->rating === 4)
                    <img src="/public/star/4.svg" width="300"style="width:120px" alt="">
                @elseif($r->rating === 5)
                    <img src="/public/star/5.svg" width="300"style="width:120px" alt="">
                @endif
                
                @if( $r->rating === 0 )
                    <img src="/public/star/6.svg" width="300"style="width:120px" alt="">
                @elseif( $r->rating === 1.2 || $r->rating === 1.3 || $r->rating === 1.4 || $r->rating === 1.5 || $r->rating === 1.6 || $r->rating === 1.7 )
                    <img src="/public/star/15.svg" width="300"style="width:120px" alt="">
                @elseif( $r->rating === 2.2 || $r->rating === 2.3 || $r->rating === 2.4 || $r->rating === 2.5 || $r->rating === 2.6 || $r->rating === 2.2 )
                    <img src="/public/star/25.svg" width="300"style="width:120px" alt="">
                @elseif( $r->rating === 3.2 || $r->rating === 3.3 || $r->rating === 3.4 || $r->rating === 3.5 || $r->rating === 3.6 || $r->rating === 3.7)
                    <img src="/public/star/35.svg" width="300"style="width:120px" alt="">
                @elseif( $r->rating === 4.2 || $r->rating === 4.3 || $r->rating === 4.4 || $r->rating === 4.5 || $r->rating === 4.6 || $r->rating === 4.7)
                    <img src="/public/star/45.svg" width="300"style="width:120px" alt="">
                @endif

                <span class="text-muted">
                    {{ number_format($r->rating,2)  }}/5.00
                </span>
            </p>
            <div class="row">
            <div class="col-4 col-md-3">
                <img src="{{ ($r->user->avatar == 0) ? $r->user->profileThumb : $r->user->avatar; }}" alt="profile pic" class="img-fluid rounded-circle shadow">
                <!--<img src="{{ $r->user->profileThumb ?? (new App\User)->getProfileThumbAttribute() }}" alt="profile pic" class="img-fluid rounded-circle shadow">-->
            </div><!-- /.col-xs-6 col-md-1 -->
            <div class="col-8 col-md-8 text-muted">
                <strong style="color:black">{{ $r->reviewer }}</strong> <span style="font-size:12px">{{ __('reviewed') }}</span><br>
                    
                <a href="{{ $r->site->slug }}">{{ $r->site->url }}</a>
            </div><!-- /.col-xs-6 col-md-11 -->
            </div><!-- /.row -->
            <br>
            <p class="text-bold">{{ $r->review_title }}</p>
            <p style="color:black">"{{ substr( $r->review_content, 0, 1000 )}}..."</p>
            <p class="justify-content-between">
                <span class="text-muted float-left">
                    {{ $r->timeAgo  }}
                </span>
                
                <a href="{{ $r->site->slug }}" class="btn btn-sm inline btn-success float-right">
                    &raquo; {{ __('Read Review') }}
                </a>
            </p>
            <!-- /.btn btn-xs btn-success -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col-md-3 -->
    
<!-- /.container -->
@empty
    <h1 class="text-center">
      <span class="badge badge-warning">
          {{ __('No reviews yet :(') }}
      </span>
      <!-- /.badge badge-warning -->
    </h1>
@endforelse

</div>
<!-- /.row -->
</div>

@endsection