<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $primaryKey = 'id';
  protected $guarded = [];

  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
