<?php

require_once __DIR__.'/vendor/autoload.php';

$shirt = new Shirt('lebas' , 333 , ['color'=>'red' , 'brand'=>'adidas'] , 'lg');

$pants = new Pants('pants', 4000 , ['color'=>'blue' , 'brand'=>'adidas'] , 44 );

$shop = new Shop();
//dd(get_class($shop));
//dd(Shop::class);
$shop->addProduct($shirt , 4)->addProduct($pants , 7); //// فقط اخری که شلوار هست را انجام میده انگار!!!!!!!!!!!!
dd($shop->getSuggestion(Pants::class , 44 , 5000 , ['color'=>'blue', 'brand'=>'tt' ]));  ///// از کجا بفهمیم باید پارامتر اول را اون شکلی بدیم