<?php

namespace IW\Settings\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
  public function greetings($name, $greetings)
  {
    return view('settings::result', compact('name', 'greetings'));
  }
}
