<?php

use IW\Settings\Http\Controllers\SettingsController;

Route::get('admin/settings', function () {
  return view('settings::list');
});

