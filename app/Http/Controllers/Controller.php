<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redis;

class Controller extends BaseController
{
    public function test()
    {
        // echo app('redis')->exists("hello");
        Redis::set("SET_KEY", "Pitush");
        $redis_data = Redis::get("SET_KEY");
        // $redis_data = json_decode($redis_data, true);
        echo $redis_data;
    }
}
