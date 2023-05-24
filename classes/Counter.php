<?php

class Counter
{
    private static int $counter = 1;
    public static function count()
    {
        return self::$counter++;
    }
}