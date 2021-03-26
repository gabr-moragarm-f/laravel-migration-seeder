<?php

namespace App\Http\Controllers\Api;

use App\Character;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{

  public function firstCharacter()
  {
    $response = Character::orderBy('id','asc')->first();

    return response()->json($response);
  }
}
