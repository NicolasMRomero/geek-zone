<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class UserController extends Controller
{
  public function profile()
  {
      $products = Product::all()->where('user_id', '=', User::find('id'));
      return view('profile')->with('products', $products);
  }
}
