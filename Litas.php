<?php

namespace App\NumbsToWords;


class Litas extends Currency
{
    public function getCurrency($number)
    {
        if ($number == 0)
            return 'litų';

            $last = substr($number, -1);
            $du = substr($number, -2, 2);

            if (($du > 10) && ($du < 20))
            return 'litų';
        else
        {
        if ($last == 0)
            return 'litų';
        elseif ($last == 1)
            return 'litas';
        else
            return 'litai';
        }
    }
}