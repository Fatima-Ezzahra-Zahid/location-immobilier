<?php
namespace App\Providers;
use App\cities; // write model name here 
use Illuminate\Support\ServiceProvider;
class CitiesProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('cities_array', cities::all());
        });
    }

}
