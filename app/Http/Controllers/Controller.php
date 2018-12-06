<?php

namespace App\Http\Controllers;

use App\Effect;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function update(Effect $effect, Request $request)
    {
        $parameters = $request->input('parameters');

        if ($parameters) {
            $effect->parameters = $parameters;
            $effect->save();
        }
    }

    public function start(Effect $effect)
    {
        $effect->active = true;
        $effect->save();
    }

    public function stop(Effect $effect)
    {
        $effect->active = false;
        $effect->save();
    }
}
