<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $primaryKey = 'id';
  protected $guarded = [];

<<<<<<< HEAD
  public function user()
  {
      return $this->belongsTo(User::class);
  }
=======
  // Del archivo de Jeff
  public function user()
   {
       return $this->belongsTo(User::class);
   }
>>>>>>> a1c5e5cb746fbd9c3fb9415de5e0c0acb9885415
}
