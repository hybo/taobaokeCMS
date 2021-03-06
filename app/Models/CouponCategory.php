<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponCategory extends Model
{
    protected $table = "coupon_categorys";

    protected $fillable = [
      'category_name', 'self_where', 'image_small', 'order', 'is_show', 'font_icon'
    ];

    // 获取优惠券分类的信息
    public static function couponCategorys($from, $limit = 0)
    {
      $couponCategorys = CouponCategory::where('is_show', 1)->orderBy('order', 'asc');
      if ($limit > 0) {
        $couponCategorys = $couponCategorys->take($limit);
      }
      return $couponCategorys->get();
    }
}
