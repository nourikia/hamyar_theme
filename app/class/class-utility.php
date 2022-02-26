<?php

class Class_Utility
{
    public static function persian_numbers ($input)
    {
        $persian_number = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $english_number = array('0','1','2','3','4','5','6','7','8','9');

        return str_replace($english_number,$persian_number,$input);
    }
}