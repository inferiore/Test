<?php

namespace Directorio\Librerias;
use Jenssegers\Blade\Blade;

class Vista
{

    static function renderizar($vista,$variables = []){
        $blade = new Blade('Views', 'Cache');

        return $blade->make($vista,$variables)->render();
    }
}