<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
/* route/route.php */ 
Route::get('', 'welcome/index/home'); 
Route::get('/help', 'welcome/index/help'); 
Route::get('/about', 'welcome/index/about');

Route::get('/signup', 'user/auth/create');

return [

];
