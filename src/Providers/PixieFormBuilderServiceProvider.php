<?php

namespace JfBiswajit\PixieFormBuilder\Providers;

use Illuminate\Support\ServiceProvider;

class PixieFormBuilderServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'form-builder');
  }
}
