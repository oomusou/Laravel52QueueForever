<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Collection::macro('pick', function (array $columns) {
            return Collection::make($this->items)->map(function ($value) use ($columns) {
                return Collection::make($columns)
                    ->map(function ($column) use ($value) {
                        return $value->$column;
                    })->all();
            });
        });
    }
}
