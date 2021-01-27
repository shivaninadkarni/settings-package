<?php

namespace IW\Settings;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    $this->loadViewsFrom(__DIR__ . '/views', 'settings');
  }

  public function register()
  {
  }
}
