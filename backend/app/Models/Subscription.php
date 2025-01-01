<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'plan_id',
    'stripe_subscription_id',
    'stripe_status',
    'stripe_plan_id',
    'current_period_start',
    'current_period_end',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'current_period_start' => 'datetime',
    'current_period_end' => 'datetime',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function plan()
  {
    return $this->belongsTo(Plan::class);
  }

  public function getCurrentPeriodStartAttribute($value)
  {
    return Carbon::parse($value)->format('Y-m-d h:s:i');
  }

  public function getCurrentPeriodEndAttribute($value)
  {
    return Carbon::parse($value)->format('Y-m-d h:s:i');
  }
}
