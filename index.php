<?php
function getShapeCornersCount(...$shapeNames)
{
    $shapes = ['square' => 4, 'circle' => 0, 'rectangle' => 4];
    array_walk($shapeNames, function ($name) use ($shapes) {
        $shape = strtolower(trim($name));
        $corners = array_key_exists($shape, $shapes) ? $shapes[$shape] : "not defined";
        echo "$shape - $corners ";
    });
}

getShapeCornersCount('square', 'circle', 'triangle');