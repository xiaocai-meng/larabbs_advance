<?php
/**
 * Created by PhpStorm.
 * User: mengzhennan
 * Date: 2018/5/2 0002
 * Time: 上午 11:12
 */

namespace App\Observers;

use App\Models\Link;
use Illuminate\Support\Facades\Cache;


class LinkObserver
{
    // 在保存时清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}