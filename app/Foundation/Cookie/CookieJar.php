<?php

namespace App\Foundation\Cookie;

use Illuminate\Cookie\CookieJar as CookieJarStock;

class CookieJar extends CookieJarStock
{

    public function make(
        $name,
        $value,
        $minutes = 0,
        $path = null,
        $domain = null,
        $secure = null,
        $httpOnly = true,
        $raw = false,
        $sameSite = null
    ) {
        return parent::make(config('app.env').'_'.$name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
    }
}