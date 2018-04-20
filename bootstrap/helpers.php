<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/20 0020
 * Time: 上午 9:44
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}