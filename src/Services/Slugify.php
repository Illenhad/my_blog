<?php

namespace App\Services;

class Slugify
{
    /**
     * slugify parameter
     *
     * @param string $string
     * @param string $delimiter
     * @return string
     */
    function slugify(string $string, string $delimiter = '-'):string
    {
        $clean = strtolower($string);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        return trim($clean, $delimiter);
    }
}