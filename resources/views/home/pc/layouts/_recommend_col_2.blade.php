@foreach($couponsRecommend as $coupon)
<div class="col-sm-2 goods-box">
  <a href="{{ route('home.couponInfo', $coupon->id) }}" target="_blank">
    <div class="goods">
      <div class="img" style="height:128px;">
        <img class="lazy" data-original="{{ $coupon->image }}"  alt="{{ $coupon->goods_name }}">
      </div>
      <div class="info">
        <h5 class="card-title goods-name">{{ $coupon->goods_name }}</h5>
        <h5 class="card-title text-center goods-price">￥{{ $coupon->price_now }} <small><del>￥{{ $coupon->price }}</del></small></h5>
      </div>
    </div>
  </a>
</div>
@endforeach
