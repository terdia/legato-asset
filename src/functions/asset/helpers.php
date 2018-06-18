<?php

if(!file_exists('asset')){

    /**
     * Get versioned url for assets
     *
     * @param $path
     * @param $query
     * @return string
     */
    function asset($path, $query = null)
    {
        $version = is_null($query) ? "%s?%s" : "%s?$query=%s";
        $random = md5('random');

        $strategy = new \Legato\Framework\src\asset\StaticVersionStrategy(
            $random, $version
        );

        return $strategy->url($path);
    }
}