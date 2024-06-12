<?php
    function setActivo($ruta){
        $currentRoute = request()->path();
        return Str::startsWith($currentRoute, $ruta) ? 'activo' : 'inactivo';
    }