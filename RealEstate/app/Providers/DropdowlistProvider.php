<?php
namespace App\Providers;
use App\Dropdown; // write model name here 
use Illuminate\Support\ServiceProvider;
class DropdowlistProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('types_array',  Dropdown::all());
        });
    }

}
