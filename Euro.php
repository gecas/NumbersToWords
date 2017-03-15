<?php

namespace App\NumbsToWords;


class Euro
{
    public function getLitai($number)
    {
        if ($number == 0)
            return 'eurų';

            $last = substr($number, -1);
            $du = substr($number, -2, 2);

            if (($du > 10) && ($du < 20))
            return 'eurų';
        else
        {
        if ($last == 0)
            return 'eurų';
        elseif ($last == 1)
            return 'euras';
        else
            return 'eurai';
        }
    }
}