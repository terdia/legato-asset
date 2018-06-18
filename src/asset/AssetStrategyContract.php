<?php


namespace Legato\Framework\Asset;

interface AssetStrategyContract
{

    public function url($path);

    public function getVersion($path);

}