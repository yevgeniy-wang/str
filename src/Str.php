<?php


namespace Hillel\Str;


class Str
{
    public static function after($subject, $after)
    {
        if(strpos($subject, $after) === false){
            return $subject;
        } else {
            $substr = substr ($subject, strpos($subject, $after) + strlen($after));
            return $substr;
        }
    }

    public static function afterLast($subject, $after)
    {
        if(strrpos($subject, $after) === false){
            return $subject;
        } else {
            $substr = substr ($subject, strrpos($subject, $after) + strlen($after));
            return $substr;
        }
    }
}