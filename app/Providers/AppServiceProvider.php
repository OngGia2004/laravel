<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\ProductType;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
      }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view() ->composer('page.header',function($view){
            $type_pro = ProductType::all();
            $view->with('type_pro',$type_pro);
        });

        view()->composer(["page.header",'page.checkout'],function ($view)
        {
            if (Session('cart')) {
                $oldcart = Session::get('cart');
                $cart = new Cart($oldcart);
                $view->with(['cart'=> Session::get('cart'),'product_cart' => $cart->items,
                    'totalprice'=>$cart->totalPrice,
                    'totalqty'=>$cart->totalQty]);

            }
        });
    }
}
