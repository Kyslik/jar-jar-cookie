<?php

namespace App\Foundation\Facades;

use Illuminate\Support\Facades\Cookie as CookieStock;

class Cookie extends CookieStock
{

    /**
     * Retrieve a cookie from the request.
     *
     * @param  string $key
     * @param  mixed  $default
     *
     * @return string
     */
    public static function get($key = null, $default = null)
    {
        return parent::get(config('app.env').'_'.$key, $default);
    }


    /**
     * Determine if a cookie exists on the request.
     *
     * @param  string $key
     *
     * @return bool
     */
    public static function has($key)
    {
        return parent::has(config('app.env').'_'.$key);
    }

}
