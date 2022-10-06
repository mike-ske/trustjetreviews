@extends('admin.base')

@section('section_title')
@endsection

@section('extra_top')
<div class="row">
<div class="col-lg-2 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3>{{ number_format($figures[ 'companies' ], 0)}}</h3>
      <p>Total Companies In Database</p>
    </div>
    <div class="icon">
      <i class="ion ion-pie-graph"></i>
    </div>
  </div>
</div><!-- total companies -->

<div class="col-lg-2 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <div class="inner">
      <h3>{{ number_format($figures[ 'reviews' ], 0)}}</h3>
      <p>Total Reviews In Database</p>
    </div>
    <div class="icon">
      <i class="fa fa-shopping-cart"></i>
    </div>
  </div>
</div><!-- total reviews -->



</div>

<div class="row">
<div class="col-xs-12">
<div style="background: white;">

</div>
</div>
</div>
@endsection

@section('section_body')

Note: Laravel Spark-Paddle does not provide a stats feature. You can watch the reports directly into paddle dashboard.

@endsection